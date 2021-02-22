<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Catgory;
//use Image;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Category extends Controller
{
    public function index()
    {       
        //return view('admin.pages.product.index');
        $categories =Catgory::orderBy('id','desc')->get();
        return view('backend.pages.categories.index')->with('category',$categories);
        
     // return view('backend.pages.categories.index', compact('categories'));
     
    } 
    public function create()
    {
        //$maincategories =Catgory::orderBy('name','desc')->where('parent_id',NULL)->get();
        $maincategories =Catgory::orderBy('name','desc')->where('parent_id',NULL)->get();
        return view('backend.pages.categories.create')->with('categories',$maincategories);       
        //return view('backend.pages.categories.index');
    }
    
    public function store(Request $request)
    {
     // return
     /*
       $this->validate($request,[
        'name' =>'required',
        'image' =>'nullable|image',
      ]);
      */
      $category = new category;
      $category->name=$request->name;
      $category->description=$request->description;
      $category->parent_id=$request->PCat;
      $category->save();
      return redirect()->route('admin.categories.index');

    }
}
