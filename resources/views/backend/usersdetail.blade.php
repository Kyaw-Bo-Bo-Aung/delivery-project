@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Users Detail</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Users Detail</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Users Detail</h3>
            
          <thead>
           <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
       
        </tr>
      </thead>
       <tbody>
         <tr>
           <td>1</td>
           <td>Mg Mg</td>
           <td>mgmg@gmail.com</td>
           <td>0987654432</td>
           <td>Ygn</td>
         </tr>

         <tr>
           <td>1</td>
           <td>Aye Aye</td>
           <td>ayeaye@gmail.com</td>
           <td>0987654432</td>
           <td>Ygn</td>
         </tr>
         
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