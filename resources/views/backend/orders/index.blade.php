@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Orders</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Orders</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Orders List</h3>
            
          <thead>
           <tr>
          <th>#</th>
          <th>Order No</th>
          <th>Pick-up Place</th>
          <th>Drop-off Place</th>
          <th>Pick-up Date</th>
          <th>Pick-up Time</th>
          <th>Product Value</th>
          <th>Product Type</th>
          <th>Packaging Type</th>
          <th>Weight</th>
          <th>Customer Name</th>
          <th>Delivery Name</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
       <tbody>
        
       </tbody>
        </table>
     </div>
   </div>
  </div>
 </div>
</div>
  </main>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/chart.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
@endsection