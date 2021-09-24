@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="success">{{ $single_ticket->destination }}
      <small></small>
    </h1>

    <!-- Portfolio Item Row -->


    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="/Dashboard/assetsv1/img/{{$single_ticket->image}}" height="500px" width="700px" alt="">
      </div>

      <div class="col-md-4">

         <h3 class="my-3" name="hotel_name" value="{{ $single_ticket->hotel_name }}">{{ $single_ticket->hotel_name }}</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3 class="my-3">Hotel Details</h3>
        <!-- <ul>
          <h4 >Room<li>{{$single_ticket->room}}</li></h4>

          <h4>Adults<li>{{$single_ticket->adult}}</li></h4>

          <h4>Child<li>{{$single_ticket->children}}</li></h4>

          <h4>Price<li>{{$single_ticket->price}}</li></h4>
          <h4>Time<li>{{$single_ticket->checkin}} to {{$single_ticket->checkout}} </li></h4>

        </ul> -->
        <form method="get" action="{{route('hotel_search')}}">
    <div class="form-group">
        <div class="form-checkbox">
            <label for="roundtrip">
                <input type="radio" id="roundtrip" name="book-type" value="single">
                <span></span>Single
            </label>
            <label for="one-way">
                <input type="radio" id="one-way" name="book-type" value="couple">
                <span></span>Couple
            </label>
            <label for="multi-city">
                <input type="radio" id="multi-city" name="book-type" value="family">
                <span></span>Family
            </label>
        </div>
    </div>
    <div class="row">

    </div>

        <div class="col-md-5">
            <div class="form-group">
                <span style="color:blue;font-weight:bold">Adults (18+)</span>
                <select class="form-control" name="adult">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>

                </select>
                <span class="select-arrow"></span>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <span style="color:blue;font-weight:bold">Children (0-17)</span>
                <select class="form-control" name="children">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <span class="select-arrow"></span>
            </div>
        </div>


        <div class="col-md-5">
            <div class="form-group">
                <span style="color:blue;font-weight:bold">Room class</span>
                <select class="form-control" name="room_type">
                    <option value="Single">Single</option>
                    <option value="Delax">Delax</option>
                    <option value="Super Delax">Super Delax</option>
                </select>
                <span class="select-arrow"></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-btn">
                <button class="btn btn-primary" data-type="submit">Check availablity</button>
            </div>
        </div>

</form>
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
