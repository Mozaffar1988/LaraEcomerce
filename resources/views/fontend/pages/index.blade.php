@extends('fontend.layouts.master')

@section('content')

<!--Start Sidebar + Content -->
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
        <div class="list-group">
          <a href="#" class="list-group-item">First item</a>
          <a href="#" class="list-group-item">Second item</a>
          <a href="#" class="list-group-item">Third item</a>
        </div>
    </div>
    <div class="col-md-8">         
        <div class="widget">
          <h3>Feature Product</h3>
            <div class="row">
                    <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'sumsang.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Sumsang</h4>
                              <p class="card-text">20000 Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'sumsang.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Sumsang</h4>
                              <p class="card-text">20000 Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'sumsang.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Sumsang</h4>
                              <p class="card-text">20000 Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'sumsang.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Sumsang</h4>
                              <p class="card-text">20000 Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'sumsang.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Sumsang</h4>
                              <p class="card-text">20000 Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'sumsang.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Sumsang</h4>
                              <p class="card-text">20000 Taka</p>
                              <a href="#" class="btn btn-outline-warning">Add To Card</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" >
                          <img class="card-img-top feature-img" src="{{ asset('images/product/'.'Huwei.jpg')}}" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Huwei</h4>
                              <p class="card-text">500000 Taka.</p>
                              <a href="#" class="btn btn-primary">dd To Card</a>
                          </div>
                      </div>
                  </div>              
            </div>
        </div>
        <div class="widget">              
        </div>
    </div>
  </div>
<!--End Sidebar + Content -->
@endsection