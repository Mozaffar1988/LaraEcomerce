@extends('backend.layouts.master')

@section('content')
<!-- partial -->
<div class="main-panel">
     <div class="content-wrapper">
     <div class="card-header">
        View Category 
        </div>
        <div class="card">   
                  
            <div class="card-body">      
            @include('backend.partials.message')  
                <table class="table table-hover table-striped">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Parrent Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($category as $categories)
                    <tr>
                        <th>#</th>
                        <th>{{$categories->name}}</th>
                        <th>{{$categories->description}}</th>
                        <th>

                        @if ($categories->parent_id==NULL)
                        Primary Category 
                        @else
                        {{$categories->parent->name}}
                         @endif               
                        </th>
                          
                        <th>
                        <a href="{{route('admin.product.edit', $categories->id)}}" class="btn btn-success">Edit</a>
                        <a href="#deleteModal{{$categories->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                        
                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{$categories->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{!!route('admin.product.delete',$categories->id)!!}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                            </form>
                            
                            </div>
                            <div class="modal-footer">  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>            
                               
                            </div>
                            </div>
                        </div>
                        </div>

                        </th>
                    </tr>
                    @endforeach                                      
                </table>
            </div>
        </div>
    </div> 
</div>
        <!-- main-panel ends -->

        @endsection