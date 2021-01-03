
@extends('customer_master')
@section('content')

<!-- Card -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="{{asset('customer_assets/img/14.jpg')}}" class="w-100" height="">
			</div>
		</div>
<!-- end card -->

<!-- order table -->
		<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h4 class=" ORDER-TITLE">Order History</h4><br>

             <!--  <a href="#" class="btn btn-success float-right"><i class="fas fa-plus mr-3"></i>Add New</a> -->

              <div class="table-responsive mt-3">                
                <table class="table table-bordered mt-3 mb-5" id="sampleTable">
                  <thead class="thead-dark">
                    <tr class="Column-Name">
                      <th>No</th>
                      <th>Name</th>
                      <th>Product Type</th>
                      <th>Date</th>
                      <th>Detail</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr class="Column-Name">
                      <td class="Column-data">1</td>
                      <td class="Column-data">Shishiyo</td>
                      <td class="Column-data">Clothes</td>
                      <td class="Column-data">9.12.2021</td>
                      <td class="ACTION"><a href="{{ route('orderdetailhistorypage') }}" class="btn btn-info btn-sm">Detail</a></td>
                      <td class="ACTION">
                        <a href="#" class="btn btn-warning btn-sm mt-1 mb-1">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                        <input type="submit" name="btnsubmit" class="btn btn btn-danger btn-sm" value="Delete">       
                      </td>
                    </tr>
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