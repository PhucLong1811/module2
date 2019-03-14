<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class slideController extends Controller
{

    public function create()
    {
        $slide = Slide::all();
        return view('action.slide.create');
    }


    public function postcreate(Request $request)
    {
        $slide = new Slide;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $slide->image = $path;
        }
        $slide->save();
        return redirect()->route('listslide');
    }

    public function list()
    {
        $slide = Slide::paginate(8);
        return view('action.slide.list',compact('slide'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('action.slide.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $slide->image = $path;
        }
        $slide->save();
        return redirect()->route('listslide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->route('listslide');
    }
}
