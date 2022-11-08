@extends('layouts.master')
@section('content')
    <h1>Category Page </h1>

    <div class="card border-0 shadow mb-4">
       
        <div class="card-body">
       
            <div class="table-responsive mt-4">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">S.N</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Type</th>
                            <th class="border-0">Created Date</th>
                            <th class="border-0 rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($message = session('message'))
                        <div class="alert alert-info">
                          {{$message}}
                        </div>
                    @endif
                        <!-- Item -->
                        @foreach ($category as $item => $data)
                            
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{$loop ->iteration}}</a> </td>
                            <td class="fw-bold">{{$data->name}} </td>
                            <td>{{$data->type}} </td>
                            <td>{{$data->created_at->toFormattedDateString()}} </td>
                            <td style="display: flex">
                                <a href="{{route('category.show',$data->id)}}" class="btn btn-primary" title="Show"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('category.edit',$data->id)}}" class="btn btn-secondary" title="Edit"><i class="fa fa-edit"></i></a>    
                                <form action="{{route('category.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" title="Edit" onclick="confirm('Are you sure ?')"><i class="fa-solid fa-trash"></i></button>    
                                </form>
                            </td>
    
                        </tr>
                        @endforeach
                        <!-- End of Item -->

                     

                    

                     

                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection