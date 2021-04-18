<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	@include('layouts.header')


	<div class="container">
		<form method="POST" action="" enctype="multipart/form-data">
			@csrf



			<div class="form-group" style="text-align:center;">
				<label for="name">User Name</label>
				<input type="text" class="form-control" placeholder="" name="name" required>
			</div>


			<div class="form-group" style="text-align:center;">
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