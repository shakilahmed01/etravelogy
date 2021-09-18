@extends('layouts.app')
@section('content')
<div class="row tm-banner-row" id="tm-section-search">
<div class="container"><h4>Bus</h4></div>
    <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
        <div class="form-row tm-search-form-row">
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                <label for="inputCity">From</label>
                <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
            </div>
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                <label for="inputCity">To</label>
                <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
            </div>

        <div class="form-row tm-search-form-row">

            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                <label for="inputCheckIn">Check In Date</label>
                <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
            </div>
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                <label for="inputCheckOut">Check Out Date</label>
                <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
            </div>
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                <label for="btnSubmit">&nbsp;</label>
                <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Search</button>
            </div>
        </div>
    </form>

</div>
@endsection
