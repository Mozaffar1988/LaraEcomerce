@extends('admin.layouts.master')

@section('content')
<!-- partial -->
<div class="main-panel">
     <div class="content-wrapper">
     <div class="card-header">
        Manage Product
        </div>
        <div class="card">              
            <div class="card-body">             
                <table class="table table-hover table-striped">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach($product as $products)
                    <tr>
                        <th>#</th>
                        <th>{{$products->Title}}</th>
                        <th>{{$products->quantity}}</th>
                        <th>{{$products->price}}</th>
                        <th><a href="{{route('admin.product.edit', $products->id)}}" class="btn btn-success">Edit</a></th>
                    </tr>
                    @endforeach                                      
                </table>
            </div>
        </div>
    </div> 
</div>
        <!-- main-panel ends -->

        @endsection