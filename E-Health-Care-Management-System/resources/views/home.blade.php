<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	@include('layouts.header')


	<div class="container">
		<div class="d-flex justify-content-center">
		<p style="">Latest Blogs</p>

	</div>
		@foreach ($blogs as $blog)
		<div class="jumbotron">

			<h4 class="d-flex justify-content-center">{{ $blog->blog_name }}</h4>
			<small class="d-flex justify-content-center">posted by doctor {{$blog->doctor_id}} at {{$blog->created_at}}</small>
			<p class="pt-4 pb-0 mb-0"> {{$blog->blog_details}} </p>

		</div>
		@endforeach
	</div>

	<div class="d-flex justify-content-center">
		{{$blogs->links()}}
	</div>

	@include('layouts.footer')
</body>
</html>