@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{ $single_ticket->destination }}
      <small></small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?s=1024x768" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">{{ $single_ticket->hotel_name }}</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3 class="my-3">Hotel Details</h3>
        <ul>
          <h4>Room<li>{{$single_ticket->room}}</li></h4>
          <h4>Adults<li>{{$single_ticket->adult}}</li></h4>
          <h4>Child<li>{{$single_ticket->children}}</li></h4>
          <h4>Price<li>{{$single_ticket->price}}</li></h4>
          <h4>Time<li>{{$single_ticket->checkin}} to {{$single_ticket->checkout}} </li></h4>
        </ul>
        <button class="btn btn-primary">Reserve</button>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Photos</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?s=1024x768" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?s=1024x768" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?s=1024x768" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?s=1024x768" alt="">
            </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
