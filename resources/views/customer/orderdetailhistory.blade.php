@extends('customer_master')
@section('content')

<!-- Card -->
	<div class="container">
		{{-- <div class="row">
			<div class="col-12">
				<img src="{{asset('customer_assets/img/14.jpg')}}" class="w-100" height="">
			</div>
		</div> --}}
<!-- End card -->

<!-- order detail table -->
		<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h4 class=" ORDER-TITLE">Order Detail</h4><br>

              <a href="{{route('orderinformationpage')}}" class="btn btn-secondary btn-sm float-right"><i class="fas fa-caret-left"></i>&nbsp;&nbsp;Back&nbsp;&nbsp;</a>
             
              <div class="table-responsive mt-3">                
                <table class="table table-bordered mt-3 mb-5 shadow" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Receiver Name</th>
                      <th>Receiver Phone</th>
                      <th>Product_Types</th>
                      <th>Packaging_Types</th>
                      <th>Qty</th>
                      <th>Weight</th>
                      <th>Pick-up Place</th>
                      <th>Drop-off Place</th>
                      <th>Pick-up Time</th>
                      <th>Pick-up Date</th>
                      <th>Delivery Fees</th>
                      <th>Note</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                      <td>{{$transaction->order->receiver_name}}</td>
                      <td>{{$transaction->order->receiver_phone}}</td>
                      <td>{{$transaction->order->product_type->name}}</td>
                      <td>{{$transaction->order->packaging_type->name}}</td>
                      <td>{{$transaction->order->qty}}</td>
                      <td>{{$transaction->order->weight->weight}}</td>
                      <td>{{$transaction->order->pick_up_place}}</td>
                      <td>{{$transaction->order->drop_off_place}}</td>
                      <td>{{$transaction->order->pick_up_time}}</td>
                      <td>{{$transaction->order->pick_up_date}}</td>
                      <td>{{$transaction->order->weight->price}}</td>
                      <td>{{$transaction->order->note}}</td>
                    </tr>
                    @endforeach
                  </tbody>    
                </table>
               </div>
            </div>
          </div>
        </div>
      </div>
	</div>

@endsection