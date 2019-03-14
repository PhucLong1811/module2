<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;

class ActionController extends Controller
{

    public function create()
    {

        $typePD = ProductType::all();
        return view('action.product.adminAction',compact('typePD'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postcreate(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->id_type = $request->id_type;
        $product->unit = $request->unit;
       /* $product->new = $request->new;*/
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('list');
    }

    public function list()
    {
        $product = Product::paginate(8);
        return view('action.product.list',compact('product'));
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
        $product = Product::find($id);
        return view('action.product.edit',compact('product'));
    }


    public function update(Request $request, $id)
    {
       $product = Product::find($id);
       $product->name = $request->name;
       $product->description = $request->description;
       $product->unit_price = $request->unit_price;
       $product->promotion_price = $request->promotion_price;
       $product->unit = $request->unit;
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $path = $image->store('images', 'public');
        $product->image = $path;
    }
    $product->save();
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
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('listslide');
    }
}
