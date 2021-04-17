@extends('layout.main')

@section('main_content')

      <!-- Register -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                        @foreach($all_details as $details)
                    <div class="col-md-6 col-sm-6">
                         <img src="{{asset('/ambulance_post_photos')}}/{{$details['ambulance_photo']}}" class="img-responsive" class="img-responsive" alt="">
                    </div>
                    

                    <div class="col-md-6 col-sm-6">

                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <p>More Ambulances ?? <a href="{{ route('show_all_add') }}"><strong>Ambulances</strong></a></p>
                                   <h4>{{ $details->type2 }}</h4>
                              </div>
                         <div class="card">

                            <div><strong>{{ $details->details }}</strong></div>
                            <div><strong> Type: {{ $details->type1 }}</strong></div>
                            <div><strong> Contact: {{ $details->phone }} </strong></div>
                            <div> <strong> Rete(Per Kilometer) : {{ $details->rate_per_km }} Taka </strong></div>

                         </div>
                         <div class="card" style="padding-top: 90px;padding-bottom: 100px;">
                              
                              <form action="{{ route('give_address') }}">

                                                  @csrf
            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: white;" type="text" id="add_id" name="add_id" value="{{ $details->ambulance_id }}" readonly>

            <button  type="submit" name="submit" class="btn btn-dark" style="height: 60px;width: 350px;background: black;color: white;"> RENT NOW </button>
          </form>
                         </div>
                         
                    </div>

               @endforeach


               </div>
          </div>
     </section>


     @endsection
