@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                        
                    
                    
                    <div class="col-md-12 col-sm-12">
                        <div class="card">

                        <h4>Add Release Details::</h4>

                         </div>
                         <div class="card">

                          <h4>Rented By:</h4>
                                   
                                   @foreach($rented_by as $amb_rented_by)
                            <div><strong>Your Name:-{{ $amb_rented_by->full_name }}</strong></div>
                            <div><strong>Your Contact No:-{{ $amb_rented_by->contact }}</strong></div>
                            <div><strong>Your Email:-{{ $amb_rented_by->email }}</strong></div>

                                @endforeach

                            <h4>Rent Details and Location</h4>

                                @foreach($rent_number as $rent_info)

                            <div><strong> Region:- {{ $rent_info->region }}</strong></div>
                            <div><strong> City:- {{ $rent_info->city }} </strong></div>
                            <div><strong> Area:- {{ $rent_info->area }} </strong></div>
                            <div><strong> Ambulance NO:- {{ $rent_info->ambulance_no }} </strong></div>
                            <div><strong> Driver Contact:- {{ $rent_info->driver_contact }} </strong></div>
                            <div><strong> Your Full Address:- {{ $rent_info->full_address }} </strong></div>
                            <div><strong> Payment Method:- {{ $rent_info->payment_method }} </strong></div>

                           <div><strong> Paid Amount:- {{ $rent_info->total_paid_amount }} </strong></div>  

                            <div style="padding-top: 25px;">
                              
                              <form action="{{ route('rent_release_form') }}">

                                                  @csrf
            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="add_id" name="rent_no" value="{{ $rent_info->rent_no }}" readonly>

            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="add_id" name="ambulance_no" value="{{ $rent_info->ambulance_no }}" readonly>

            <button  type="submit" name="submit" class="btn btn-dark" style="height: 60px;width: 280px;background: black;color: white;"> RELEASE </button>
          </form>

                            </div>
                          @endforeach

                         </div>
                         <div class="card" style="padding-top: 25px;padding-bottom: 25px;">
                              
                             <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>More Ambulances ?? <a href="{{ route('show_all_add') }}"><strong>Ambulances</strong></a></p>
                              </div> 
                         </div>
                         
                    </div>

               


               </div>
          </div>
     </section>


     @endsection
