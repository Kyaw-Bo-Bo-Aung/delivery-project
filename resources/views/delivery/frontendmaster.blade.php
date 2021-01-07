<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('kbba/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('customer_assets/fontawesome/css/all.min.css')}}">
	
</head>
<body>

	@yield('content')


	<script type="text/javascript" src="{{asset('kbba/js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('kbba/js/bootstrap.bundle.min.js')}}"></script>
	@yield('script')
</body>
</html>