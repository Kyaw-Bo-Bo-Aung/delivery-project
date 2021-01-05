@extends('delivery/frontendmaster')
@section('content')


<div class="container p-5">
	<div class="row">
		<div class="col-3">
			<div class="card">
				<div class="card-body" >
					<div class="text-center">
						<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" width="80" height="80">
						<h3>{{auth()->user()->name}}</h3>
					</div>
					<div class="dropdown-divider"></div>
					<div>
						<p>Your level: </p>
						<p>Delivered orders: 31</p>
						<a href="/deliveryman/accountdetail" class="btn btn-sm btn-outline-dark py-2">Accout Histroy</a>
						<a class="btn btn-info" href="{{ route('logout') }}"
                           onclick="if(confirm('Are you sure to log out?')){event.preventDefault();
                                         document.getElementById('logout-form').submit();}">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
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
			<h4>Order List</h4>	
			@foreach ($orders as $order)
			
			<div class="card p-3 my-3 bg-light">
				<div class="card-body">
					<h5>Order Fresh </h5>
					<div class="dropdown-divider"></div>
					<div>
						<ul>
							
							<li>Pick-place: {{$order->pick_up_place}}</li>
							<li>Pick-up date: {{$order->pick_up_date}}</li>
							<li>Pick-up time: {{$order->pick_up_time}}</li>
							<li>Receiver Name: {{$order->receiver_name}}</li>
							<li>Receiver Phone: {{$order->receiver_phone}}</li>
							<li>Sender Name: {{$order->client->user->name}}</li>
							<li>Weight: {{$order->weight->weight}}</li>
							<li>Note: {{$order->note}}</li>
							<li><b>Delivery-Fees: {{$order->weight->price}}</b></li>
							
						</ul>
						<div class="float-right">
							{{-- <a href="{{route('orderdetail')}}" class="btn btn-info">detail</a> --}}
							<button class="btn btn-success">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach	

			
			<div class="card p-3 my-3 bg-light">
				<div class="card-body">
					<h5>Order Done <img src="https://www.nicepng.com/png/detail/443-4439064_blue-check-mark-icon-png-check-mark-circle.png" width="44" height="30"></h5>
					<div class="dropdown-divider"></div>
					<div>
						<ul>
							<li>Pick-up date: 14.1.2021</li>
							<li>Pick-place: Yankin</li>
							<li>Drop-off place: Tamwe</li>
							<li>Weight: 5kg</li>
							<li>Note: something</li>
						</ul>
						<div class="float-right">
							<a href="{{route('orderdetail')}}" class="btn btn-info">detail</a>
							{{-- <button class="btn btn-outline-success">Confirm</button> --}}
						</div>
					</div>
				</div>
			</div>	


		</div>

	</div>
</div>





@endsection