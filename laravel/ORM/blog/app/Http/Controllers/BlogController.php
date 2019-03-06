<?php

namespace App\Http\Controllers;

use App\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        
        return view('manage.index');
    }

    public function create()
    {
        return view('manage.create');
    }

    public function store(Request $request)
    {
        $blogger = new Blog;
        $blogger->title = $request->title;
        $blogger->content = $request->content;
        $blogger->save();
        return redirect()->route('list');
    }

    public function list ()
    {
        $blogger = Blog::all();
        return view('manage.list',compact('blogger'));
    }
    public function show($id)
    {
        $blogger = Blog::find($id);
        return view('manage.show',compact('blogger'));
    }

    public function edit($id)
    {
        $blogger = Blog::find($id);
        return view('manage.edit',compact('blogger'));

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
