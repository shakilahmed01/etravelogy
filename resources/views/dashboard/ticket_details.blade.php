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
        <img class="img-fluid" src="/Dashboard/assetsv1/img/{{$single_ticket->image}}" height="500px" width="700px" alt="">
      </div>

      <div class="col-md-4">

        <h3 class="my-3" name="hotel_name" value="{{ $single_ticket->hotel_name }}">{{ $single_ticket->hotel_name }}</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3 class="my-3">Hotel Details</h3>
        <ul>
          <h4 >Room<li>{{$single_ticket->room}}</li></h4>

          <h4>Adults<li>{{$single_ticket->adult}}</li></h4>

          <h4>Child<li>{{$single_ticket->children}}</li></h4>

          <h4>Price<li>{{$single_ticket->price}}</li></h4>
          <h4>Time<li>{{$single_ticket->checkin}} to {{$single_ticket->checkout}} </li></h4>

        </ul>

      </div>

    </div>



<form id="bookingForm"  method="post" action="{{route('booking')}}">
  @csrf

      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
          <label for="Name">Name</label>
          <input name="name" type="text" class="form-control" id="Name" placeholder="Your Name">
      </div>

      <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
          <label for="Country">Country/Area</label>
          <input name="country" type="text" class="form-control" id="Country" placeholder="Country/Area">
      </div>
  <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">

    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
        <label for="email">Email</label>
        <input name="email" type="text" class="form-control" id="email" placeholder="Email" data-constraints="@NotEmpty @Required @Email">
    </div>

    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
        <label for="hotel">Hotel</label>
        <input name="hotel" type="text" class="form-control" id="hotel" placeholder="Hotel" >
    </div>
  </div>

  <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
      <label for="inputCheckIn">Check In Date</label>
      <input name="checkin" type="date" class="form-control" id="inputCheckIn" placeholder="Check In">
  </div>

  <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
      <label for="inputCheckout">Check-out</label>
      <input name="checkout" type="date" class="form-control" id="inputCheckout" placeholder="Check Out">
  </div>


  <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
    <em>Comfort</em>
    <select name="comfort" class="form-control tm-select" data-class="tmSelect tmSelect2" data-constraints="">
      <option>Cheap</option>
      <option>Standard</option>
      <option>Luxary</option>

    </select>
  </div>
  <br>
  <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
    <em>Adults</em>
    <select name="adults" class="form-control tm-select" data-class="tmSelect tmSelect2" data-constraints="">
      <option>1</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>

    <em>Rooms</em>
    <select name="room" class="form-control tm-select" data-class="tmSelect tmSelect2" data-constraints="">
      <option>1</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>

    <em>Children</em>
    <select name="childrens" class="form-control tm-select" data-class="tmSelect tmSelect2" data-constraints="">
      <option>0</option>
      <option>0</option>
      <option>1</option>
      <option>2</option>
    </select>
  </div>


  <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1 ">
    <label for="message">Message</label>
    <textarea name="message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
  </div>
  <button  class="btn btn-primary" data-type="submit">Reserve</button>
</form>
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
