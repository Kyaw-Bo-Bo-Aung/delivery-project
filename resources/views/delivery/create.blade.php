@extends('customer_master')
@section('content')

<!-- login -->
<div class="registerationholder">
	<img src="{{asset('customer_assets/img/deli2.jpg')}}" class="img-fluid">
	<div class="text-center registeration">
		<h1 class="HH display-4">Registeration</h1>
	</div>
</div>
	<div class="Limiter100">
		<div class="Container-register100">
			<div class="Wrap-register100">
				<div class="container">
					<form method="POST" action="{{route('delivery.store')}}">
						@csrf
						<h3 class="text-center pb-5">Register Form</h3>
						<div class="row">
							<div class="col-12">
								<input type="text" class="form-control form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="user name" placeholder="User name">

								 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-12 mt-3">
								<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="Email" placeholder="Email">
								 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							{{-- <div class="col-12 mt-3">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">D.O.B  &nbsp;</span>
									</div>
										<input type="date" name="date" placeholder="Date of Birth" class="form-control">
								</div>
							</div> --}}

							{{-- <div class="col-12 mt-3">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
									</div>
									<select name="gender" required class="form-control">
										<option value>Gender</option>
								  		<option value="Male">Male</option>	
								  		<option value="Female">Female</option>
								  		<option value="Other">Other</option>
								  	</select>
								</div>
							</div> --}}
							
							<div class="col-12 mt-3">
								<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Password">
								 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-12 mt-3">
								<input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password" placeholder="Confirm Password" required>
							</div>

							<div class="col-12 mt-3">
								<input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="phone" id="Phone" placeholder="Phone">
								 @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-12 mt-3">
								<textarea name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" required placeholder="Enter your address" rows="5"></textarea>
							</div>



							<div class="col-12 mt-3">
								<div class="form-group">
	                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
	                                <label for="agree-term" class="label-agree-term"><span class="Term">I agree all statements in  <a href="#" class="term-service">Terms of service</a></span></label>
	                            </div>
							</div>


							<div class="col-12">
								<div class="form-group">
	                                <label for="login" class="label-agree-term"><span class="Term">If you already have account. Please <a href="{{route('delivery.index')}}" class="term-service">Log in.</a></span></label>
	                            </div>
							</div>
							
					
								<div class=" col-12 container-register100-form-btn">
									<div class="Wrap-register100-form-btn">
										<div class="register100-form-bgbtn"></div>
											 <input type="submit" name="submit" value="Submit" class="btn register100-form-btn">
									</div>
								</div>	
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
		
	</div>
<!-- End login -->

@endsection


