<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class PagesController extends Controller
{
    //
  public function index()
  {
      return view('pages.index');
  }

  public function contact()
  {
      return view('pages.contact');
  }

  public function product()
  {
      
      $products =Product::orderBy('id','desc')->get();
      return view('pages.product.index')->with('productall',$products);
      //return view('pages.product.index');
  }

}
