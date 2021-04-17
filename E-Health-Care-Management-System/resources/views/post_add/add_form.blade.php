
@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <img src="{{asset('register_page/images/ambulence_add_post.jpg')}}" class="img-responsive" alt="">
                    </div>
                    

                    <div class="col-md-8 col-sm-8">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" enctype="multipart/form-data" method="post">

                              @csrf

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Back To Home Page ?? <a href="{{ route('view_msps_dashboard') }}"><strong>Home</strong></a></p>
                                   <h4>Add Post For Ambulance Service</h4>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                                   <div class="col-md-12 col-sm-12">
                                         
                                        
                                        <label for="select">Select Inner Air System(AC/Non AC)</label>
                                        <select name="inner_air" class="form-control">
                                             <option value=""></option>

                                             <option value="Ac" {{ old('inner_air') == "Ac" ? 'selected' : '' }}>AC</option>

                                             <option value="Non Ac" {{ old('inner_air') == "Non Ac" ? 'selected' : '' }}>Non AC</option>

                                             
                                        </select>

                                        @error('inner_air')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>


                                   <div class="col-md-12 col-sm-12">
                                         
                                        
                                        <label for="select">Select Ambulance Type</label>
                                        <select name="ambulance_type" class="form-control">
                                             <option value=""></option>

                                             <option value="Collective Ambulance" {{ old('ambulance_type') == "Collective Ambulance" ? 'selected' : '' }}>Collective Ambulance</option>

                                             <option value="Individual Ambulance" {{ old('ambulance_type') == "Individual Ambulance" ? 'selected' : '' }}>Individual Ambulance</option>

                                             <option value="Icu Ambulance" {{ old('ambulance_type') == "Icu Ambulance" ? 'selected' : '' }}>ICU Ambulance</option>

                                             <option value="Life Support Ambulance" {{ old('ambulance_type') == "Life Support Ambulance" ? 'selected' : '' }}>Life Support Ambulance</option>

                                             <option value="Mortuary Ambulance" {{ old('ambulance_type') == "Mortuary Ambulance" ? 'selected' : '' }}>Mortuary Ambulance</option>

                                             <option value="Neonatal Ambulance" {{ old('ambulance_type') == "Neonatal Ambulance" ? 'selected' : '' }}>Neonatal Ambulance</option>


                                              <option value="Air Ambulance" {{ old('ambulance_type') == "Air Ambulance" ? 'selected' : '' }}>Air Ambulance</option>
                                             
                                        </select>

                                        @error('ambulance_type')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="myfile">Upload A Ambulance Photo</label>
                                       <input type="file" class="form-control" id="image" name="image">

                                        @error('image')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>
                                       


                                   <div class="col-md-12 col-sm-12">
                                        <label for="User Name">Rate Per Kilometer (Taka/=)</label>
                                        <input type="text" class="form-control" id="rate" name="rate" value="{{old('rate')}}" placeholder="Rate (Per Kilometer)">
                                        @error('rate')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>

                                   <div class="col-md-12 col-sm-12">

                                        <label for="telephone">Phone </label>
                                        <input type="tel" class="form-control"  id="phone" name="phone" value="{{old('phone')}}" placeholder="Phone">

                                        @error('phone')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>


                                   
                                   <div class="col-md-12 col-sm-12">
                                        
                                        <label for="Features">Ambulance Features</label>
                                        <textarea class="form-control" rows="8" id="features" name="features" placeholder="Write All Features Of The Ambulance">{{old('features')}}</textarea>

                                        @error('features')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                              
                                   </div>

                              
                                   
                                   <div class="col-md-6 col-sm-6">

                                   	<button type="submit" class="form-control" id="cf-submit" name="submit">POST</button>

                                   </div>

                                   <div class="col-md-6 col-sm-6">

                                        <p>Back To Home?? <a href="{{ route('view_msps_dashboard') }}"><strong>Home</strong></a></p>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


     @endsection



