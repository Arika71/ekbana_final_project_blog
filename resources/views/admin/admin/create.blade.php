@extends('layouts.master')
@section('content')
    
<h2>Create Admin</h2>
<br>

<div class="card border-0 shadow mb-4">
        
    <div class="card-body">
        <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.admin.form')
          </form>
    </div>
</div>

@endsection