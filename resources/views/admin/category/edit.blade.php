@extends('layouts.master')
@section('content')
    
<h2>Edit Category</h2>
<br>

<div class="card border-0 shadow mb-4">
        
    <div class="card-body">
        <form action="{{route('category.update',$category->id)}}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.category.form')
          </form>
    </div>
</div>

@endsection