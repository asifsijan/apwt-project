@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                        @foreach($all_details as $details)
                    <div class="col-md-6 col-sm-6">

                      <div>
                         <img style="height: 150px;" src="{{asset('/ambulance_post_photos')}}/{{$details['ambulance_photo']}}" class="img-responsive" class="img-responsive" alt="">
                    </div>

                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h4>{{ $details->type2 }}</h4>
                              </div>
                         <div class="card">

                            <div><strong>{{ $details->details }}</strong></div>
                            <div><strong> Type: {{ $details->type1 }}</strong></div>
                            <div><strong> Contact: {{ $details->phone }} </strong></div>
                            <div> <strong> Rete(Per Kilometer) : {{ $details->rate_per_km }} Taka </strong></div>

                         </div>

                         </div>
                    @endforeach

                

              <div class="col-md-6 col-sm-6">

                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>More Ambulances ?? <a href="{{ route('show_all_add') }}"><strong>Ambulances</strong></a></p>
                                   <h4>Enter Your Address</h4>
                              </div>
                         <div class="card">

                         @foreach($msps_dash as $user_info)
                         
                <div class="card" style="padding-bottom: 50px" >
                              
                    <form method="post" action="{{route('next_task')}}">

                        @csrf

                                   <div class="form-group" >

                                        <label for="full_name">Full Name </label>
                                        <input type="tel" class="form-control"  id="fname" name="fname" value="{{ $user_info->full_name }}" readonly>

                                        @error('fname')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>


                                   <div class="form-group" >

                                        <label for="Email">Email </label>
                                        <input type="tel" class="form-control"  id="email" name="email" value="{{ $user_info->email }}" readonly>

                                        @error('email')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>


                                   <div class="form-group" >

                                        <label for="Email">Phone </label>
                                        <input type="tel" class="form-control"  id="phone" name="phone" value="{{ $user_info->contact }}" readonly>

                                        @error('phone')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>

                              
                                   <div class="form-group">
                                         
                                        
                                        <label for="select">Region</label>
                                        <select name="region" class="form-control">
                                             <option value=""></option>

                                             <option value="Dhaka" {{ old('region') == "Dhaka" ? 'selected' : '' }}>Dhaka</option>

                                             <option value="Chattogram" {{ old('region') == "Chattogram" ? 'selected' : '' }}>Chattogram</option>

                                             <option value="Khulna" {{ old('region') == "Khulna" ? 'selected' : '' }}>Khulna</option>

                                             <option value="Barishal" {{ old('region') == "Barishal" ? 'selected' : '' }}>Barishal</option>

                                             <option value="Mymensingh" {{ old('region') == "Mymensingh" ? 'selected' : '' }}>Mymensingh</option>

                                             <option value="Rajshahi" {{ old('region') == "Rajshahi" ? 'selected' : '' }}>Rajshahi</option>


                                              <option value="Rangpur" {{ old('region') == "Rangpur" ? 'selected' : '' }}>Rangpur</option>

                                              <option value="Sylhet" {{ old('region') == "Sylhet" ? 'selected' : '' }}>Sylhet</option>
                                             
                                        </select>

                                        @error('region')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>


                                   <div class="form-group">
                                         
                                        
                                        <label for="select">City</label>
                                        <select name="city" class="form-control">
                                             <option value=""></option>

                                             <option value="Dhaka-North" {{ old('city') == "Dhaka-North" ? 'selected' : '' }}>Dhaka-North</option>

                                             <option value="Dhaka-South" {{ old('city') == "Dhaka-South" ? 'selected' : '' }}>Dhaka-South</option>

                                             <option value="Faridpur" {{ old('city') == "Faridpur" ? 'selected' : '' }}>Faridpur</option>

                                             <option value="Gazipur" {{ old('city') == "Gazipur" ? 'selected' : '' }}>Gazipur</option>

                                             <option value="Gopalganj" {{ old('city') == "Gopalganj" ? 'selected' : '' }}>Gopalganj</option>

                                             <option value="Kishoreganj" {{ old('city') == "Kishoreganj" ? 'selected' : '' }}>Kishoreganj</option>


                                              <option value="Madaripur" {{ old('city') == "Madaripur" ? 'selected' : '' }}>Madaripur</option>

                                              <option value="Manikganj-Town" {{ old('city') == "Manikganj-Town" ? 'selected' : '' }}>Manikganj-Town</option>
                                             
                                        </select>

                                        @error('city')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>

                                   <div class="form-group">
                                         
                                        
                                        <label for="select">Area</label>
                                        <select name="area" class="form-control">
                                             <option value=""></option>

                                             <option value="Azimpur" {{ old('area') == "Azimpur" ? 'selected' : '' }}>Azimpur</option>

                                             <option value="Bangavaban" {{ old('area') == "Bangavaban" ? 'selected' : '' }}>Bangavaban</option>

                                             <option value="Bangshal" {{ old('area') == "Bangshal" ? 'selected' : '' }}>Bangshal</option>

                                             <option value="Basabo" {{ old('area') == "Basabo" ? 'selected' : '' }}>Basabo</option>

                                             <option value="Bijoy Nagar" {{ old('area') == "Bijoy Nagar" ? 'selected' : '' }}>Bijoy Nagar</option>

                                             <option value="Chawk Bazar" {{ old('area') == "Chawk Bazar" ? 'selected' : '' }}>Chawk Bazar</option>


                                              <option value="Demra" {{ old('area') == "Demra" ? 'selected' : '' }}>Demra</option>

                                              <option value="Dhanmondi" {{ old('area') == "Dhanmondi" ? 'selected' : '' }}>Dhanmondi</option>
                                             
                                        </select>

                                        @error('area')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>

                                
                                   
                                   <div class="form-group" >
                                        
                                        <label for="address">Full Address</label>
                                        <textarea class="form-control" rows="8" id="full_address" name="full_address" placeholder="Write Full Address Properly">{{old('full_address')}}</textarea>

                                        @error('full_address')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                              
                                   </div>


                                   <div class="form-group">
                                         
                                        
                                      <label for="select"> <h4> Select Payment Method </h4></label>
                                        <select name="payment_method" class="form-control">
                                             <option value=""></option>

                                          
                                             <option value="Cash ON" {{ old('payment_method') == "Cash ON" ? 'selected' : '' }}><strong>CASH ON</strong> </option>

                                             
                                        </select>

                                        @error('payment_method')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror

                                   </div>



                


               <!------info ------->
  
               @foreach($all_details as $details)
            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="add_id" name="add_id" value="{{ $details->ambulance_id }}" readonly>

            @endforeach

            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="user_id" name="user_id" value="{{ $user_info->id }}" readonly>


              <div style="padding-top: 50px;padding-bottom: 50px;">
            <button  type="submit" name="submit" class="btn btn-dark" style="height: 60px;width: 350px;background: black;color: white;"> CONFIRM </button>

            </div>

          </form>
                         </div>
                         
                    </div>

                    @endforeach

               


               </div>
          </div>
     </section>


     @endsection
