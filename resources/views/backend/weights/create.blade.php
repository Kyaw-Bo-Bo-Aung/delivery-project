@extends('backend-master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> PaWeights </h1>
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
          <h3 class="d-inline-block">Weight Create Form</h3>
          <a href="{{route('weights.index')}}" class="btn btn-info float-right btn-sm">Back</a>
           <form method="post" action="{{route('weights.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Weight</label>
              <input type="text" name="weight" id="weight" class="form-control @error('weight') is-invalid @enderror" value="{{old('weight')}}">

              @error('weight')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group">
              <label for="name">Price</label>
              <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">

              @error('price')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <input type="submit" name="btn-submit" value="Save" class="btn btn-info btn-sm">
            </div>
            
          </form>

        </div>
       </div>
      </div>
    </div>
</main>
@endsection