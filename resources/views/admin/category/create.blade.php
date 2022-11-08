@extends('layouts.master')
@section('content')
    
<h2>Create Category</h2>
<br>

<div class="card border-0 shadow mb-4">
        
    <div class="card-body">
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            @include('admin.category.form')
          </form>
    </div>
</div>

@endsection