@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Clients Detail</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Clients Detail</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Clients Detail</h3>
            
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
            @php $i=1; @endphp
            @foreach($clients as $client)
            <tr>
             <td>{{$i++}}</td>
             <td>{{$client->user->name}}</td>
             <td>{{$client->user->email}}</td>
             <td>{{$client->phone}}</td>
             <td>{{$client->address}}</td>
            </tr>
            @endforeach 
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