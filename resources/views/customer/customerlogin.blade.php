@extends('customer_master')
@section('content')
	
	<!-- login -->
	<div class="Limiter">
		<div class="Container-login100">
			<div class="Wrap-login100">
				<form class="Login100-form validate-form" action="#" method="#">
					<span class="Login100-form-title p-b-26">
						<i class="fas fa-user-circle fa-7x"></i>
					</span>
					<span class="Login100-form-title p-b-48">
						Welcome
					</span>
					<div class="wrap-input100 validate-input mt-5" data-validate="Valid email is: @gmail.com">
						<input type="text" name="email" class="input100 mt-5">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<span class="btn-show-pass"><i class="zmdi zmdi-eye-off"></i></span>
						<input type="password" name="pass" class="input100 mt-5">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<!-- <button class="">login</button> -->
							<a href="#" class="btn login100-form-btn">Login</a>
						</div>
					</div>

					<div class="text-center p-t-90">
						<span class="txt1">Don't you have an account?</span>
						<a class="txt2" href="{{route('customerregisterpage')}}"> Sign Up
						</a>
					</div>
					
				</form>
				
			</div>
		</div>
		
	</div>
<!-- End login -->

@endsection