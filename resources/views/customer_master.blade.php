<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" src="{{asset('customer_assets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('customer_assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/bootstrap/css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/fontawesome/css/all.min.css')}}">
</head>
<body>
<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light N">
		<img src="bootstrap/images/logo.png" class="img-fluid logo_image ml-4">
		<button class="navbar-toggler" data-target="#Nav" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="Nav">
			<ul class="navbar-nav ml-auto mr-5">
				<li class="nav-item mx-2"><a href="{{ route('mainpage') }}" class="nav-link">Home</a></li>
				<li class="nav-item mx-2"><a href="{{ route('aboutpage') }}" class="nav-link">About Us</a></li>
				<li class="nav-item mx-2"><a href="{{ route('orderinformationpage') }}" class="nav-link">Order information</a></li>
				<li class="nav-item mx-2"><a href="{{ route('customerloginpage') }}" class="nav-link">Login | Sign-up</a></li>
			</ul>
		</div>
	</nav>
<!-- End Navigation -->

@yield('content')

<!-- footer -->
	<div class="container-fluid bg-primary pt-4">
		<div class="row">
			<div class="col-md-6">
				<p class="text-center text-md-left ml-5">CopyRight@jhujkejikejwij</p>
			</div>
			<div class="col-md-6">
				<p class="text-center text-md-right mr-5"><i class="fab fa-facebook-square fa-2x mx-2"></i><i class="fab fa-twitter-square fa-2x mx-2"></i><i class="fab fa-instagram-square fa-2x mx-2"></i></p>
			</div>
		</div>
	</div>

</body>
