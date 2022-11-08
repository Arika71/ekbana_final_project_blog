@extends('layouts.master')
@section('content')
   
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">title</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$blogs->title}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Author</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$blogs->author}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">category</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$blogs->category->name}}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Tags</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{$blogs->tags}}</p>
                    </div>
                  </div>


                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{route('blog.index')}}" class="btn btn-info">Back</a>
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