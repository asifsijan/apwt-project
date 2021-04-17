<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('login_page/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login_page/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form  p-l-55 p-r-55 p-t-178" method="post">

					@csrf
					
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100  m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" value="{{old('username')}}" placeholder="Username">
						<span class="focus-input100"></span>


						@error('username')
                          <div class="alert-danger">{{ $message }}</div>
                        @enderror

                        @if(Session::has('error_msg'))
                           <div class="alert-danger">{{session('error_msg')}}</div>
                        @endif
					</div>

					<div class="wrap-input100 " data-validate = "Please enter password">
						<input class="input100" type="password" name="password" value="{{old('password')}}" placeholder="Password">
						<span class="focus-input100"></span>
						@error('password')
                          <div class="alert-danger">{{ $message }}</div>
                        @enderror

                        @if(Session::has('error_msg'))
                           <div class="alert-danger">{{session('error_msg')}}</div>
                        @endif
					</div>


					<div class="text-left p-t-13 p-b-23">
						
							<p><strong>Remember Me </strong> <input type="checkbox" name="check" value="check"></p>
						
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="{{ route('register.msps_register') }}" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{asset('login_page/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_page/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_page/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login_page/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_page/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_page/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login_page/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_page/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_page/js/main.js')}}"></script>

</body>
</html>