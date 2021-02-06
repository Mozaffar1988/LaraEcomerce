<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        
        $products =Product::orderBy('id','desc')->get();
        return view('fontend.pages.product.index')->with('productall',$products);
        //return view('pages.product.index');
    }

    public function show($slug)
    {
        
      //
    }
}
