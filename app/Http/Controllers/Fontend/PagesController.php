<?php
namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
  public function index()
  {
      return view('fontend.pages.index');
  }

  public function contact()
  {
      return view('fontend.pages.contact');
  }

}
