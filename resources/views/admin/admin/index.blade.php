
@extends('layouts.master')
@section('content')
    <h1>Admin Users </h1>

    <div class="card border-0 shadow mb-4">
       
        <div class="card-body">
        

            <div class="table-responsive mt-4">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">S.N</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">UserName</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Address</th>
                            <th class="border-0">Contact</th>
                            <th class="border-0">Profile Picture</th>
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
                        @foreach ($admin as $data)
                            
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{$loop->iteration}}</a> </td>
                            <td class="fw-bold">{{$data->name}} </td>
                            <td>{{$data->userName}} </td>
                            <td>{{$data->email}} </td>
                            <td>{{$data->address}} </td>
                            <td>{{$data->contact}} </td>
                            <td><img src="{{url('images/')}}/{{$data->picture}}" alt="" width="100"></td>
                            <td>{{$data->created_at->toFormattedDateString()}} </td>
                            <td style="display: flex">
                                <a href="{{route('admin.show',$data->id)}}" class="btn btn-primary" title="Show"><i class="fa-solid fa-eye"></i></a>
                                <form action="{{route('admin.destroy',$data->id)}}" method="POST">
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

