@extends('customer_master')
@section('content')

<div class="container">
	<h2 class="HH text-center my-4">Log in as</h2>
	<div class="row m-5">
		<div class="col-md-6 col-12 clientholder">
			<a href="{{route('customerloginpage')}}" style="text-decoration: none;" class="text-white">
				<img src="{{asset('customer_assets/img/client.jpg')}}" class="img-fluid w-75 IMAGE">
					<div class="clientphoto w-100">
						<div style="background: rgba(0, 0, 0, 0.5);">
							<h2 class="text-center">Client</h2>
						</div>
					</div>
			</a>
			
			
		</div>

		<div class="col-md-6 col-12 clientholder">
			<a href="{{route('delivery.index')}}" style="text-decoration: none;" class="text-white">
				<img src="{{asset('customer_assets/img/delivery1.jpg')}}" class="img-fluid w-75 IMAGE">
					<div class="clientphoto w-100">
						<div style="background: rgba(0, 0, 0, 0.5);">
							<h2 class="text-center">Delivery-Man</h2>
						</div>
					</div>
					
			</a>
			
		</div>
		
	</div>
</div>



@endsection