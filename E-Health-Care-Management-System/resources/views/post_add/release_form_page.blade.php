@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                        
              <div class="col-md-12 col-sm-12">

                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>More Ambulances ?? <a href="{{ route('show_all_add') }}"><strong>Ambulances</strong></a></p>
                                   <h4>Enter Paid Amount</h4>
                              </div>
                         <div class="card">

                <div class="card" style="padding-bottom: 50px" >
                              
                    <form method="post" action="{{ route('edit_for_release') }}">

                        @csrf

                                   <div class="form-group" >

                                        <label for="full_name">Rent Order No: </label>
                                        <input type="text" class="form-control"  id="rent_no" name="rent_no" value="{{ $rent_noo }}" readonly>

                                        @error('rent_no')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>


                                   <div class="form-group" >

                                        <label for="Email">Ambulance No </label>
                                        <input type="text" class="form-control"  id="ambulance_no" name="ambulance_no" value="{{ $amb_noo }}" readonly>

                                        @error('ambulance_no')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>


                                   <div class="form-group" >

                                        <label for="paid_amount">Paid Amount </label>
                                        <input type="text" class="form-control"  id="paid_amount" name="paid_amount" value="{{ old('paid_amount') }}" >

                                        @error('paid_amount')
                                        <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                   </div>

                              
                                   
              <div style="padding-top: 50px;padding-bottom: 50px;">
            <button  type="submit" name="submit" class="btn btn-dark" style="height: 60px;width: 350px;background: black;color: white;"> CONFIRM RELEASE </button>

            </div>

                            </form>
                         </div>
                         
                    </div>

               </div>
          </div>
     </section>


     @endsection
