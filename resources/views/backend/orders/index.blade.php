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
    <div>
      {{-- {{dd($transactions[0]->order->note)}} --}}
      
        {{-- {{dd($transactions->order)}} --}}
       {{--  @foreach($transactions as $transaction)
        <li>{{$transaction->delivery->user->name}}</li>
        @endforeach --}}
     
    </div>

   {{--  <div class="tile">
      <h3 class="tile-title">Search order</h3>
      <div class="tile-body">
        <form class="row">
          <div class="form-group col-md-5">
            <label class="control-label">Start date</label>
            <input class="form-control" type="date" id="startdate">
          </div>
          <div class="form-group col-md-5">
            <label class="control-label">End date</label>
            <input class="form-control" type="date" id="enddate">
          </div>
          <div class="form-group col-md-2 align-self-end">
            <button class="btn btn-primary searchBtn" type="button">Search</button>
          </div>
        </form>
      </div>
    </div> --}}

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">

         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Orders</h3>
            
          <thead>
           <tr>
          <th>#</th>
          <th>Customer Name</th>
          <th>Pick-up Place</th>
          <th>Drop-off Place</th>
          <th>Qty</th>
          <th>Delivery Name</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
       <tbody>
        @php $j=1; @endphp
        @foreach($transactions as $transaction)
        <tr>
        <td>{{$j++}}</td>
        <td>{{$transaction->order->client->user->name}}</td>
        <td>{{$transaction->order->pick_up_place}}</td>
        <td>{{$transaction->order->drop_off_place}}</td>
        <td>{{$transaction->order->qty}}</td>
        @if($transaction->delivery)
        <td>{{$transaction->delivery->user->name}}</td>
        @else
        <td></td>
        @endif
        <td>        
          @if($transaction->status==1 && $transaction->order->status==1)
                <p class="text-white d-inline-block bg-warning rounded py-1 px-2">Requesting Order</p>
          @elseif($transaction->status==2 && $transaction->order->status==2)
                <p class="text-white d-inline-block bg-secondary rounded py-1 px-2">Assigning</p>
          @elseif($transaction->status==3 && $transaction->order->status==3)
                <p class="text-white d-inline-block bg-primary rounded py-1 px-2">Accepted</p>
          @elseif($transaction->status==4 && $transaction->order->status==4)
                <p class="text-white d-inline-block bg-info rounded py-1 px-2">Picked-up</p>
          @elseif($transaction->status==5 && $transaction->order->status==5)
                <p class="text-white d-inline-block bg-success rounded py-1 px-2">Delivered</p>
          @endif
        </td>
        <td>
          <a href="{{route('orders.show',$transaction->order->id)}}" class="btn btn-info">Detail</a>
         {{--  <a href="javascript:void[0]" class="btn btn-success assignedBtn" data-id="{{$order->id}}">Set Delivery-Man</a> --}}
        </td>
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


{{-- modal --}}

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade orderdetailmodal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Choose Delivery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col">
            <h4><i class="far fa-calendar-check"></i>Location & Date</h4>
            <div>
              
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <div class="col">
            
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>





