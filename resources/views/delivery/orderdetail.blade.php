@extends('delivery/frontendmaster')
@section('content')


<div class="container p-5">
	<div class="row">
		<div class="col-3">
			<div class="card">
				<div class="card-body" >
					<div class="text-center">
						<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" width="80" height="80">
						<h3>Account User</h3>
					</div>
					<div class="dropdown-divider"></div>
					<div>
						<p>Your level: </p>
						<p>Delivered orders: 31</p>
						<button class="btn btn-sm btn-outline-dark">Accout Histroy</button>
					</div>
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<p class="mt-3">Help center: 098978179, 09 8123828</p>
				</div>
			</div>
		</div>
		<div class="col-9">
			<div class="card">
				<div class="card-body">
					<h4 style="  font-weight: 900;">Order {{-- <span style="color: #17a2b8"> --}}Detail{{-- </span> --}}</h4>      
					<div class="py-3">
						<ul>
							<li>pick-up place: </li>
							<li>pick-up date: </li>
							<li>pick-up time: </li>
							<li>drop-off place: </li>
							<li>receiver name: </li>
							<li>receiver phone: </li>
							<li>sender name: </li>
							<li>weight: </li>
							<li>delivery-price: </li>
							<li>packaging-type: </li>
							<li>product-type: </li>
							<li>note: </li>
						</ul>

						<div class="float-right">
							<a href="" class="btn btn-primary px-3 mx-3">Confirm order</a>
							<a href="{{ route('accountpage') }}" class="btn btn-secondary">back</a>
						</div>
					</div>	
				</div>
			</div>
			
				


		</div>

	</div>
</div>





@endsection