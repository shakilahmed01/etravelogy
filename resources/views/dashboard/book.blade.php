@extends('layouts.app')
@section('content')
@include('dashboard.include.flash')
<div class="container">
  <h1 class="text bold">{{$single_ticket->destination}}</h1>
  <div class="row">
<div class="col-md-8">
  <img class="img-fluid" src="/Dashboard/assetsv1/img/{{$single_ticket->image}}" height="500px" width="700px" alt="">
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
</div>
<div class="col-md-4">
    <h1 class="text bold">{{$single_ticket->hotel_name}}</h1>
<form id="book_form" method="POST" action="{{route('hotelbook')}}">
    @csrf
  <div class="col">
    <span>Hotel Name</span>
    <div class="col-auto">
      <input type="text" class="form-control @error('hotel_name') is-invalid @enderror" value="{{$single_ticket->hotel_name}}" readonly name="hotel_name" required autocomplete="hotel_name" autofocus placeholder="Hotel Name">
    </div>
    <span>Adults</span>
    <div class="col-auto">
      <input type="text" class="form-control @error('adult') is-invalid @enderror" value="{{$single_ticket->adult}}" readonly name="adult" required autocomplete="hotel_name" autofocus placeholder="Hotel Name">
    </div>
    <span>Childs</span>
    <div class="col-auto">
      <input type="text" class="form-control @error('children') is-invalid @enderror" value="{{$single_ticket->children}}" readonly name="children" required autocomplete="hotel_name" autofocus placeholder="Hotel Name">
    </div>
    <span>Room Type</span>
    <div class="col-auto">
      <input type="text" class="form-control @error('room_type') is-invalid @enderror" value="{{$single_ticket->room_type}}" readonly name="room_type" required autocomplete="hotel_name" autofocus placeholder="Hotel Name">
    </div>
    <span>Price</span>
    <div class="col-auto">
      <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{$single_ticket->price}}" readonly name="price" required autocomplete="hotel_name" autofocus placeholder="Hotel Name">
    </div>
    <span>Name</span>
    <div class="col-auto">
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Your Name">
    </div>
    <span>Email</span>

    <div class="col-auto">
      <input  type="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
    </div>
    <span>Mobile Number</span>

    <div class="col-auto">
      <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" required autocomplete="mobile" autofocus placeholder="Mobile Number">
    </div>
    <span>Check In</span>

    <div class="col-auto">
      <input type="date" class="form-control @error('mobile') is-invalid @enderror" name="checkin" required autocomplete="checkin" autofocus placeholder="Check In">
    </div>
    <span>Check Out</span>

    <div class="col-auto">
      <input type="date" class="form-control @error('mobile') is-invalid @enderror" name="checkout" required autocomplete="checkout" autofocus placeholder="Check Out">
    </div>

    <br>
    <button class="btn btn-primary" id="btn-submit" type="submit" >Submit</button>
  </div>
</form>
</div>
</div>
</div>
@endsection
