<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class typeController extends Controller
{
    
    public function create()
    {
        $type = ProductType::all();
        return view('action.type_product.create');
    }

    
    public function postcreate(Request $request)
    {
        $type = new ProductType;
        $type->name = $request->name;
        $type->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $type->image = $path;
        }
        $type->save();
        return redirect()->route('listType');
    }

    public function list()
    {
        $type = ProductType::paginate(8);
        return view('action.type_product.list',compact('type'));
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
        $type = ProductType::find($id);
        return view('action.type_product.edit',compact('type'));
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
        $type = ProductType::find($id);
        $type->name = $request->name;
        $type->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $type->image = $path;
        }
        $type->save();
        return redirect()->route('listType');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = ProductType::find($id);
        $type->delete();
        return redirect()->route('listType');
    }
}
