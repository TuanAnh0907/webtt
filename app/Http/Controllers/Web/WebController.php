<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Post;
use \App\Models\Comment;
use \App\Models\Category;
use \App\Models\Contact;

class WebController extends Controller
{
    public function home(){
        $highlight = Post::where('highlight_post', 1)->where('hidden',1)->take(3)->get();
        $new = Post::where('new_posts', 1)->where('hidden',1)->orderBy('created_at','desc')->take(10)->get();
        $categories = Category::all();

        return view('web.home',compact('highlight','new','categories'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->where('hidden',1)->first();
        $post->update([
            'view_counts'=>$post->view_counts+10
        ]);

        $relate = Post::where('categories_id', $post->categories_id)->where('slug', '<>', $slug)->where('hidden',1)->take(4)->inRandomOrder()->get();

        $highlight = Post::where('highlight_post', 1)->where('hidden',1)->take(6)->get();

        $comments = Comment::where('post_id', $post->post_id)->paginate(8) ;

        $categories = Category::all();

        return view('web.post', compact('post', 'relate', 'highlight','categories'));
    }

    function comment(Request $request, $id){
        Comment::create([
            'content' => $request->get('content'),
            'user_id' => Auth::id(),
            'post_id' => $id,
        ]);

        return redirect()->back();
    }

    function category(){
        $posts = Post::paginate(6);
        $categories = Category::all();
        return view('web.category', compact('posts', 'categories'));
    }

    function categorySlug($slug){
        
        $category = Category::where('slug', $slug)->first();

        $posts = Post::where('categories_id', $category->id)->paginate(6);

        $categories = Category::all();

        return view('web.category', compact('posts', 'categories'));
    }

    function contact(){
        $categories = Category::all();
        return view('web.contact', compact('categories'));
    }

    function sendContact(Request $request){
        Contact::create([
            'name' => $request->name,
            'address'=> $request->address,
            'phone' =>  $request->phone,
            'subject' =>  $request->subject,
            'message' =>  $request->message,
        ]);
        return redirect()->route('web.contact')->with('success','Create contact successfully ');
    }

}
