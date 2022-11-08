@extends('layouts.master')
@section('content')

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>category Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$category->name}}</p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">Type</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$category->type}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Created Date</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$category->created_at}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$category->description}}</p>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="form-group row mb-0" >
                    <div class="col-md-9 offset-md-3" style="display: flex">
                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('category.destroy', $category->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</button>
                        </form>
                        <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
    
@endsection