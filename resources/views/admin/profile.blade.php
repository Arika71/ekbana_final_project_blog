@extends('layouts.master')
@section('content')
    

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">{{auth::user()->name}}</p>
                </div>
            </div>
          
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                            <div class="profile-photo">
                                <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-name">
                                                <h4 class="text-primary">{{auth::user()->userName}}</h4>
                                                <p>User Name</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-email">
                                                <h4 class="text-muted">{{auth::user()->email}}</h4>
                                                <p>Email</p>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-sm-4 prf-col">
                                            <div class="profile-call">
                                                <h4 class="text-muted">{{auth::user()->contact}}</h4>
                                                <p>Phone No.</p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <a href="{{route('admin.edit',$id = auth::user()->id)}}" class="btn btn-primary"> Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  


@endsection