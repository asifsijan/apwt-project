<!DOCTYPE html>
<html>
<head>
	<title></title>
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

     <link rel="stylesheet" type="text/css" href="{{asset('register_page/css/profile_page.css')}}">

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

     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p style="font-size: 15px;"><strong>WELCOME<a href="{{ route('view_msps_profile') }}"> @foreach($msps_dash as $p) {{$p->full_name}} @endforeach </a></strong></p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">E-<i class="fa fa-h-square"></i>ealth Care Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{ route('view_msps_dashboard') }}" class="smoothScroll">Home</a></li>
                         <li><a href="{{ route('rent_release_page') }}" class="smoothScroll">Release Add</a></li>
                         <li><a href="{{route('show_all_add')}}" class="smoothScroll">Ambulances</a></li>
                         <li><a href="" class="smoothScroll">Contact</a></li>
                         <li><div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">More
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li ><a style="font-size: 15px;" href="{{route('view_msps_profile')}}">Profile</a></li>
      <li ><a style="font-size: 15px;" href="{{route('view_settings_page')}}">Settings</a></li>
      <li><a style="font-size: 15px;" href="{{route('logout')}}">Log Out</a> </li>
    </ul>
  </div></li>
                         <li class="appointment-btn"><a href="{{route('view_add_form')}}">Post Add For Ambulence</a></li>
                    </ul>
               </div>

          </div>

     </section>

     @yield('main_content')


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" style="background-color: lightgrey;">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="{{asset('register_page/images/news-image.jpg')}}" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Amazing Technology</h5></a>
                                        <span>March 08, 2021</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="{{asset('register_page/images/news-image.jpg')}}" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>New Healing Process</h5></a>
                                        <span>February 20, 2021</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>24 Hour Service <span>24/7</span></p>
                                   
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2021 E-Health Care Company

                                   </p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>



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