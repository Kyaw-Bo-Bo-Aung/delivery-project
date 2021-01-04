@extends('customer_master')
@section('content')


	<div class="banner_img">
		<img src="https://www.oneclickhomeservices.com/sites/all/themes/bigideass_responsive_theme/images/home-delivery-banner.jpg" class="img-fluid w-100">
	</div>
		<div class="banner_div text-center w-100 p-5">
			<div class="text-center">
				<h1 class="HH text-white">Delivery For All</h1>
				<div class="row text-center">
					<div class="col-md-6 col-12">
						<a href="{{route('customerloginpage')}}" class="btn p-4 btn-primary">Delivery your item</a>
					</div>
					<div class="col-md-6 col-12">
						<a href="{{route('delivery.index')}}" class="btn p-4 btn-success">Become a rider</a>
					</div>
				</div>
			</div>
		</div>
	


<div class="container">
	
	<div class="text-center my-5">
		<h2 class="HH">About Our Service</h2>
		<p class="pb-4 px-5 service-content">We provide everything you need, to create your location based services and applications. Bringing cost efficient high accuracy indoor positioning to boost your business. Service delivery can be defined as any contact with the public administration during which customers – citizens, residents or enterprises – seek or provide data, handle their affairs or fulfil their duties. These services should be delivered in an effective, predictable, reliable and customer-friendly manner.</p>
	</div>


	<div class="text-center my-5">
		<h2 class="HH">Advantages From our service</h2>
		<div class="row my-5">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Simple_light_bulb_graphic.png/231px-Simple_light_bulb_graphic.png" class="card-img-top w-25 mx-auto mb-3 mt-4">
					<div class="card-body text-center">
						<h5 class="py-2 service-title">Simple</h5>
						<p class="service-content">We offer Door-to-Door Delivery as a Service. This lets you to focus on your business, as we take care of delivering and maintaining the technology and services.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<img src="https://webstockreview.net/images/save-money-icon-png.png" class="card-img-top w-25 mx-auto mb-3 mt-4">
					<div class="card-body text-center">
						<h5 class="py-2 service-title">Cost efficient</h5>
						<p class="service-content">Delivery service is a tool for adding value to your business. With our reasonable, predictable, you don’t have to worry about surprising costs and diminishing margins.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12">
				<div class="card">
					<img src="https://img.icons8.com/ios/452/accuracy.png" class="card-img-top w-25 mx-auto mb-3 mt-4">
					<div class="card-body text-center">
						<h5 class="py-2 service-title">Accurate</h5>
						<p class="service-content">Our solution enables indoor is capable of accurately tracking a multitude of objects, even in crowded and demanding environments.</p>
					</div>
				</div>
			</div>
		</div>
	</div>




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
		
	</div>
</div>





@endsection