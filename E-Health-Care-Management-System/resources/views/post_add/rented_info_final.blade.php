@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                        @foreach($rent_info_final as $rent_info)
                    
                    
                    <div class="col-md-12 col-sm-12">
                        <div class="card">

                        <h4>You Successfully Rented An Ambulance!!</h4>
                        <h4>Rent Info:</h4>

                         </div>
                         <div class="card">
                                   
                                   @foreach($msps_dash as $user_info)
                            <div><strong>Your Name:-{{ $user_info->full_name }}</strong></div>
                            <div><strong>Your Contact No:-{{ $user_info->contact }}</strong></div>
                            <div><strong>Your Email:-{{ $user_info->email }}</strong></div>

                                @endforeach

                            <div><strong> Region:- {{ $rent_info->region }}</strong></div>
                            <div><strong> City:- {{ $rent_info->city }} </strong></div>
                            <div><strong> Area:- {{ $rent_info->area }} </strong></div>
                            <div><strong> Ambulance NO:- {{ $rent_info->ambulance_no }} </strong></div>
                            <div><strong> Driver Contact:- {{ $rent_info->driver_contact }} </strong></div>
                            <div><strong> Your Full Address:- {{ $rent_info->full_address }} </strong></div>
                            <div><strong> Payment Method:- {{ $rent_info->payment_method }} </strong></div>

                                @foreach($all_details as $details)
                            <div> <strong> Rete(Per Kilometer) :- {{ $details->rate_per_km }} Taka </strong></div>
                                 @endforeach

                            <div style="padding-top: 25px;"><strong>We are Trying To Reach You As Soon As Possible</strong></div>
                         </div>
                         <div class="card" style="padding-top: 25px;padding-bottom: 25px;">
                              
                             <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>More Ambulances ?? <a href="{{ route('show_all_add') }}"><strong>Ambulances</strong></a></p>
                              </div> 
                         </div>
                         
                    </div>

               @endforeach


               </div>
          </div>
     </section>


     @endsection
