<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;

class PageController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        $new_product = Product::paginate(8);
        return view('page.trangchu', compact('slide','new_product'));
    }
    public function LoaiSP()
    {
        return view('page.loai_sanpham');
    }
    public function showSanPham($id)
    {
        $product = Product::find($id);
        return view ('page.sanpham',compact('product'));
    }
    public function LienHe()
    {
        return view('page.lienhe');
    }
    public function GioiThieu()
    {
        return view('page.gioithieu');
    }
    public function search(Request $request)
    {
        $product = Product::where('name','like','%'.$request->key.'%')->orWhere('unit_price',$request->key)->get();
        return view('page.search',compact('product'));
    }
}