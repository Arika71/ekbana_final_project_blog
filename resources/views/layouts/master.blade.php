<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Blogging App | Admin Dashboard</title>
    <!-- Favicon icon -->
    <script src="https://kit.fontawesome.com/80f94435b1.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
   
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('assets/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                          
                        </div>

                        <ul class="navbar-nav header-right">
                          
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('profile.index')}}" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    


                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        <i class="icon-key"></i>
                                         {{ __('Logout') }}
                                     </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">

                    <li><a class="" href="{{route('Dashboard.index')}}"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Authenticated Users</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.index')}}">Administrator</a></li>
                            <li><a href="{{route('admin.create')}}">Add new Admin</a></li>
                            <li><a href="{{route('user.index')}}">Users</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Blog Posts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('blog.index')}}">View All posts</a></li>
                            <li><a href="{{route('blog.create')}}">Create Posts</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Categories</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('category.index')}}">View Categories</a></li>
                            <li><a href="{{route('category.create')}}">Create New category</a></li>
                        </ul>
                    </li>
                
               
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
        
              @yield('content')
         
            </div>
        </div>
        
        <!--**********************************
            Content body end
            ***********************************-->
            

        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <b style="color: crimson">Arika Karki</b></p>
                    <p>2022 Final Project</p> 
                </div>
            </div>
            <!--**********************************
                Footer end
                ***********************************-->
                
                <!--**********************************
                    Support ticket button start
                    ***********************************-->
                    
                    <!--**********************************
           Support ticket button end
           ***********************************-->
           
           
        </div>
        <!--**********************************
            Main wrapper end
            ***********************************-->
            
            <!--**********************************
                Scripts
                ***********************************-->
                <!-- Required vendors -->
                <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
                <script src="{{asset('assets/js/quixnav-init.js')}}"></script>
                <script src="{{asset('assets/js/custom.min.js')}}"></script>
                

    <!-- Vectormap -->
    <script src="{{asset('assets/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>