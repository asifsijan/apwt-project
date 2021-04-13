<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')
</head>
<body>


    @include('layouts.doctorHeader')

    @php
    	$x = DB::table('users')->where('id', $blog->doctor_id)->value('user_name');
    	
    @endphp


    <div class="container">
		
		<div class="jumbotron">

			<h4 class="d-flex justify-content-center"><a href="" name=""> {{ $blog->blog_name }}</a></h4>
			<small class="d-flex justify-content-center">posted by {{$x}} at {{$blog->created_at}}</small>
			<p class="pt-4 pb-0 mb-0"> {{$blog->blog_details}} </p>

		</div>
		
	</div>

	<div class="d-flex justify-content-center">
		
	</div>


    @include('layouts.footer')
</body>
</html>