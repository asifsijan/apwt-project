@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                        
                    
                    
                    <div class="col-md-12 col-sm-12">
                        <div class="card">

                        <h4>Release Rented Ambulances From Here</h4>
                        <h4>Unpaid Rented Ambulances:</h4>

                         </div>
                         <div class="card">

                                   
                              <table class="table">
                                <thead class="thead-dark">
                                   <tr>
                                     <th scope="col">Rent NO</th>
                                     <th scope="col">Region </th>
                                     <th scope="col">City</th>
                                     <th scope="col">Area</th>
                                     <th scope="col">Full Address</th>
                                     <th scope="col">Ambulance No</th>
                                     <th scope="col">Driver Contact</th>
                                     <th scope="col">Payment Method</th>
                                     <th scope="col">Total Paid Amount</th>
                                  </tr>
                               </thead>

                                <tbody>
                                  @foreach($rent_release as $release)
                                 <tr>
                                    <td>{{ $release->rent_no }}</td>
                                    <td>{{ $release->region }}</td>
                                    <td>{{ $release->city }}</td>
                                    <td>{{ $release->area }}</td>
                                    <td>{{ $release->full_address }}</td>
                                    <td>{{ $release->ambulance_no }}</td>
                                    <td>{{ $release->driver_contact }}</td>
                                    <td>{{ $release->payment_method }}</td>
                                    <td>{{ $release->total_paid_amount }}</td>
                                    <td>
                                      
                                      <form action="{{ route('rent_release_details') }}">

                                                  @csrf
            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="add_id" name="rent_no" value="{{ $release->rent_no }}" readonly>

            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="add_id" name="rented_by" value="{{ $release->rented_by }}" readonly>

            <button  type="submit" name="submit" class="btn btn-dark" style="height: 60px;width: 280px;background: black;color: white;"> DETAILS </button>
          </form>
                                    </td>
                                  </tr>

                                  @endforeach
                               </tbody>
                           </table>

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
