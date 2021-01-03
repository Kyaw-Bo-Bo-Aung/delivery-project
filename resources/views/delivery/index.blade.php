@extends('delivery/frontendmaster')
@section('content')


	<div class="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://munafamart.co.in/wp-content/uploads/2018/09/home-delivery-banner.jpg">
			</div>
		</div>
	</div>

	<div class="container">
		<h1 class="text-center my-5">Become a rider</h1>
		<hr class="w-25 m-auto">
		<p class="text-center w-75 mx-auto my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div class="container">
		<h1 class="text-center my-5">Get more incomes</h1>
			<hr class="w-25 m-auto">
			
		<div class="row">
			<div class="col-6 my-5">
				<img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-34554,resizemode-1,msid-63758248/small-biz/sme-sector/how-smbs-can-minimize-cod-failures-and-returns/thinkstockphotos-487117594.jpg">
			</div>
			<div class="col-6">
				<p class="text-center w-75 mx-auto my-5">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>		
	</div>


	<div class="container">
		<h1 class="text-center my-5">What you need</h1>
		<div class="row row-cols-md-4 row-cols-md-2">
			<div class="col">
				<img src="https://cdn0.iconfinder.com/data/icons/just-ride-your-bike/144/Kuizin_ROAD_01-512.png" class="img-fluid">
				<h4 class="text-center">Bike</h4>
			</div>
			<div class="col">
				<img src="https://cdn0.iconfinder.com/data/icons/just-ride-your-bike/144/Kuizin_ROAD_01-512.png" class="img-fluid">
				<h4 class="text-center">Bike</h4>
			</div>
			<div class="col">
				<img src="https://cdn0.iconfinder.com/data/icons/just-ride-your-bike/144/Kuizin_ROAD_01-512.png" class="img-fluid">
				<h4 class="text-center">Bike</h4>
			</div>
			<div class="col">
				<img src="https://cdn0.iconfinder.com/data/icons/just-ride-your-bike/144/Kuizin_ROAD_01-512.png" class="img-fluid">
				<h4 class="text-center">Bike</h4>
			</div>
		</div>
	</div>

	<div class="text-center my-5">
		<button class="btn btn-primary rounded-pill px-5 py-1"><h3>Apply Now</h3></button>
	</div>
	
	


	{{-- login form --}}
	<form>
		<h1>Log in</h1>
		<label for="name">Name</label>
		<input type="name" name="name" id="name"> <br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password"> <br>
	</form>


@endsection