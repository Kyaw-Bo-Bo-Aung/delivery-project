@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Orders</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Orders</a></li>
      </ul>
    </div>
   <div class="row">
      <div class="col-md-12">
       {{-- <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Orders Management</h3>
            
      <thead>
        <tr>
          
          <th>Receiver Name</th>
          <th>Reciver Phone</th>
          <th>Customer Name</th>
          <th>Product Value</th>
          <th>Weight</th>
          <th>Pick-up Place</th>
          <th>Drop-off Place</th>
          <th>Pick-up Date</th>
          <th>Pick-up Time</th>
          <th>Product_Types</th>
          <th>Packaging_Types</th>
          <th>Delivery Name</th>
          <th>Note</th>
          <th>Action</th>
        </tr>
      </thead>
       <tbody>
        <tr>
         <td>{{$order->receiver_name}}</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
       </tbody>
        </table>
     </div>
   </div>
  </div> --}}

  
      <div class="card p-3 my-3 bg-light">
        <div class="card-body">
          <h5>Orders Management </h5>
          <div class="dropdown-divider"></div>
          <div>
            <ul>
              <li class="p-1">Receiver Name:<strong>{{$order->receiver_name}}</strong> </li>
              <li  class="p-1">Receiver Phone:<strong>{{$order->receiver_phone}}</strong></li>
              <li  class="p-1">Customer Name:<strong>{{$order->client->user->name}}</strong></li>
              <li  class="p-1">Qty:<strong>{{$order->qty}}</strong></li>
              <li  class="p-1">Weight:<strong>{{$order->weight->weight}}</strong></li>
                <li  class="p-1">Delivery Fees:<strong>{{$order->weight->price}}</strong></li>
              
              <li  class="p-1">Pick-up place:<strong>{{$order->pick_up_place}}</strong> </li>
              <li  class="p-1">Drop-off place:<strong>{{$order->drop_off_place}}</strong> </li>
              <li  class="p-1">Pick-up date:<strong>{{$order->pick_up_date}}</strong> </li>
              <li  class="p-1">Pick-up time:<strong>{{$order->pick_up_time}}</strong> </li>
              <li  class="p-1">Product_Types:<strong>{{$order->product_type->name}}</strong></li>
              <li  class="p-1">Packaging_Types:<strong>{{$order->packaging_type->name}}</strong></li>

              <li  class="p-1">Delivery:<select>
                             <option>Choose Delivery</option>
                            
                           </select>
              </li>
      
              <li  class="p-1">Note:<strong>{{$order->note}}</strong></li>
            </ul>

             <div class="mt-2">
                    @if($order->status == 0)
                       
                        <form action="{{route('orders.update',$order->id)}}" method="post">
                          @csrf
                          @method("PUT")

                         <button class="btn btn-info" type="submit" style="margin-left: 1050px;">Confirm</button>
                        </form>
                       
                        
                        <form  action="{{route('orders.destroy',$order->id)}}" method="post">
                          @csrf
                          @method("DELETE")
                         <button class="btn btn-danger mx-1" type="submit" >Cancel</button>
                        </form>
    
                    @endif
              </div>
          </div>
        </div>
      </div>  
  </div>
</div>
   

  </main>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection 