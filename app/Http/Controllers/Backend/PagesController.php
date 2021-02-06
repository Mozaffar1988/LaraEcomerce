<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Image;
use App\Models\ProductImage;

class PagesController extends Controller
{
    public function index()
  {
      return view('backend.pages.index');
  }



}
