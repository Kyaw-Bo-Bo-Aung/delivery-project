@extends('customer_master')
@section('content')
<!-- carosal & form -->
	<div class="container mb-3" id="Form">
		<div class="row">
			<!-- Carosal -->
		  		<div class="col-lg-6 carousel_img">
		  			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active ">
					      <img src="{{asset('customer_assets/img/d4.jpg')}}" class="d-block mt-4" alt="..." height="500px" width="650px">
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('customer_assets/img/2.jpg')}}" class="d-block w-100" alt="..." height="600px" width="300px">
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('customer_assets/img/1.jpg')}}" class="d-block w-100" alt="..." height="600px" width="300px">
					    </div>
					  </div>
					</div>
		  		</div><!-- end carosal	 -->

		  	<!-- booking form -->
				<div class="col-lg-6 S">
					<section >
						<form action="{{route('createorder')}}" method="post" class="border border-1">
						@csrf
					   <!-- select product type -->
						 <div class="container">
							 <div class="row">
							 	<div class="col-12">
							 		<div class="input-group mt-3">
								  		<div class="input-group-prepend">
								    		<span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user mr-2"></i>Receiver's Name &nbsp; </span>
								  		</div>
								  		<input type="text" minlength="3" maxlength="60" class="form-control @error('receiverName') is-invalid @enderror" name="receiverName" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter full name" value="{{ old('receiverName') }}">
								  		@error('receiverName')
										    <div class="alert alert-danger w-100">{{ $message }}</div>
										@enderror
										</div>
										<div class="input-group mt-3">
								  		<div class="input-group-prepend">
								    		<span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-phone mr-2 "></i>Receiver's phone &nbsp; </span>
								  		</div>
								  		<input type="number" minlength="3" maxlength="60" class="form-control @error('receiverPhone') is-invalid @enderror" name="receiverPhone" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter phone number" value="{{ old('receiverPhone') }}">
								  		@error('receiverPhone')
										    <div class="alert alert-danger w-100">{{ $message }}</div>
										@enderror
										</div>
							 	</div>

								 <div class="col-12">
									 <div class="form-group mt-3">
									 	<label>Product Type</label>
										<select  name="product_select" required  class="form-control" >
											@foreach($producttypes as $producttype)
											<option value={{$producttype->id}}>{{$producttype->name}} &nbsp; &nbsp; &nbsp; &nbsp; </option>
											@endforeach
										</select>				
									  </div>
								  </div>
							  </div>				
						 </div><!-- end select product type -->

						<!-- select package & quantity-->
							<div class="container">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Packaging Type</label>
											<select name="package_select" class="form-control">
												@foreach($packagingtypes as $packagingtype)
													<option value={{$packagingtype->id}}>{{$packagingtype->name}} &nbsp; &nbsp;</option>
												@endforeach			
												</select>				
											</div>
									</div>
									<!-- end select package -->
									<!-- select quantity  -->
										<div class="col-6">
											<div class="form-group">
											<label>Quantity</label>

											<div class="input-group">
										  		<input type="number" minlength="3" maxlength="60" class="form-control @error('qty') is-invalid @enderror" name="qty" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="" value="{{ old('qty') }}">
										  		<div class="input-group-prepend">
									  			
										    		<span class="input-group-text" id="inputGroup-sizing-default">pieces</span>
										    	
										  		</div>
										  		@error('qty')
									    			<div class="alert alert-danger w-100">{{ $message }}</div>
												@enderror
											</div>
											{{-- <select name="quantity-select" class="form-control">
													<option value="1 parcel">1 pc</option>
													<option value="2 parcel">2 pcs</option>
													<option value="3 parcel">3 pcs</option>
													<option value="4 parcel">4 pcs</option>
													<option value="5 parcel">5 pcs</option>
													<option value="6 parcel">6 pcs</option>
													<option value="7 parcel">7 pcs</option>
													<option value="8 parcel">8 pcs</option>
													<option value="9 parcel">9 pcs</option>
													<option value="10 parcel">10 pcsl</option>
													<option value="Bulk parcel">Bulk Parcel </option>
											</select>				 --}}
										</div>
									</div>					
								</div>				
							</div>
								<!-- end select quantity -->			
							
						<!-- select pick up & dorp off -->
							<div class="container">
								<div class="row">
									<div class="col-12">
									<!-- select pick up -->
										<div class="input-group mb-3">
								  			<div class="input-group-prepend">
								    			<span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-map-marker-alt mr-2"></i>Pick-up &nbsp; </span>
								  			</div>
								  				<input type="text" minlength="3" maxlength="60" class="form-control @error("pickUpLocation") is-invalid @enderror" name="pickUpLocation" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter pick-up address" value="{{ old('pickUpLocation') }}">
								  				@error('pickUpLocation')
									    			<div class="alert alert-danger w-100">{{ $message }}</div>
												@enderror
										</div><!-- end select pick up -->
									</div>

									<div class="col-12">
										<!-- select drop off  -->
											<div class="input-group mb-3">
								  				<div class="input-group-prepend">
								    				<span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-map-marker-alt mr-2"></i>Drop-off </span>
								  				</div>
								  				<input type="text" minlength="3" maxlength="60" class="form-control @error("dropOffLocation") is-invalid @enderror" name="dropOffLocation" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter drop-off address" value="{{ old('dropOffLocation') }}">
								  				@error('dropOffLocation')
									    			<div class="alert alert-danger w-100">{{ $message }}</div>
												@enderror
											</div>
										<!-- end select drop off -->
										</div>
									</div>
								</div>
											
							<!-- select pick-up date -->
								<div class="container">
									<div class="row">
										<div class="col-12">
											<div class="input-group mb-3">
								  				<div class="input-group-prepend">
								    				<span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-calendar-alt mr-2"></i> Date  &nbsp; &nbsp;&nbsp;</span>
								  				</div>
						  							<input type="date" minlength="3" maxlength="60" class="form-control @error("pickupDate") is-invalid @enderror" name="pickupDate" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Pick-up date" value="{{ old('pickupDate') }}">
						  							@error('pickupDate')
										    			<div class="alert alert-danger w-100">{{ $message }}</div>
													@enderror
											</div>
										</div>	
										<!-- pick-up time -->
										<div class="col-12">
											<div class="input-group mb-3">
								  				<div class="input-group-prepend">
								    				<span class="input-group-text" id="inputGroup-sizing-default"><i class="far fa-clock"></i>  &nbsp; Pick-up Time  &nbsp;</span>
								  				</div>
						  							<input type="time" min="07:00:00" max="18:00:00" class="form-control @error("pickupTime") is-invalid @enderror" placeholder="pickupTime" name="pickupTime" value="{{ old('pickupTime') }}" />
						  							@error('pickupTime')
										    			<div class="alert alert-danger w-100">{{ $message }}</div>
													@enderror
											</div>
											<div class="form-group mb-3">
												
							  					{{-- <select name="pick-up-time" required class="form-control">
							  						<option value>Pick-up time</option>
							  						<option value="08:00 AM">08:00 AM</option>
							  						<option value="08:30 AM">08:30 AM</option>
							  						<option value="09:00 AM">09:00 AM</option>
							  						<option value="09:30 AM">09:30 AM</option>
							  						<option value="10:00 AM">10:00 AM</option>
							  						<option value="10:30 AM">10:30 AM</option>
							  						<option value="11:30 AM">11:30 AM</option>
							  						<option value="12:00 AM">12:00 AM</option>
							  						<option value="12:30 AM">12:30 AM</option>
							  						<option value="01:00 PM">01:00 PM</option>
							  						<option value="01:30 PM">01:30 PM</option>
							  						<option value="02:00 PM">02:00 PM</option>
							  						<option value="02:30 PM">02:30 PM</option>
							  						<option value="03:00 PM">03:00 PM</option>
							  						<option value="04:00 PM">04:00 PM</option>
							  						<option value="04:30 PM">04:30 PM</option>
							  						<option value="05:00 PM">05:00 PM</option>
							  						<option value="05:30 PM">05:30 PM</option>
							  						<option value="06:00 PM">06:00 PM</option>
							  						<option value="06:30 PM">06:30 PM</option>
							  						<option value="07:00 PM">07:00 PM</option>
							  						<option value="07:30 PM">07:30 PM</option>
							  						<option value="08:00 PM">08:00 PM</option>
							  						<option value="08:30 PM">08:30 PM</option>
							  						<option value="09:00 PM">09:00 PM</option>
							  					</select> --}}
							  				</div>
										</div>	
									</div>			
								</div>	
								<!-- end pick-up date -->

					       	<!-- select weight & product  -->
					        	<div class="container">
					        		<div class="row">
					        			<!-- select weight -->
					        				<div class="col-6">
						        				<div class="form-group mb-3">
						        					<label>Select weight</label>
						        					<select name="select_weight" class="form-control weight-change">
						        						<option value="" disabled selected hidden>Choose weight</option>
						        						@foreach($weights as $weight)
						        						<option value={{$weight->id}} >{{$weight->weight}}</option>
						        						@endforeach
						        					</select>
						        				</div>
					        				</div>
					        			<!-- end select weight -->

					        			<!-- select product value -->
						        			<div class="col-6">
						        				<label>Delivery fees</label>
						        				<div class="form-group price-change border" >
						        					
						        				</div>
						        			</div>
					        		</div>
					        		<div>
					        			<div class="form-group mb-3">
				        					<input type="text" min="0" max="50000" step="any" name="note" class="form-control" placeholder="Note to your delivery-man" value="{{ old('note') }}">
				        				</div>
					        		</div>
					        	</div>
					        	<!-- end select product value -->
						
								<!-- save-button -->
								<div class="container">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
						                  		<input type="submit" name="btn-submit" value="Schedule Pick-Up" class="btn btn-outline-primary">
						            		</div>
										</div>
									</div>
								</div>
				        	<!-- end-save-button -->
					</form>	
					</section>
									
			</div><!-- end form -->
	 	</div>
 	</div>
<!-- end Carosal & form -->

<hr class="hrr mt-5">

<!-- Service Box -->
	<div>
		<h3 class="HH" align="center">Transport & Courier Service</h3>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-box" data-wow-offset="100" style="visibility: visible;">
						<h5 class="service-title"><i class="fas fa-shipping-fast fa-lg mr-5 ICON"></i><span>Express Courier Services</span></h5>
						<span class="EXPRESS">High Priority Domestic/ International - Free Pickup</span>
						<div class="clearfix"></div>
						<p class="service-content">Express Services for delivering documents and small parcels with an domestic/international logistic network. High Priority is urgent delivery service within 24 or 48 hours (depending on the destination) for urgent documents and packages.</p>						
					</div>		
				</div>
				<div class="col-lg-6">
					<div class="service-box" data-wow-offset="100" style="visibility: visible;">
						<h5 class="service-title"><i class="fas fa-truck-loading fa-lg mr-5 ICON"></i></i>Trucking & Air Cargo</h5>
						<span class="EXPRESS">Heavy Weight Shipping - Free Pickup</span>
						<div class="clearfix"></div>
						<p class="service-content">Full Truck Load (FTL) or Part Truck Load service with free load-unload, Under this service the shipper can schedule a pickup for any heavy weight shipment that includes a single package for part truck load or minimum 700 kg for full truck load.</p>						
					</div>		
				</div>
			</div>

			<div class="row">

				<div class="col-lg-6">
					<div class="service-box" data-wow-offset="100" style="visibility: visible;">
						<h5 class="service-title"><i class="fas fa-archive fa-lg mr-5 ICON"></i>Fulfillment Centers</h5>
						<span class="EXPRESS">Warehouse & Storage Solutions - Free Pickup</span>
						<div class="clearfix"></div>
						<p class="service-content">Buy or Sell online in India using our shipping address, We store your products in our fulfillment centers as your virtual warehouse, and we pick, pack, deliver to you & your customer, We also provide customer support service and manage returns.</p>						
					</div>		
				</div>

				<div class="col-lg-6">
					<div class="service-box" data-wow-offset="100" style="visibility: visible;">
						<h5 class="service-title"><i class="fas fa-people-carry fa-lg mr-5 ICON"></i>Packers and Movers Services</h5>
						<span class="EXPRESS">Home, Office, Car, Bike - Within India</span>
						<div class="clearfix"></div>
						<p class="service-content">We provide the complete solutions of shifting home, office, car, bike etc. We will pack, unpacking & label your items and help you settle into new location, We handle your goods with maximum care, so you can move with peace of mind</p>						
					</div>		
				</div>
				
			</div>


		</div>
		
	</div>
<!-- End Service Box -->

<hr class="hrr mt-5">

<!-- Service Charge -->
	<div class="Service100">
		<h3 class="HH" align="center">Service Charge</h3>
			<div class="container" align="center">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card border-secondary mb-3" style="max-width: 18rem;">
						  <div class="card-header bg-warning Sub">Urgent Delievery</div>
						  <div>
						     <ul class="list-group list-group-flush">
							    <li class="list-group-item"><span class="PRICE-ONE">Zone:</span> <span class="PRICE-TWO">International</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Weight:</span> <span class="PRICE-THREE">25 + Kg Required</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Modes:</span> <span class="PRICE-FOUR">Air & Surface</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Parcel:</span> <span class="PRICE-FIVE">Small & Large Parcels</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">COD:</span> <span class="PRICE-SIX">Not Available</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">FOD:</span> <span class="PRICE-SEVEN">Not Availabe</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Pick-up:</span> <span class="PRICE">Free Pick-up</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Required Bill:</span> <span class="PRICE">Commercial</span></li>
							  </ul>
						  </div>
						  <a href="#Form" class="btn btn-warning w-100 Su"><i class="fas fa-calendar-alt fa-lg mr-3"></i>Book Now</a>
						</div>						
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card border-secondary mb-3" style="max-width: 18rem;">
						  <div class="card-header bg-warning Sub">Student Express Delivery</div>
						  <div>
						     <ul class="list-group list-group-flush">
							    <li class="list-group-item"><span class="PRICE-ONE">Zone:</span> <span class="PRICE-TWO">International</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Weight:</span> <span class="PRICE-THREE">25 + Kg Required</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Modes:</span> <span class="PRICE-FOUR">Air & Surface</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Parcel:</span> <span class="PRICE-FIVE">Documents Only</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">COD:</span> <span class="PRICE-SIX">Not Available</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">FOD:</span> <span class="PRICE-SEVEN">Not Availabe</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Pick-up:</span> <span class="PRICE">Free Pick-up</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Required Bill:</span> <span class="PRICE">No</span></li>
							  </ul>
						  </div>
						  <a href="#Form" class="btn btn-warning w-100 Su"><i class="fas fa-calendar-alt fa-lg mr-3"></i>Book Now</a>
						</div>	
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card border-secondary mb-3" style="max-width: 18rem;">
						  <div class="card-header bg-warning Sub">Part Truck Load</div>
						  <div>
						     <ul class="list-group list-group-flush">
							    <li class="list-group-item"><span class="PRICE-ONE">Zone:</span> <span class="PRICE-TWO">Domestic Only</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Weight:</span> <span class="PRICE-THREE">100 + Kg Required</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Modes:</span> <span class="PRICE-FOUR">Surface Cargo</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Parcel:</span> <span class="PRICE-FIVE">Large Parcels</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">COD:</span> <span class="PRICE-SIX">Not Available</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">FOD:</span> <span class="PRICE-SEVEN">Yes</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Pick-up:</span> <span class="PRICE">Free Pick-up</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Required Bill:</span> <span class="PRICE">Yes</span></li>
							  </ul>
						  </div>
						  <a href="#Form" class="btn btn-warning w-100 Su"><i class="fas fa-calendar-alt fa-lg mr-3"></i>Book Now</a>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card border-secondary mb-3" style="max-width: 18rem;">
						  <div class="card-header bg-warning Sub">Full Truck Load</div>
						  <div>
						     <ul class="list-group list-group-flush">
							    <li class="list-group-item"><span class="PRICE-ONE">Zone:</span> <span class="PRICE-TWO">Domestic Only</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Weight:</span> <span class="PRICE-THREE">500 + Kg Required</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Modes:</span> <span class="PRICE-FOUR">Air & Surface Cargo</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Parcel:</span> <span class="PRICE-FIVE">All Type</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">FOD:</span> <span class="PRICE-SIX">Yes</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Pick-up:</span> <span class="PRICE-SEVEN">Free Pick-up</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Load-Unload</span> <span class="PRICE">Yes</span></li>
							    <li class="list-group-item"><span class="PRICE-ONE">Required Bill:</span> <span class="PRICE">Yes</span></li>
							  </ul>
						  </div>
						  <a href="#Form" class="btn btn-warning w-100 Su"><i class="fas fa-calendar-alt fa-lg mr-3"></i>Book Now</a>
						</div>
					</div>
				</div>
			</div>
	</div>
<!-- End Service Charge -->

@endsection
