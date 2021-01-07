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

              <a href="{{route('orderinformationpage')}}" class="btn btn-secondary btn-sm float-right mb-5"><i class="fas fa-caret-left b-5"></i>&nbsp;&nbsp;Back&nbsp;&nbsp;</a>
             
              <div class="table-responsive mt-3">                
                @foreach($transactions as $transaction)
                 
                <div class="d-inline-block">
                  <div>
                    <strong> 
                    Client Name : {{$transaction->order->client->user->name}}</strong> 
                  </div>

                  <div>
                   <strong>
                    Receiver Name : {{$transaction->order->receiver_name}}
                   </strong> 
                  </div>
                </div>
                
                <div class="float-right">
                  <div>
                   <strong>
                     Delivery Name : @if($transaction->delivery_man_id) {{$transaction->delivery->user->name}} @endif 
                   </strong> 
                  </div>

                  <div>
                      <strong>
                      Delivery Fees : {{$transaction->order->weight->price}}</strong> 
                  </div>

                </div>
                <table class="table table-bordered mt-3 mb-5 shadow" id="sampleTable">
                
                  <thead>
                     
                     {{--  <th>Receiver Name</th>
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
                      <th>Delivery Name</th>
                      <th>Note</th> --}}
                      <tr>
                       <th width="250px">Product_Types</th>
                       <td>{{$transaction->order->product_type->name}}</td>
                      </tr>
                      <tr>
                        <th>Packaging_Types</th>
                        <td>{{$transaction->order->packaging_type->name}}</td>
                      </tr>
                      <tr>
                        <th>Qty</th>
                        <td>{{$transaction->order->qty}}</td>
                      </tr>
                      <tr>
                        <th>Weight</th>
                        <td>{{$transaction->order->weight->weight}}</td>
                      </tr>

                      <tr>
                        <th>Pick-up Place</th>
                        <td>{{$transaction->order->pick_up_place}}</td>
                      </tr>

                      <tr>
                        <th>Drop-off Place</th>
                        <td>{{$transaction->order->drop_off_place}}</td>
                      </tr>
                      <tr>
                        <th>Pick-up Time</th>
                        <td>{{$transaction->order->pick_up_time}}</td>
                      </tr>
                      <tr>
                        <th>Pick-up Date</th>
                        <td>{{$transaction->order->pick_up_date}}</td>
                      </tr>
             
                      <tr>
                        <th>Note</th>
                        <td>{{$transaction->order->note}}</td>
                      </tr>
                      
                  </thead>
                  <tbody>
                   {{--  @foreach($transactions as $transaction)
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
                      <td>{{$transaction->order->weight->price}}</td> --}}
                     {{--  <td>{{$transaction->delivery->user->name}}</td> --}}
                     {{--  <td>{{$transaction->order->note}}</td>
                    </tr> --}}
                   
                  </tbody>    
                </table>
                 @endforeach
               </div>
            </div>
          </div>
        </div>
      </div>
	</div>

@endsection