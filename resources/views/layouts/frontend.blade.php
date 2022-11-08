
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{asset('frontendAssets/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontendAssets/fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="{{asset('frontendAssets/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('frontendAssets/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('frontendAssets/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontendAssets/css/style.css')}}">

	<link rel="stylesheet" href="{{asset('frontendAssets/css/flatpickr.min.css')}}">


	<title>Blog Website</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{route('welcome')}}">Home</a></li>
								<li><a href="{{route('about')}}">About Us</a></li>
								<li><a href="{{route('blog.list')}}">Blogs</a></li>
								<li><a href="{{route('contact')}}">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">


						@guest
						<a href="{{route('login')}}" style="color: wheat">Login</a>
						@endguest		
						
						@Auth
						<a href="{{route('login')}}" style="color: wheat">Profile</a>
						@endAuth

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>


    @yield('content')


	<footer class="site-footer">
		<div class="container">
		

			<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed By: <b>Arika Karki</b> 
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>
 


    <script src="{{asset('frontendAssets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontendAssets/js/tiny-slider.js')}}"></script>

    <script src="{{asset('frontendAssets/js/flatpickr.min.js')}}"></script>


    <script src="{{asset('frontendAssets/js/aos.js')}}"></script>
    <script src="{{asset('frontendAssets/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontendAssets/js/navbar.js')}}"></script>
    <script src="{{asset('frontendAssets/js/counter.js')}}"></script>
    <script src="{{asset('frontendAssets/js/custom.js')}}"></script>

    
  </body>
  </html>
