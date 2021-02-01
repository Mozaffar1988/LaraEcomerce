<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;
use App\Models\ProductImage;
class AdminPagesController extends Controller
{
    public function index()
  {
      return view('admin.pages.index');
  }

  public function product_create()
  {
      return view('admin.pages.product.create');
  }

  public function product_store(Request  $request)
  {
      $product = new Product;
      $product->Title=$request->title;
      $product->description=$request->description;
      $product->quantity=$request->Quantity;
      $product->price=$request->Price;
      
      //$product->slug= str_slug($request->title);
      $product->slug= Str::slug($request->title);
      $product->category_id=1;
      $product->brand_id=1;
      $product->admin_id=1;
     
      $product->save();

      //Product Image Model Insert Image
    /*
      if($request->hasFile('product_image')){
          //insert that image
          $image = $request->file('product_image');
          $img = time() . ' . '.$image->getClientOriginalExtension();
          $location = public_path('images/product/' .$img);
          Image::make($image)->save($location);

          //ProductImage Model
          $product_image = new ProductImage;
          $product_image->product_id=$product->id;
          $product_image->image =$img;
          $product_image->save();
      }
*/
      if($request->hasFile('product_image')) {
        $image       = $request->file('product_image');
        $filename    = time().'. '.$image->getClientOriginalName();
    
        $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(300, 100);
        $image_resize->save(public_path('images/product/'.$filename));

         //ProductImage Model
         $product_image = new ProductImage;
         $product_image->product_id=$product->id;
         $product_image->image =$filename;
         $product_image->save();
    }

      return redirect()->route('admin.product.create');

  }

}
