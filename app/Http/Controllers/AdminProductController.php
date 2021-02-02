<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
class AdminProductController extends Controller
{
  /*
    public function index()
  {
      return view('admin.pages.index');
  }
*/
  public function index()
    {
        //return view('admin.pages.product.index');
        $products =Product::orderBy('id','desc')->get();
        return view('admin.pages.product.index')->with('product',$products);
    }
    public function create()
    {
        return view('admin.pages.product.create');
    }

    

    public function edit($id)
    {
        
        $products =Product::find($id);
        return view('admin.pages.product.edit')->with('product',$products);
    }

  public function store(Request  $request)
  {
      //form validation
      $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'Quantity' => 'required|numeric',
        'Price' => 'required|numeric',
        
      ]);

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

/// Single Image upload function
/*
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
    */
///Mutiple Image Upload Function
    if(count($request->product_image)>0)
         {

            foreach($request->product_image as $image)
            {
               // if($request->hasFile('product_image')) {
                //$image       = $request->file('product_image');
                  $filename    = time().'. '.$image->getClientOriginalName();             
                  $image_resize = Image::make($image->getRealPath());              
                  $image_resize->resize(300, 100);
                  $image_resize->save(public_path('images/product/'.$filename));
          
                  //ProductImage Model
                  $product_image = new ProductImage;
                  $product_image->product_id=$product->id;
                  $product_image->image =$filename;
                  $product_image->save();
             // }
            }
         }
///End Mutiple Image Upload Function
///End Single Image upload function
      return redirect()->route('admin.product.create');

  }







  public function update(Request  $request,$id)
  {
      //form validation
      
      $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'Quantity' => 'required|numeric',
        'Price' => 'required|numeric',
        
      ]);

      $product = Product::find($id);
      $product->Title=$request->title;
      $product->description=$request->description;
      $product->quantity=$request->Quantity;
      $product->price=$request->Price; 
      $product->save();

      return redirect()->route('admin.products');

  }

  
  public function delete($id)
  {

      $product = Product::find($id);
     // $image = ProductImage::find($id);
     // $image = DB::table('product_images')->where('product_id', $id)->first();
      
     // $product->delete();
    if (!is_null($product)){
      $product->delete();
    }
    /*
    if (!is_null($image)){
      $image->delete();
    }
*/
$image = DB::table('product_images')->where('product_id', $id)->delete();
    Session()->flash('success','Product has Deleted Succesfully !!');
    return back();


  }


}
