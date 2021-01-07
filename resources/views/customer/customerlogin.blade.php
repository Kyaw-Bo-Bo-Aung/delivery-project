@extends('customer_master')
@section('content')

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12">
				<h1 class="HH">Deliver your products</h1>
				<p>You can deliver your products to your customers without worring your products.</p>
				<b>Just need simple steps.</b>
				<ul>
					<li>Log in to your account</li>
					<li>Fill the requested form</li>
					<li>Wait few seconds to get delivey service</li>
					<li>Wait delivery-man to pick-up your products</li>
				</ul>
				<b>You can get the following advantages.</b>
				<ul>
					<li>Can schedule the form anytime.</li>
					<li>Just one click to get delivery service</li>
					<li>Can track your products</li>
					<li>Our delivery service with 100% gurentee will give you pleasure.</li>

				</ul>
			</div>
			<div class="col-md-6 col-12">
				<img src="{{asset('customer_assets/img/client1.jpg')}}" class="img-fluid">
			</div>
		</div>
	</div>
</div>
	
	
	<!-- login -->
	<div class="Limiter">
		<div class="Container-login100">
			<div class="Wrap-login100">
				<form method="POST" action="{{ route('login') }}">
                     @csrf
					<span class="Login100-form-title p-b-48">
						Log in
					</span>
					<div class="wrap-input100 validate-input mt-5" data-validate="Valid email is: @gmail.com">
						<input type="text" name="email" class="input100 mt-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						<span class="focus-input100" data-placeholder="Email"></span>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<span class="btn-show-pass"><i class="zmdi zmdi-eye-off"></i></span>
						<input type="password" class="input100 mt-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="Password"></span>
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn text-center">
							<div class="login100-form-bgbtn"></div>
							<!-- <button class="">login</button> -->
							{{-- <a href="#" class="btn login100-form-btn">Login</a> --}}
							<input type="submit" name="btn" value="LOGIN" class="text-white btn login100-form-btn">
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