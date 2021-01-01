<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Client index</h2>


	<form action="{{route('client.store')}}" method="POST">
		@csrf
		<h1>Register</h1>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" @error ('name')is-invalid @enderror>
		@error('name')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
		</div>
		 <br>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" @error ('email')is-invalid @enderror><br>
		@error('email')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
		</div>
		
		<div class="form-group">
			<label for="phone">Phone</label>
			<input type="number" name="phone" id="phone" @error ('phone')is-invalid @enderror> <br>
		@error('phone')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
		</div>
		
		<div class="form-group">
			<label for="address">Address</label><br>
			<textarea cols="30" rows="4" name="address" id="address" @error ('address')is-invalid @enderror></textarea><br>
		@error('address')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
		</div>
		
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" @error ('password')is-invalid @enderror><br>
		@error('password')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
		</div>
		
		<div class="form-group">
			<label for="password_confirmation">Confirm password</label>
			<input type="password" name="password_confirmation" id="password_confirmation" @error ('password_confirmation')is-invalid @enderror>
		@error('password_confirmation')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
		</div>
		
		<input type="submit" name="button">
	</form>
</body>
</html>