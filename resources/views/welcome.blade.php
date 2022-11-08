@extends('layouts.frontend')
@section('content')
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            
            <div class="col-md-4">
                @foreach ($blog as $item)
                <a href="{{route('single.blog',$item->id)}}" class="h-entry mb-30 v-height gradient">
                    
                    <div class="featured-img" style="background-image: url({{url('images/')}}/{{$item->image}});"></div>

                    <div class="text">
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h2>{{$item->title}}</h2>
                    </div>
                    
                </a>
                @endforeach

                @foreach ($blog2 as $item)
                <a href="{{route('single.blog',$item->id)}}" class="h-entry v-height gradient">
                    
                    <div class="featured-img" style="background-image: url({{url('images/')}}/{{$item->image}});"></div>
                    
                    <div class="text">
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h2>{{$item->title}}</h2>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($blog3 as $item)
                <a href="{{route('single.blog',$item->id)}}" class="h-entry img-5 h-100 gradient">

                    <div class="featured-img" style="background-image: url({{url('images/')}}/{{$item->image}});"></div>

                    <div class="text">
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h2>{{$item->title}}</h2>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($blog4 as $item)
                <a href="{{route('single.blog',$item->id)}}" class="h-entry mb-30 v-height gradient">

                    <div class="featured-img" style="background-image: url({{url('images/')}}/{{$item->image}});"></div>

                    <div class="text">
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h2>{{$item->title}}</h2>
                    </div>
                </a>
                @endforeach

                @foreach($blog5 as $item)
                <a href="{{route('single.blog',$item->id)}}" class="h-entry v-height gradient">

                    <div class="featured-img" style="background-image: url({{url('images/')}}/{{$item->image}});"></div>

                    <div class="text">
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h2>{{$item->title}}</h2>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Second Section --}}


<section class="section posts-entry">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Business</h2>
            </div>
            <div class="col-sm-6 text-sm-end"><a href="{{route('blog.list')}}" class="read-more">View All</a></div>
        </div>
        <div class="row g-3">
            <div class="col-md-9">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="blog-entry">
                            @foreach($blog3 as $item)
                            <a href="{{route('single.blog',$item->id)}}" class="img-link">
                                <img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid">
                            </a>
                            <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                            <h2><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h2>
                            <p>{{$item->description}}</p>
                            <p><a href="{{route('single.blog',$item->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-entry">
                            @foreach($blog as $item)
                            <a href="{{route('single.blog',$item->id)}}" class="img-link">
                                <img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid">
                            </a>
                            <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                            <h2><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h2>
                            <p>{{$item->description}}</p>
                            <p><a href="{{route('single.blog',$item->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled blog-entry-sm">
                    @foreach ($sideBlog as $item)
                        
                    <li>
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h3><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h3>
                        <p>{{$item->description}}</p>
                        <p><a href="{{route('single.blog',$item->id)}}" class="read-more">Continue Reading</a></p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- third section --}}

<section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
        <div class="row">
            @foreach ($sideBlog as $item)
                
            <div class="col-md-6 col-lg-3">
                <div class="blog-entry">
                    <a href="{{route('single.blog',$item->id)}}" class="img-link">
                        <img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid">
                    </a>
                    <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                    <h2><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h2>
                    <p>{{$item->description}}</p>
                    <p><a href="{{route('single.blog',$item->id)}}" class="read-more">Continue Reading</a></p>
                </div>
            </div>
            
            @endforeach
           
        </div>
    </div>
</section>


{{-- Fourth section --}}


<section class="section posts-entry">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                @foreach($category1 as $item)
                <h2 class="posts-entry-title">{{$item->name}}</h2>
                @endforeach
            </div>
            <div class="col-sm-6 text-sm-end"><a href="{{route('blog.list')}}" class="read-more">View All</a></div>
        </div>
        <div class="row g-3">
            <div class="col-md-9 order-md-2">
                <div class="row g-3">
                    @foreach ($sideBlog as $item)
                    <div class="col-md-6">
                        <div class="blog-entry">
                                
                            <a href="{{route('single.blog',$item->id)}}" class="img-link">
                                <img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid">
                            </a>
                            <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                            <h2><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h2>
                            <p>{{$item->description}}</p>
                            <p><a href="{{route('single.blog',$item->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled blog-entry-sm">
                    @foreach ($sideBlog as $item)
                        
                    <li>
                        <span class="date">{{$item->created_at->toFormattedDateString()}}</span>
                        <h3><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h3>
                        <p>{{$item->description}}</p>
                        <p><a href="{{route('single.blog',$item->id)}}" class="read-more">Continue Reading</a></p>
                    </li>
                    
                    @endforeach
                
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Fifth section --}}

<section class="section">
    <div class="container">

        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Politics</h2>
            </div>
            <div class="col-sm-6 text-sm-end"><a href="{{route('blog.list')}}" class="read-more">View All</a></div>
        </div>

        <div class="row">
            @foreach ($lastBlog as $item)
                
            <div class="col-lg-4 mb-4">
                <div class="post-entry-alt">
                    <a href="{{route('single.blog',$item->id)}}" class="img-link"><img src="{{url('images/')}}/{{$item->image}}" alt="Image" class="img-fluid"></a>
                    <div class="excerpt">
                        

                        <h2><a href="{{route('single.blog',$item->id)}}">{{$item->title}}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1">By <a href="#">{{$item->author}}</a></span>
                            <span>&nbsp;-&nbsp; {{$item->created_at->toFormattedDateString()}}</span>
                        </div>
                        
                        <p>{{$item->description}}</p>
                        <p><a href="{{route('single.blog',$item->id)}}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        
    </div>
</section>
@endsection