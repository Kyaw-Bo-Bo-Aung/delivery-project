@extends('customer_master')
@section('content')

<!-- login -->
	<div class="Limiter100">
		<div class="Container-register100">
			<div class="Wrap-register100">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<input type="text" class="form-control" id="user name" placeholder="User name">
						</div>

						<div class="col-12 mt-3">
							<input type="email" class="form-control" id="Email" placeholder="Email">
						</div>

						<div class="col-12 mt-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">D.O.B  &nbsp;</span>
								</div>
									<input type="date" name="date" placeholder="Date of Birth" class="form-control">
							</div>
						</div>

						<div class="col-12 mt-3">
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
						</div>
						
						<div class="col-12 mt-3">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<div class="col-12 mt-3">
							<input type="password" class="form-control" id="password" placeholder="Confirm Password" required>
						</div>
						<div class="col-12 mt-3">
							<div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
                                <label for="agree-term" class="label-agree-term"><span class="Term">I agree all statements in  <a href="#" class="term-service">Terms of service</a></span></label>
                            </div>
						</div>
						
				
							<div class=" col-12 container-register100-form-btn">
								<div class="Wrap-register100-form-btn">
									<div class="register100-form-bgbtn"></div>
										 <input type="submit" name="submit" value="Submit" class="btn register100-form-btn">
								</div>
							</div>
							
					


					</div>
					
				</div>
				
				
			</div>
		</div>
		
	</div>
<!-- End login -->

@endsection