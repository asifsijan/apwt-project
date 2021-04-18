<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')
</head>
<body>


    @include('layouts.doctorHeader')



    <div class="container">
		
		<div class="jumbotron">

			<h4 class="d-flex justify-content-center"><a href="" name=""> {{ $app->app_name }}</a></h4>
			<small class="d-flex justify-content-center">posted by {{$x}} at {{$app->created_at}}</small>
			<p class="pt-4 pb-0 mb-0"> {{$app->app_details}} </p>

		</div>
		
	</div>

	<div class="d-flex justify-content-center">
		
	</div>


    @include('layouts.footer')
</body>
</html>