@extends('layouts.master')

@section('content')

<!--Start Sidebar + Content -->
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
    @include('partial.product-sidebar')
    </div>

    <div class="col-md-8">         
        <div class="widget">
          <h3>Feature Product</h3>
            <div class="row">
            @foreach ($productall as $products)        
                    <div class="col-md-4">
                      <div class="card" >
                      @php
                      $i=1;
                      @endphp
                      @foreach ($products->images as $image)     
                      @if($i>0)
                         <img class="card-img-top feature-img" src="{{ asset('images/product/'.$image->image)}}" alt="Card image">
                         @endif
                         @php $i--;
                         @endphp
                       @endforeach
                      
                          <div class="card-body">
                              <h4 class="card-title">{{ $products->Title }} </h4>
                              <p class="card-text">{{ $products->price }} Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  @endforeach
            </div>
        </div>
        <div class="widget">               
        </div>
    </div>
  </div>

<!--End Sidebar + Content -->
@endsection