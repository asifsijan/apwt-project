@extends('layout.main')

@section('main_content')

<!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3 style="color: white;">LET'S MAKE LIFE EASIER</h3>
                                             <h1>POST FOR AMBULENCE SERVICE</h1>
                                             <a href="{{ route('view_add_form') }}" class="section-btn btn btn-default smoothScroll">Post Ambulance Here</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3 style="color: white;" >LET'S MAKE LIFE EASIER</h3>
                                             <h1>DONATE BLOOD TO SAVE LIVES</h1>
                                             <a href="{{route('view_settings_page')}}" class="section-btn btn btn-default btn-gray smoothScroll">Donate Blood</a>
                                        </div>
                                   </div>
                              </div>

                              
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome <a href="{{ route('view_msps_profile') }}"> @foreach($msps_dash as $p) {{$p->full_name}} @endforeach </a> to Our E-<i class="fa fa-h-square"></i>ealth Care Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="color: black;font-size: 20px;">Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.</p>
                                   <p style="color: black;font-size: 20px;">Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
                              </div>
                              
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                       <img src="{{asset('register_page/images/slider_blood_bag2.jpg')}}" class="img-responsive" alt="">

                    </div>

               </div>
          </div>
     </section>


@endsection