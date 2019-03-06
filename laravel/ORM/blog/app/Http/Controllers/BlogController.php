<?php

namespace App\Http\Controllers;

use App\Blog;

use App\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        
        return view('index');
    }

    public function create()
    {
         $category = Category::all();
        return view('blog.manage.create',compact('category'));
    }

    public function store(Request $request)
    {
        $blogger = new Blog;
        $blogger->title = $request->title;
        $blogger->content = $request->content;
        $blogger->category_id = $request->category_id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $blogger->image = $path;
        }
        $blogger->save();
        
        return redirect()->route('list');
    }

    public function list ()
    {
        $blogger = Blog::paginate(4);
        return view('blog.manage.list',compact('blogger'));
    }
    public function show($id)
    {
        $blogger = Blog::find($id);
        return view('blog.manage.show',compact('blogger'));
    }

    public function edit($id)
    {
        $blogger = Blog::find($id);
        return view('blog.manage.edit',compact('blogger'));

    }

    public function update(Request $request, $id)
    {
        $blogger = Blog::find($id);
        $blogger->title = $request->title;
        $blogger->content = $request->content;
        $blogger->save();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogger = Blog::find($id);
        $blogger->delete();
        return redirect()->route('list');
    }
}
