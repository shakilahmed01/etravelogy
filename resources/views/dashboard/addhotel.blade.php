@extends('layouts.app')
@section('content')


<form id="donate_form" method="POST" action="#">
    @csrf
  <div class="col">
    <div class="col-auto">
      <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="hotel_name" required autocomplete="hotel_name" autofocus placeholder="Hotel Name">
    </div>
    <div class="col-auto">
      <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="room" required autocomplete="room" autofocus placeholder="Last Name">
    </div>
    <div class="col-auto">
      <input  type="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
    </div>
    <div class="col-auto">
      <input type="numeric" class="form-control @error('amount') is-invalid @enderror" name="amount" required autocomplete="amount" autofocus placeholder="50$">
    </div>
    <button class="btn btn-primary" id="btn-submit" type="submit" >Submit</button>
  </div>
</form>
@endsection
