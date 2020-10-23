<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<link rel="icon" href="{{asset('mytemplateassets/image/favicon.ico')}}" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateassets/bootstrap/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('mytemplateassets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('mytemplateassets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateassets/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateassets/fontawesome/css/all.min.css')}}">
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light py-3 fixed-top menu">
		<div class="container">
			<a href="" class="navbar-brand">Book Library</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{route('bookspage')}}" class="nav-link">Books</a></li>
					<li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
					<li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="" class="nav-link" id="count">
						<span class="p1 fa-stack has-badge" id="item_count" data-count="0">
							<i class="p3 fa fa-book fa-stack-1x xfa-inverse"></i>
						</span>
					</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Carousel -->
	<div class="container container-carousel bg-light">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner container-carousel">
				<div class="carousel-item active">
					<img src="{{asset('mytemplateassets/image/cover1.png')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption d-none d-md-block">
						<h5>Book Library</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('mytemplateassets/image/cover2.png')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption d-none d-md-block">
						<h5>Books For Borrow</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('mytemplateassets/image/cover3.png')}}" class="d-block w-100" alt="...">
					<div class="img-overlay"></div>
					<div class="carousel-caption d-none d-md-block">
						<h5>Book For Free</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('header')

	<!-- Footer -->
	<footer class="bg-light pt-4 mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<p>All Right Reserved &copy; Design By YAR GYI</p>
				</div>
				<div class="col-md-6 text-right">
					<i class="fab fa-facebook-square fa-2x"></i>
					<i class="fab fa-twitter-square fa-2x"></i>
					<i class="fab fa-instagram-square fa-2x"></i>
				</div>
			</div>
		</div>
	</footer>

	@yield('script')
	
</body>
</html>