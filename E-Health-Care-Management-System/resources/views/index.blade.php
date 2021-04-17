<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E Heath Care</title>

   
	
    <!-- css -->
    <link href="{{asset('front_page/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front_page/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('front_page/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
	<link href="{{asset('front_page/css/nivo-lightbox.css')}}" rel="stylesheet" />

	<link href="{{asset('front_page/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />

	<link href="{{asset('front_page/css/owl.carousel.css')}}" rel="stylesheet" media="screen" />

    <link href="{{asset('front_page/css/owl.theme.css')}}" rel="stylesheet" media="screen" />

	<link href="{{asset('front_page/css/animate.css')}}" rel="stylesheet" />

    <link href="{{asset('front_page/css/style.css')}}" rel="stylesheet">

	<!-- boxed bg -->
	
	<!-- template skin -->
	<link id="t-colors" href="{{asset('front_page/color/default.css')}}" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">24 Hour Service </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now +62 008 65 001</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    E-HEALTH CARE MANAGEMENT SYSTEM
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="">Service</a></li>
				<li><a href="#doctor">Doctors</a></li>
				<li><a href="{{route('view_login')}}">Login</a></li>
				
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Register</span>Register<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="">Doctor Subscription</a></li>
					<li><a href="{{route('register.msps_register')}}">Medical Service Provider</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">E-HEALTH CARE MANAGEMENT SYSTEM</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
						</ul>

						</div>
						</div>


					</div>
									
				</div>		
			</div>
		</div>		
    </section>

	
    
	<section id="partner" class="home-section paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our partner</h2>
					<p>Take charge of your health today with our specially designed health packages</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
           <div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{asset('front_page/img/dummy/partner-1.jpg')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{asset('front_page/img/dummy/partner-2.jpg')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{asset('front_page/img/dummy/partner-3.jpg')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{asset('front_page/img/dummy/partner-4.jpg')}}" alt="" /></a>
						</div>
					</div>
				</div>
            </div>
	</section>	

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About E HEALTH CARE</h5>
						<p>
						Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>E-Health Care center</h5>
						<p>
						Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> 24 Hour Service 
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medico.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2015 - Medico. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

	<!-- Core JavaScript Files -->
    <script src="{{asset('front_page/js/jquery.min.js')}}"></script>

    <script src="{{asset('front_page/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('front_page/js/jquery.easing.min.js')}}"></script>

	<script src="{{asset('front_page/js/wow.min.js')}}"></script>

	<script src="{{asset('front_page/js/jquery.scrollTo.js')}}"></script>

	<script src="{{asset('front_page/js/jquery.appear.js')}}"></script>

	<script src="{{asset('front_page/js/stellar.js')}}"></script>

	<script src="{{asset('front_page/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>

	<script src="{{asset('front_page/js/owl.carousel.min.js')}}"></script>

	<script src="{{asset('front_page/js/nivo-lightbox.min.js')}}"></script>

    <script src="{{asset('front_page/js/custom.js')}}"></script>


</body>

</html>
