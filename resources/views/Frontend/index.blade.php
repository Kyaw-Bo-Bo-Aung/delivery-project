@extends('customer_master')
@section('content')


	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<h1 class="HH">Get the fastest & accurate delivery services from DELICOPTER</h1>
					Our service is delivering the parcel of customer from one place to another place. Customers can send or receive  the parcel as a safely especially during this pandenmic. Customers can send the parcel that are clothes, books, gifts, electronic, household and etc. to the other places. We have a lot of courier services and all of the couriers are in safe hands. Moreover, we insurance 100% for the security of sending or receving parcel.
					<div>
						<a href="{{route('roles')}}" class="btn btn-success px-3 py-2 mt-5 rounded-pill"><h5>Get Started</h5></a>
					</div>
				</div>
				<div class="col-lg-6 col-12" >
					<img src="{{asset('customer_assets/img/kho1.png')}}" class="img-fluid">
				</div>	
			</div>
		</div>			
	</div>



<div class="container">
	<h1 class="text-center mb-5 HH">Roles</h1>
	<div class="row">
		<div class="col-md-6 col-12 py-3">
			<img src="{{asset('customer_assets/img/user1.jpg')}}" class="img-fluid">
			<div class="card">
				<div class="p-3">
					<h3 class="service-title text-center">Client</h3>
					<p>Deliver your products to desire place with no worry.
					Get our reliable services with minimum prices. <br> </p>
				</div>
				
			</div>
		</div>
		<div class="col-md-6 col-12 py-3">
			<img src="{{asset('customer_assets/img/delivery2.jpg')}}" class="img-fluid">
			<div class="card">
				<div class="p-3">
					<h3 class="service-title text-center">Delivery-man</h3>
					<p>Earn money by joining with our team. All you have to do is simple. <br> <b><i class="fas fa-gift"></i> Accept Order!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-biking"> </i> Delivered!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-dollar-sign"></i> Earn money!!</b></p>
				</div>
				
			</div>
		</div>

	</div>


	<div class="text-center my-5">
		<h2 class="HH">Advantages From our service</h2>
		<div class="row my-5">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<img src="{{asset('customer_assets/img/light.png')}}" class="card-img-top w-25 mx-auto mb-3 mt-4">
					<div class="card-body text-center">
						<h5 class="py-2 service-title">Simple</h5>
						<p class="service-content">We offer Door-to-Door Delivery as a Service. This lets you to focus on your business, as we take care of delivering and maintaining the technology and services.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<img src="{{asset('customer_assets/img/coin.png')}}" class="card-img-top w-25 mx-auto mb-3 mt-4">
					<div class="card-body text-center">
						<h5 class="py-2 service-title">Cost efficient</h5>
						<p class="service-content">Delivery service is a tool for adding value to your business. With our reasonable, predictable, you don’t have to worry about surprising costs and diminishing margins.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<img src="{{asset('customer_assets/img/target.png')}}" class="card-img-top w-25 mx-auto mb-3 mt-4">
					<div class="card-body text-center">
						<h5 class="py-2 service-title">Accurate</h5>
						<p class="service-content">Our solution enables indoor is capable of accurately tracking a multitude of objects, even in crowded and demanding environments.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<h2 class="HH text-center">Our Partners</h2>
		<div class="row ml-3" align="center">
			<div class="col-sm-12 col-lg-3 mt-3 mb-3">
				<img src="{{asset('customer_assets/img/8.jpg')}}" width="200" height="100">
			</div>
			<div class="col-sm-12 col-lg-3 mt-3 mb-3">
				<img src="{{asset('customer_assets/img/2.png')}}" width="200" height="95">
			</div>
			<div class="col-sm-12 col-lg-3 mt-3 mb-3">
				<img src="{{asset('customer_assets/img/1.png')}}" width="230" height="90">
			</div>
			<div class="col-sm-12 col-lg-3 mt-3 mb-3">
				<img src="{{asset('customer_assets/img/5.png')}}" width="200" height="90">
			</div>
		</div>
	</div>


	<div class="dropdown-divider"></div>

	<!-- contact us -->
	<h2 class="HH mb-5 mt-3" align="center">Contact Us</h2>
	<!-- Text of Contact us -->
		<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<div class="Contact-Us">
							<span>
								 Contanct to us, if you need for help and feedback...The DSer Customer Care Centre is always happy to help you.
							</span>
						</div>
					</div>
				</div>
		</div>

	<div class="container ABOUTUS">
		<div class="row">
		<!-- Phone number -->
			<div class="col-sm-12 col-lg-6">
				<div class="mt-5" align="center">
					<table>
						<tbody>
							<tr>
								<td><i class="fas fa-phone-square-alt fa-lg mr-2"></i></td>
								<td><span class="CONTACT mr-2">Call Us</span><span class="CONTACT-TWO">| Head Office</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-THREE">Reschedule or Cancle Booking</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-ONE">09-087765686 | 09-267788987</span></td>
							</tr>
							<tr class="CONTACT-ONE">
								<td></td>
								<td><span class="CONTACT-ONE">7 Days a Week | 8:30AM - 11PM EST</span></td>
							</tr>

							<tr><td><br></td></tr>
							<tr>
								<td><i class="fas fa-phone-square-alt fa-lg mr-2"></i></td>
								<td><span class="CONTACT mr-2 mt-5">Call Us</span><span class="CONTACT-TWO">| Domestic Courier</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-THREE">Tracking & Customer Support</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-ONE">09-888765421 | 09-789876523 | 01-2231454</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-ONE">7 Days a Week | 8:30AM - 11PM EST</span></td>
							</tr>

							<tr><td><br></td></tr>
							<tr>
								<td><i class="fas fa-phone-square-alt fa-lg mr-2"></i></td>
								<td><span class="CONTACT mr-2 mt-5">Call Us</span><span class="CONTACT-TWO">| International Courier</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-THREE">Tracking & Customer Support</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-ONE">09-9988765 | 09-22344555 | 01-2345678</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-ONE">7 Days a Week | 8:30AM - 11PM EST</span></td>
							</tr>
								
							<tr><td><br></td></tr>
							<tr>
								<td><i class="fas fa-sms fa-lg mr-2"></i></td>
								<td><span class="CONTACT">Chat With Us</span></td>
							</tr>
							<tr>
								<td></td>
								<td><span class="CONTACT-ONE">7 Days a Week | 6AM - 11PM EST</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<!-- end phone number -->

		<!-- Feedback Form -->
			<div class="col-sm-12 col-lg-6 FEEDBACK-FORM">
				<form action="#" method="#" class="mt-5 border border-1">
					<div class="container">
						<div class="row">
							<div class="col-6 mt-3">
								<input type="text" class="form-control" placeholder="First name" aria-label="First name">
							</div>
							<div class="col-6 mt-3">
								<input type="text" class="form-control" placeholder="Second name" aria-label="Second name">
							</div>

							<div class="col-12 mt-3">
								<input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number">
							</div>

							<div class="col-12 mt-3">
								<input type="email" class="form-control" placeholder="Email" aria-label="Email">
							</div>

							<div class="col-12 mt-3">
								<textarea class="form-control Textarea" placeholder="Message:" required></textarea>
							</div>

							<div class="col-3 mt-3 mb-3">
								<input type="submit" name="btn-submit" value="Submit" class="btn btn-outline-primary">
								
							</div>


						</div>
					 
					</div>
				</form>			
			</div>
		<!-- end Feedback Form -->
		</div>
	</div>
<!-- end contact us -->



{{-- 
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
						<h5 class="service-title"><i class="fas fa-archive fa-lg mr-5 ICON""></i>Fulfillment Centers</h5>
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
		
	</div> --}}
</div>





@endsection