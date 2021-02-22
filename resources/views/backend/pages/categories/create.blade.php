@extends('backend.layouts.master')

@section('content')
<!-- partial -->
<div class="main-panel">
     <div class="content-wrapper">
     <div class="card-header">
        Add Product
        </div>
        <div class="card">              
            <div class="card-body">             
                <form action="{{route('admin.categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('backend.partials.message')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description"  cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Parent Category</label>
                        <select name="PCat" id="parent_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                       
                    </div>

                    <div class="form-group">
                        <label for="product_image">Category Image</label>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- <input type="file" class="form-control" name="product_image" id="product_image" > -->
                                <input type="file" class="form-control" name="category_image" id="category_image" >
                            </div>
                            
                        </div>
                        
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div> 
</div>
        <!-- main-panel ends -->

        @endsection