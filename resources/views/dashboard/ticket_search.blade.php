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
                <h2><strong>List</strong> booking</h2>
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

                          <th>Destination</th>
                            <th>Image</th>
                            <th>Hotel Name</th>

                            <!-- <th>Created At</th> -->
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                      @if($t->isNotEmpty())
                      @foreach($t as $o)


                        <tr>

                            <td><span class="list-name"><h1>{{ $o->destination }}</h1></span>
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>
                            <td><img class="img-fluid" src="/Dashboard/assetsv1/img/{{$o->image}}" height="500px" width="700px"  alt="">
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>
                            <td><span class="list-name"><h1>{{ $o->hotel_name }}</h1></span>
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>







                            <td>

                                <a href="{{ url('details') }}/{{ $o->id }}" class=" btn-sm btn-primary bold" > Details</a>
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
