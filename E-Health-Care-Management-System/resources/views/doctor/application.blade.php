<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')
</head>

<body>


    @include('layouts.doctorHeader')




    <div class="container">
    	<div class="d-flex justify-content-center">
		<p style="">Latest Blogs</p>

	</div>

		@foreach ($applications as $application)
		<div class="jumbotron">

			<h4 class="d-flex justify-content-center"><a href="/doctor/application/{{ $application->req_id }}" name=""> {{ $application->title }}</a></h4>
			<small class="d-flex justify-content-center">applied by patient {{$application->patient_id}} at {{$application->created_at}}</small>
			<p class="pt-4 pb-0 mb-0"> {{$application->details}} </p>

		</div>
		@endforeach
	</div>




    @include('layouts.footer')
</body>
</html>