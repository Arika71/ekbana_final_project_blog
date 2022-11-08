@extends('layouts.master')
@section('content')
    
<h2>Create Blog</h2>
<br>

<div class="card border-0 shadow mb-4">
        
    <div class="card-body">
        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.blog.form')
          </form>
    </div>
</div>

@endsection