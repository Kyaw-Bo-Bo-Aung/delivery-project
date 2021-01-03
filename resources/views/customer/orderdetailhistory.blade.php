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
              <h4 class=" ORDER-TITLE">Order History</h4><br>

              <a href="{{route('orderinformationpage')}}" class="btn btn-success btn-sm"><i class="fas fa-caret-left"></i>&nbsp;&nbsp;Back&nbsp;&nbsp;</a>
              <input type="submit" name="btnsubmit" class="btn btn btn-danger btn-sm float-right" value="Delete"> 
              <a href="#" class="btn btn-warning btn-sm mr-3 float-right text-white">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
              
                


              <div class="table-responsive mt-3">                
                <table class="table table-bordered mt-3 mb-5" id="sampleTable">
                  <thead class="thead-dark">
                    <tr class="Column-Name">
                      <th>Order</th>
                      <th>Order Detail</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr class="Column-Name">
                      <td>Name</td>
                      <td>Shishiyo</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Product Type</td>
                      <td>Clothes</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Packing Type</td>
                      <td>Envelope</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Quantity</td>
                      <td>1 Parcel</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Pick-up</td>
                      <td>Yangon/Mingaladon/</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Drop-off</td>
                      <td>Hlaing</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Date</td>
                      <td>12/5/2021</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Pick-up time</td>
                      <td>12:30AM</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Select weight</td>
                      <td>Full Truck Load</td>
                    </tr>

                     <tr class="Column-Name">
                      <td>Product value</td>
                      <td>2</td>
                    </tr>
                  </tbody>       
                </table>
               </div>
            </div>
          </div>
        </div>
      </div>
	</div>

@endsection