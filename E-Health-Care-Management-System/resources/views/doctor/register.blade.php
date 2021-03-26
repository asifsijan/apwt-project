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

			<div class="form-group">
				<label for="user_name">User Name</label>
				<input type="text" class="form-control" placeholder="" name="user_name">
			</div>

			<div class="form-group">
				<label for="first_name">First Name</label>
				<input type="text" class="form-control" placeholder="" name="first_name">
			</div>

			<div class="form-group">
				<label for="last_name">Last Name</label>
				<input type="text" class="form-control" placeholder="" name="last_name">
			</div>

			<div class="form-group">
				<label for="email">email</label>
				<input type="email" class="form-control" placeholder="" name="email">
			</div>


			<div class="form-group">
				<label for="password">password</label>
				<input type="password" class="form-control" placeholder="" name="password">
			</div>





			<div class="form-group">
				<label for="image">upload profile Image</label>
				<input type="file" class="form-control" placeholder="" name="image">
			</div>
			
			<div class="form-group">
				<label for="dob">Date of birth</label>
				<input type="date" class="form-control" placeholder="" name="dob">
			</div>

			<div class="form-group">
				<label for="gender">Gender</label>
				<input type="text" class="form-control" placeholder="" name="gender">
			</div>

			<div class="form-group">
				<label for="blood_type">blood type</label>
				<input type="text" class="form-control" placeholder="" name="blood_type">
			</div>
			<div class="form-group">
				<label for="nid">nid</label>
				<input type="text" class="form-control" placeholder="" name="nid">
			</div>
			<div class="form-group">
				<label for="contact">contact</label>
				<input type="text" class="form-control" placeholder="" name="contact">
			</div>












			<div class="form-group">
				<label for="category">category</label>
				<input type="text" class="form-control" placeholder="" name="category">
			</div>


			<div class="form-group">
				<label for="about">About:</label>
				<textarea class="form-control" rows="3" name="about"></textarea>
				
			</div>

			<div class="form-group">
				<label for="category">category</label>
				<input type="text" class="form-control" placeholder="" name="category">
			</div>

			<div class="form-group">
				<label for="degree">degree</label>
				<input type="text" class="form-control" placeholder="" name="degree">
			</div>

			<div class="form-group">
				<label for="bmdc_id">bmdc_id</label>
				<input type="number" class="form-control" placeholder="" name="bmdc_id">
			</div>

			<div class="form-group">
				<label for="certificate">upload certificate</label>
				<input type="file" class="form-control" placeholder="" name="certificate">
			</div>

			<div class="form-group">
				<label for="visit_fee">visit fee</label>
				<input type="number" class="form-control" placeholder="" name="visit_fee">
			</div>			




			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	@include('layouts.footer')
</body>
</html>