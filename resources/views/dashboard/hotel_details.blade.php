@extends('layouts.app')
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <h2>etravelogy Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('indexv1')}}"><i class="zmdi zmdi-home"></i> etravelogy</a></li>
                        <li class="breadcrumb-item">Booking List</li>
                    </ul>


            </div>
        </div>
      </div>



<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<!-- <div class="container"> -->
  <div class="row">
    <div class="container">

    <!-- <div class="col-sm-8 col-md-8 col-lg-8"> -->
        <div class="card">
            <div class="header">
                <h2><strong>List</strong>Hotel</h2>
                <ul class="header-dropdown">
                    <!-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li> -->
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="table-responsive social_media_table">
                <table class="table table-hover c_table">
                    <thead>
                        <tr>

                          <th>Image</th>

                          <th>Hotel Name</th>
                          <th>room Type</th>
                          <th>Staying Time</th>
                          <th>Adults</th>
                          <th>Children</th>



                          <th>Price</th>

                            <!-- <th>Created At</th> -->
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                      @if($t->isNotEmpty())
                      @foreach($t as $o)


                        <tr>

                            <td><img class="img-fluid" src="/Dashboard/assetsv1/img/{{$o->image}}" height="20000px" width="220000px"  alt="">
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>


                            <td><span class="badge badge-info">{{ $o->hotel_name }}</span>
                              <br>
                                <span style="color:blue;font-weight:bold">Most popular facilaties</span>
                                <ul>
                                  <li>free wifi</li>
                                  <li>Airport shuttle</li>
                                  <li> Free parking</li>
                                  <li>Restaurant</li>
                                  <li>Family rooms</li>
                                  <li>Tea/Coffee Maker in All Rooms</li>
                                  <li>Bar</li>
                                </ul>
                            </td>

                            <td><span class="badge badge-info">{{ $o->room_type }}</span>
                              <br>
                                <span style="color:blue;font-weight:bold">Types</span>
                                <ul>
                                  <li>Single</li>
                                  <li>Delax</li>
                                  <li>Super Delax</li>

                                </ul>
                            </td>
                            <td><span class="badge badge-info">{{ $o->staying_time }}</span>
                              <br>
                              <span style="color:blue;font-weight:bold">Different hours you may choose</span>
                              <ul>
                                <li>12hrs</li>
                                <li>24hrs</li>
                                <li>72hrs</li>
                                <li>4 days</li>
                                <li>7 days</li>
                                <li>10 days</li>

                              </ul>
                            </td>
                            <td><span class="badge badge-info">{{ $o->adult }}</span>
                              <br>
                                <span style="color:blue;font-weight:bold">You must have</span>
                                <ul>
                                  <li>18+</li>


                                </ul>
                            </td>
                            <td><span class="badge badge-info">{{ $o->children }}</span>
                              <br>
                                <span style="color:blue;font-weight:bold">You must have</span>
                                <ul>
                                  <li>0 to 12 </li>


                                </ul>
                            </td>
                            <td><span class="badge badge-info">{{ $o->price }}bdt</span>
                              <br>
                                <span style="color:blue;font-weight:bold">This content vary with users needs</span>

                            </td>




                            <td>

                                <a href="{{ url('book') }}/{{ $o->id }}" class=" btn-sm btn-success">Booking</a>
                            </td>
                          </tr>

                      @endforeach
                      @else
                          <div>
                              <h2>No posts found</h2>
                          </div>
                      @endif



                    </tbody>
                </table>

            </div>
        </div>
    <!-- </div> -->


  </div>

<!-- </div> -->
</section>
<!-- END -->

<!-- END::HERE WE PUT OUR CONTENT -->



    </div>
</section>

@endsection
