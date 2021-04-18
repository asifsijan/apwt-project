<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.doctorHeader')

    	<div class="container">
		<form method="POST" action="" enctype="multipart/form-data">
			@csrf



			<div class="form-group">
				<label for="name">Blog Title</label>
				<input type="text" class="form-control" placeholder="" name="blog_name" required>
			</div>
			
			<div class="form-group">
				<label for="name">Blog Excerpt</label>
				<textarea class="form-control" rows="3" name="blog_details" required></textarea>
			</div>




			<button type="submit" class="btn btn-primary">Add Blog</button>
		</form>
		{{session('msg')}}
	</div>
    
    
    @include('layouts.footer')
</body>
</html>