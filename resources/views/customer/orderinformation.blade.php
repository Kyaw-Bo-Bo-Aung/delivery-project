
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
		<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h4 class=" ORDER-TITLE">Order History</h4><br>

             <!--  <a href="#" class="btn btn-success float-right"><i class="fas fa-plus mr-3"></i>Add New</a> -->

              <div class="table-responsive mt-3 ORDER-TABLE">                
                <table class="table table-bordered mt-3 mb-5" id="sampleTable">
                  <thead class="thead-dark">
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
                      <th>Delivery Fees</th>
                     {{--  <th>Action</th> --}}
                    </tr>
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
                      <td class="Column-data">{{$order->weight->price}}</td>


                      {{-- <td class="ACTION"><a href="#" class="btn btn-info btn-sm">Detail</a></td>
                      <td class="ACTION">
                        <a href="#" class="btn btn-warning btn-sm mt-1 mb-1">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                        <input type="submit" name="btnsubmit" class="btn btn btn-danger btn-sm" value="Delete">       
                      </td> --}}
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
<!-- End order table -->

@endsection