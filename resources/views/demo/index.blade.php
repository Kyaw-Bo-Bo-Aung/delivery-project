<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('kbba/css/bootstrap.min.css')}}">
</head>
<body>

	<div class="container my-5 w-50">
		<form action="{{route('demo.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label>Receiver Name:</label>
				<input type="text" name="receiverName" class="form-control @error('receiverName') is-invalid @enderror">
				@error('receiverName')
				    <div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Receiver Phone:</label>
				<input type="number" name="receiverPhone" class="form-control">
			</div>
			<div class="form-group">
				<label>Product type</label>
				<select class="form-control" name="productType">
					@foreach($producttypes as $pt)
					<option value="{{$pt->id}}">{{$pt->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Packaging type</label>
				<select class="form-control" name="packagingType">
					@foreach($packagingtypes as $pkt)
					<option value="{{$pkt->id}}">{{$pkt->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<label>Weight</label>
						<select class="form-control" name="weight">
							@foreach($weights as $wt)
							<option value="{{$wt->id}}">{{$wt->weight}} = {{$wt->price}}</option>
							@endforeach
						</select>
					</div>
				</div>
				
			</div>
			<div class="form-group">
				<label>Pick-up Place</label>
				<input type="text" name="pickupPlace" class="form-control">
			</div>
			<div class="form-group">
				<label>Pick-up date</label>
				<input type="date" name="pickupDate" class="form-control">
			</div>
			<div class="form-group">
				<label>Pick-up time</label>
				<input type="time" name="pickupTime" class="form-control">
			</div>
			<div class="form-group">
				<label>Drop-off place</label>
				<input type="text" name="dropoffTime" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="button" class="btn btn-success">
			</div>
		</form>
	</div>
	


	<script type="text/javascript" src="{{asset('kbba/js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('kbba/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>