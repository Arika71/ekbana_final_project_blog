@extends('layouts.frontend')
@section('content')

{{-- First section  --}}
<div class="hero overlay inner-page bg-primary py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up">Blog</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="section search-result-wrap">
    <div class="container">
      
      <div class="row posts-entry">
        <div class="col-lg-8">
            @foreach ($blogPosts as $item)
                
            <div class="blog-entry d-flex blog-entry-search-item">
                <a href="single.html" class="img-link me-4">
                    <img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid">
                </a>
                <div>
              <span class="date">{{$item->created_at}} &bullet; <a href="#">{{$item->category->name}}</a></span>
              <h2><a href="single.html">{{$item->title}}</a></h2>
              <p>{{$item->description}}.</p>
              <p><a href="{{route('single.blog',$item->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
        </div>
        @endforeach


        </div>

        <div class="col-lg-4 sidebar">

          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                @foreach ($sideBlog as $item)
                    
                <li>
                    <a href="">
                    <img src="{{url('images/')}}/{{$item->image}}" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                        <h4>{{$item->title}}</h4>
                        <div class="post-meta">
                            <span class="mr-2">{{$item->created_at}}</span>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
                
              </ul>
            </div>
          </div>
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
                @foreach($category as $item)
              <li><a href="#">{{$item->name}}</li>
                @endforeach
            </ul>
          </div>
          <!-- END sidebar-box -->


        </div>
      </div>
    </div>
  </div>
@endsection