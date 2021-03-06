@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Packaging_Types </h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Packaging_Types</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
          <h3 class="d-inline-block">Packaging_Type Edit Form</h3>
          <a href="{{route('packagingtypes.index')}}" class="btn btn-info float-right btn-sm">Back</a>

          <form method="post" action="{{route('packagingtypes.update',$packagingType->id)}}">
             @csrf
             @method('PUT')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$packagingType->name}}">
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