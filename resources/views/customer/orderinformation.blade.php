
@extends('customer_master')
@section('content')

<!-- Card -->
	<div class="container">
		{{-- <div class="row">
			<div class="col-12">
				<img src="{{asset('customer_assets/img/14.jpg')}}" class="w-100" height="">
			</div>
		</div> --}}
<!-- end card -->

<!-- order table -->
	{{-- 	<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body"> --}}
              <h4 class=" ORDER-TITLE">Your Order History</h4><br>

             <!--  <a href="#" class="btn btn-success float-right"><i class="fas fa-plus mr-3"></i>Add New</a> -->

              {{-- <div class="table-responsive mt-3 ORDER-TABLE">                
                <table class="table table-bordered mt-3 mb-5 bg-light" id="sampleTable">
                  <thead>
                    <tr class="Column-Name">
                      <th>No</th>
                      <th>Receiver Name</th>
                      <th>Receiver Phone</th>
                      <th>Product Type</th>
                      <th>Packaging Type</th>
                      <th>Pick-up place</th>
                      <th>Drop-off place</th>
                      <th>Pick-up time</th>
                      <th>Pick-up date</th>
                      <th>Delivery Fees</th> --}}
                     {{--  <th>Action</th> --}}
                   {{--  </tr>
                  </thead>
                  <tbody>
                     @php $i=1; @endphp
                     @foreach($orders as $order)
                    <tr class="Column-Name">
                      <td class="Column-data">{{$i++}}</td>
                        <td class="Column-data">{{$order->receiver_name}}</td>
                         <td class="Column-data">{{$order->receiver_phone}}</td>
                    
                      <td class="Column-data">{{$order->product_type->name}}</td>
                       <td class="Column-data">{{$order->packaging_type->name}}</td>
                      <td class="Column-data">{{$order->pick_up_place}}</td>
                      <td class="Column-data">{{$order->drop_off_place}}</td>
                      <td class="Column-data">{{$order->pick_up_time}}</td>
                      <td class="Column-data">{{$order->pick_up_date}}</td>
                      <td class="Column-data">{{$order->weight->price}}</td> --}}


                      {{-- <td class="ACTION"><a href="#" class="btn btn-info btn-sm">Detail</a></td>
                      <td class="ACTION">
                        <a href="#" class="btn btn-warning btn-sm mt-1 mb-1">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                        <input type="submit" name="btnsubmit" class="btn btn btn-danger btn-sm" value="Delete">       
                      </td> --}}
                    {{-- </tr>
                    @endforeach
                  </tbody>       
                </table>
               </div>
            </div>
          </div>
        </div>
      </div> --}}
  <div class="row">
    @foreach($orders as $order)
    <div class="col-lg-4 my-4">
  <div class="card shadow">
  <div class="card-body">
   
    <ul type="square" style="line-height: 180%">
      <li>Receiver Name : <strong>{{$order->receiver_name}}</strong></li>
      <li>Receiver Phone : <strong>{{$order->receiver_phone}}</strong></li>
      <li>Drop-off Place : <strong>{{$order->drop_off_place}}</strong></li>
      <li>Delivery Fees : <strong>{{$order->weight->price}}</strong></li>
    {{--   @if($transaction->status==3)
      <li>Delivery Name : <strong>{{$transaction->delivery->user->name}}</strong></li>
      @elseif($transaction->status==4)
      <li>Delivery Name : <strong>{{$transaction->delivery->user->name}}</strong></li>
      @elseif($transaction->status==5)
      <li>Delivery Name : <strong>{{$transaction->delivery->user->name}}</strong></li>
      @endif --}}
      <li>
        @if($order->status==1)
                <p class="text-white d-inline-block bg-warning rounded py-1 px-2">Request In Process</p>
          @elseif($order->status==2)
                <p class="text-white d-inline-block bg-secondary rounded py-1 px-2">Request In Process</p>
          @elseif($order->status==3)
                <p class="text-white d-inline-block bg-primary rounded py-1 px-2">Delivery Found</p>
          @elseif($order->status==4)
                <p class="text-white d-inline-block bg-info rounded py-1 px-2">Picked-up</p>
          @elseif($order->status==5)
                <p class="text-white d-inline-block bg-success rounded py-1 px-2">Delivered Success</p>
          @endif
      </li>
    </ul>
    <a href="{{route('orderdetailhistorypage',$order->id)}}" class="btn btn-outline-info float-right">Detail</a>
  </div>
</div>
</div>
@endforeach
</div>

	</div>
<!-- End order table -->

@endsection