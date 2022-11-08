@extends('layouts.frontend')
@section('content')


  {{-- First section --}}

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
           
            <div class="row my-4">
              <div class="col-md-12 mb-4">
                <img src="{{url('images/')}}/{{$mainBlog->image}}" alt="Image placeholder" class="img-fluid rounded">
              </div>
            </div>
            <p>{{$mainBlog->description}}</p>
          </div>


          <div class="pt-5">
            <p> <b>Categories: </b>  {{$mainBlog->category->name}}
                <br>
                <b>Tags: </b> {{$mainBlog->tags}}</p>
          </div>


          <div class="pt-5 comment-wrap">
            <h2 class="mb-5 heading">Comments</h2>
            <ul class="comment-list">
              @foreach ($comment as $item)
                  
              <li class="comment">
                <div class="vcard">
                  <img src="{{url('images/')}}/{{$item->user->picture}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>{{$item->user->name}}</h3>
                  <div class="meta">{{$item->created_at}}</div>
                  <p>{{$item->comment}}</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>
              @endforeach

            
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>

              <form action="{{route('comment.store')}}" method="POST"p-5 bg-light>
                @csrf
                <div class="form-group">
                  <label for="message">Comments</label>
                  <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="hidden" value="{{$mainBlog->id}}" name="blog_id">
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          
          <!-- END sidebar-box -->
      
          <!-- END sidebar-box -->  
          <div class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                  @foreach($popularBlogs as $data)
                <li>
                  <a href="{{route('single.blog',$data->id)}}">
                    <img src="{{url('images/')}}/{{$data->image}}" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>{{$data->title}}</h4>
                      <div class="post-meta">
                        <span class="mr-2">{{$data->created_at}}</span>
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
                @foreach ($category as $data)
                    
                <li><a href="{{route('single.blog',$data->id)}}">{{$data->name}}</span></a></li>
                
                @endforeach
            </ul>
          </div>
          <!-- END sidebar-box -->

        </div>
        <!-- END sidebar -->

      </div>
    </div>
  </section>


  {{-- Second  Section --}}


  <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-uppercase text-black">More Blog Posts</div>
      </div>
      <div class="row">
        @foreach ($sideBlog as $item)
            
        <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
                <a href="{{route('single.blog',$item->id)}}" class="img-link">
                    <img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid">
                </a>
                <span class="date">{{$item->created_at}}</span>
                <h2><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h2>
                <p>{{$item->description}}</p>
                <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
        </div>
        @endforeach
       
      </div>
    </div>
  </section>

@endsection