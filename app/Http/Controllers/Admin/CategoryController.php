<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Category;

use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function index(){

        $categories = Category::all();
        // $categories = Category::paginate(5);
        return view('admin.category.list', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ]
        );

        $slug = Str::slug($request->name);

        $checkSlug = Category::where('slug', $slug)->first();

        while($checkSlug) {
            $slug = $checkSlug->slug . Str::random(2);
        }

        Category::create([
            'name' => $request->name,
            'slug' => $slug
        ]);

        return redirect()->route('admin.category.index');
    }


    public function edit($id){

        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ]
        );

        $slug = Str::slug($request->name);

        $checkSlug = Category::where('slug', $slug)->first();

        while($checkSlug) {
            $slug = $checkSlug->slug . "-" .Str::random(2);
        }

        Category::where('id', $id)->update([
            'name' => $request->name,
            'slug' => $slug
        ]);


        return redirect()->route('admin.category.index', $id);
    }

    public function delete($id){
        
        Category::where('id', $id)->delete();
        return Redirect()->route('admin.category.index');

    }


}
