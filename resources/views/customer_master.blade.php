<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="{{asset('customer_assets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('customer_assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('kbba/js/myscript.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/bootstrap/css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/fontawesome/css/all.min.css')}}">
</head>
<body>
<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light N">
		{{-- <img src="{{asset('customer_assets/img/l2.jpg')}}" class="img-fluid logo_image ml-4"> --}}
		<button class="navbar-toggler" data-target="#Nav" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="Nav">
			<ul class="navbar-nav ml-auto mr-5">
				@auth
				<li class="nav-item mx-2"><a href="{{ route('mainpage') }}" class="nav-link text-white">Home</a></li>
				@else
				<li class="nav-item mx-2"><a href="/" class="nav-link text-white">Home</a></li>
				@endauth
				<li class="nav-item mx-2"><a href="{{ route('aboutpage') }}" class="nav-link text-white">About Us</a></li>
				@auth
				<li class="nav-item mx-2"><a href="{{ route('orderinformationpage') }}" class="nav-link text-white">Order information</a></li>
				@else
				<li class="nav-item mx-2"><a href="{{ route('roles') }}" class="nav-link text-white">Roles</a></li>
				@endauth

				{{-- <li class="nav-item mx-2"><a href="{{ route('customerloginpage') }}" class="nav-link text-white">Login | Sign-up</a></li> --}}
				{{-- @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('customerloginpage') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <div class="dropdown show">
                	<a class="btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
                    	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						    <a class="dropdown-item" href="{{ route('customerregisterpage') }}">{{ __('Client') }}</a>
						    <a class="dropdown-item" href="{{ route('delivery.create') }}">{{ __('Delivery-man') }}</a>
						</div>  
                     </div>
                    @endif --}}
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
			</ul>
		</div>
	</nav>
<!-- End Navigation -->

@yield('content')

<!-- footer -->
	<div class="container-fluid pt-4 FOOTER">
		<div class="row">
			<div class="col-md-6">
				<p class="text-center text-md-left ml-5">CopyRight&copy;delieveryservice2021</p>
			</div>
			<div class="col-md-6">
				<p class="text-center text-md-right mr-5"><i class="fab fa-facebook-square fa-2x mx-2"></i><i class="fab fa-twitter-square fa-2x mx-2"></i><i class="fab fa-instagram-square fa-2x mx-2"></i></p>
			</div>
		</div>
	</div>

</body>
