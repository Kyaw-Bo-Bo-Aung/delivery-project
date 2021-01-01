@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Product_Types</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Product_Types</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Product_Type List</h3>
             <a href="{{route('producttypes.create')}}" class="btn btn-primary float-right">Add New</a>
           
           <thead>
            <tr>
             <th>#</th>
             <th>Name</th>
             <th>Actions</th>
            </tr>
           </thead>
           
           <tbody>
             <tr>
               <td>1</td>
               <td>Electronic</td>
               <td>
                 <button class="btn btn-warning">Edit</button>
                 <button class="btn btn-danger">Delete</button>
               </td>
             </tr>
             <tr>
               <td>2</td>
               <td>Food</td>
               <td>
                 <button class="btn btn-warning">Edit</button>
                 <button class="btn btn-danger">Delete</button>
               </td>
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