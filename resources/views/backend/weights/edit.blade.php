@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Weights </h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Weights</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
          <h3 class="d-inline-block">Weight Edit Form</h3>
          <a href="{{route('weights.index')}}" class="btn btn-info float-right btn-sm">Back</a>

          <form method="post" action="{{route('weights.update',$weight->id)}}">
             @csrf
             @method('PUT')
            <div class="form-group">
              <label for="name">Weight</label>
              <input type="text" name="weight" id="weight" class="form-control" value="{{$weight->weight}}">
            </div>

            <div class="form-group">
              <label for="name">Price</label>
              <input type="text" name="price" id="price" class="form-control" value="{{$weight->price}}">
            </div>

            <div class="form-group">
              <input type="submit" name="btn-submit" value="Update" class="btn btn-info btn-sm">
            </div>
            
          </form>

        </div>
       </div>
      </div>
    </div>
</main>
@endsection