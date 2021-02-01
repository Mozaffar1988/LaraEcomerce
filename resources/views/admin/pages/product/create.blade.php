@extends('admin.layouts.master')

@section('content')
<!-- partial -->
<div class="main-panel">
     <div class="content-wrapper">
     <div class="card-header">
        Add Product
        </div>
        <div class="card">              
            <div class="card-body">             
                <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description"  cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" name="Quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter QTY">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" name="Price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <input type="file" class="form-control" name="product_image" id="product_image" >
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div> 
</div>
        <!-- main-panel ends -->

        @endsection