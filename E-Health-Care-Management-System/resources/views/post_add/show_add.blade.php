@extends('layout.main')

@section('main_content')

          <div class="container">
               <div >

                    <div>
                         <h5><strong>Search Ambulance Here</strong></h5>
                    </div>

                    <form  action="{{route('search_add')}}" >

                         @csrf
                         <div class="input-group">
                              <input type="search" placeholder="Search Ambulance Here" name="search" class="form-control" value="{{session('search_data')}}">
                              <span class="input-group-btn">
                                   <button type="submit" class="btn btn-info">Search</button>
                              </span>
                              
                         </div>
                    </form>

                    <div style="padding: 30px;" class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h3 class="wow fadeInUp" data-wow-delay="0.1s">Ambulances</h3>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12">

                    @foreach($add_list as $adds)

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img style="height: 230px;" src="{{asset('/ambulance_post_photos')}}/{{$adds['ambulance_photo']}}" class="img-responsive" alt="">

                                   <div class="team-info">
                                         <p style="font-size: 20px;color: black;"><strong> {{ $adds->type2 }}</strong></p>

                                        <p style="font-size: 15px;color: black;">{{ $adds->type1 }}</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> {{ $adds->phone }}</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="">Message</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><form method="post" action="{{ route('add_details') }}">

                                                  @csrf
            <input style="width:0px;height:0px;border: none;text-indent: -99em;background: black;" type="text" id="add_id" name="add_id" value="{{ $adds->ambulance_id }}" readonly>

            <button  type="submit" name="submit" class="btn btn-dark" style="height: 40px;width: 200px;background: black;color: white;"> DETAILS </button>
          </form></li>
                                             
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    @endforeach

                    </div>

                    {{ $add_list->links() }}
                    
               </div>
          </div>
     
@endsection