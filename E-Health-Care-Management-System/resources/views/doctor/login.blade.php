<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>

	<div class="col-3 ml-auto text-right py-4 mx-5">
		
		<button class="button btn-outline-secondary"><a href="/doctor/register">Register</a></button>	
	</div>
	<div class="container">
		<form method="POST" action="" enctype="multipart/form-data">
			@csrf



			<div class="form-group">
				<label for="name">User Name</label>
				<input type="text" class="form-control" placeholder="" name="name" required>
			</div>


			<div class="form-group">
				<label for="password">password</label>
				<input type="password" class="form-control" placeholder="" name="password" required>
			</div>



			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		{{session('msg')}}
	</div>

	@include('layouts.footer')
</body>
</html>