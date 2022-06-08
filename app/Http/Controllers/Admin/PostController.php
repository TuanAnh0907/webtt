<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Post;
use \App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index(){

        $posts = Post::orderBy('hidden','desc')->paginate(10);

        return view('admin.post.list', compact('posts'));

    }

    public function create(){

        $categories = Category::all();

        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request){

        $this->validate($request,
        [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required',
            'categories_id' => 'required',
        ]
        );

        $slug = Str::slug($request->title);

        $checkSlug = Post::where('slug', $slug)->first();

        if($checkSlug) {
            $slug = $checkSlug->slug . "_" . Str::random(2);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            if(strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/post/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('image/post', $image);
            }
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->get('content'),
            'image' => $image,
            'view_counts' => 10000,
            'user_id' => Auth::id(),
            'new_posts' => $request->new_posts ? 1 : 0,
            'hidden' => $request->hidden ? 1 : 0,
            'slug' => $slug,
            'categories_id' => $request->categories_id,
            'highlight_post' => $request->highlight_post ? 1 : 0,

        ]);
        
        return Redirect()->route('admin.post.index')->with('success', 'create successfully');
    }

    public function edit($id){

        $posts = Post::find($id);

        $categories = Category::all();

        return view('admin.post.edit',compact('posts','categories'));
    }

    public function update(Request $request, $id){
        $slug = Str::slug('.$request->name.');

        $checkSlug = Post::where('slug', $slug)->first();

        if($checkSlug){
            $slug = $checkSlug->slug . "-" . Str::random(2);
        };

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            if( strcasecmp($extension, 'jpg') === 0
            || strcasecmp($extension, 'png') === 0
            || strcasecmp($extension, 'jepg') === 0){

                $image = Str::random(5)."_".$name_file;

                while (file_exists("image/post/". $image)) {
                    $image = Str::random(5)."_". $name_file;
                }

                $file->move('image/post',$image);
            }

        } else{

        }

        $post = Post::find($id);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->get('content'),
            'image' => isset($image) ? $image : $post->image,
            'new_posts' => $request->new_posts ? 1 : 0,
            'hidden' => $request->hidden ? 1 : 0,
            'slug' => $slug,
            'categories_id' => $request->categories_id,
            'highlight_post' => $request->highlight_post ? 1 : 0,

        ]);

        return Redirect()->route('admin.post.index');
    }

    public function delete($id){
        Post::where('id', $id)->delete();
        return Redirect()->route('admin.post.index');
    }
}
