@extends('layouts.master')
@section('content')
    
<h2>Edit Admin</h2>
<br>

<div class="card border-0 shadow mb-4">
        
    <div class="card-body">
        <form action="{{route('admin.update',$admin->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.admin.form')
          </form>
    </div>
</div>

@endsection