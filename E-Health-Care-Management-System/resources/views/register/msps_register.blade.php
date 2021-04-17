<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	 <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/style.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/bootstrap.min.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/font-awesome.min.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/animate.css') }}">

     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/owl.carousel.css') }}">

     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/tooplate-style.css') }}">


</head>
<body body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <img src="{{asset('register_page/images/reg_page_blood_bag3.jpg')}}" class="img-responsive" alt="">
                         <img src="{{asset('register_page/images/ambulence_add_post.jpg')}}" class="img-responsive" alt="">
                    </div>
                    

                    <div class="col-md-8 col-sm-8">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" enctype="multipart/form-data" method="post">

                              @csrf

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Back To Home Page ?? <a href="/"><strong>Home</strong></a></p>
                                   <h4>Register For Free</h4>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" value="{{old('fname')}}" placeholder="Full Name">

                                        @error('fname')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="User Name">User Name</label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" value="{{old('user_name')}}" placeholder="User Name">
                                        @error('user_name')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Your Email">
                                        @error('email')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="{{old('date')}}" class="form-control">
                                        @error('date')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <div class="col-md-6 col-sm-6">

                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control"  id="phone" name="phone" value="{{old('phone')}}" placeholder="Phone">

                                        @error('phone')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="User Name">National Id No.</label>
                                        <input type="text" class="form-control" id="nid" name="nid" value="{{old('nid')}}" placeholder="Nid No:">
                                        @error('nid')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>


                                   <div class="col-md-12 col-sm-12">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Set Password">
                                        @error('password')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   
                                   <div class="col-md-12 col-sm-12">
                                        <label for="confirm password">Confirm Your Password</label>
                                        <input type="password" class="form-control" id="cpassword" name="cpassword" value="{{old('cpassword')}}" placeholder="Confirm Your Password">
                                        @error('cpassword')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>


                                   
                                   <div class="col-md-12 col-sm-12">
                                         
                                        
                                        <label for="select">Select Gender</label>
                                        <select name="gender" class="form-control">
                                             <option value=""></option>

                                             <option value="male" {{ old('gender') == "male" ? 'selected' : '' }}>Male</option>

                                             <option value="female" {{ old('gender') == "female" ? 'selected' : '' }}>Female</option>

                                             <option value="other" {{ old('gender') == "other" ? 'selected' : '' }}>Other</option>
                                             
                                        </select>

                                        @error('gender')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <div class="col-md-12 col-sm-12">

                                        <label for="select">Blood Type</label>
                                        <select name="blood_type" class="form-control">
                                             <option value=""></option>

                                             <option value="A+" {{ old('blood_type') == "A+" ? 'selected' : '' }}>A+</option>

                                             <option value="B+" {{ old('blood_type') == "B+" ? 'selected' : '' }}>B+</option>

                                             <option value="AB+" {{ old('blood_type') == "AB+" ? 'selected' : '' }}>AB+</option>

                                             <option value="O+" {{ old('blood_type') == "O+" ? 'selected' : '' }}>O+</option>
                                             
                                        </select>

                                        @error('blood_type')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                   

                                       <div class="col-md-12 col-sm-12">
                                        <label for="myfile">Upload Your Photo</label>
                                       <input type="file" class="form-control" id="image" name="image">

                                        @error('image')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                        </div>
                                       


                                   <div class="col-md-6 col-sm-6" style="padding-bottom: 40px;padding-top: 25px;">

                                   	<button type="submit" class="form-control" id="cf-submit" name="submit">Sign UP</button>

                                   </div>

                                   <div class="col-md-6 col-sm-6" style="padding-bottom: 40px;padding-top: 25px;">

                                        <p>Allready Have An Account??<a href="{{ route('view_login') }}"><strong>Login</strong></a></p>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>
      


<!-- SCRIPTS -->

     <script type="text/javascript" src="{{ asset('register_page/js/jquery.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/jquery.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/bootstrap.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/jquery.sticky.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/jquery.stellar.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/wow.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/smoothscroll.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/owl.carousel.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('register_page/js/custom.js') }}"></script>
</body>
</html>