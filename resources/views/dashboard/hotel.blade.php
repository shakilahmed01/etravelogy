@extends('layouts.app')
@section('content')
<div class="row tm-banner-row" id="tm-section-search">
<div class="container"><h4>Hotel</h4></div>
    <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
        <div class="form-row tm-search-form-row">
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                <label for="inputCity">City/Hotel/Resort/Area</label>
                <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
            </div>
            <div class="form-group tm-form-group tm-form-group-1">
                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                    <label for="inputRoom">How many rooms?</label>
                    <select name="room" class="form-control tm-select" id="inputRoom">
                        <option value="1" selected>1 Room</option>
                        <option value="2">2 Rooms</option>
                        <option value="3">3 Rooms</option>
                        <option value="4">4 Rooms</option>
                        <option value="5">5 Rooms</option>
                        <option value="6">6 Rooms</option>
                        <option value="7">7 Rooms</option>
                        <option value="8">8 Rooms</option>
                        <option value="9">9 Rooms</option>
                        <option value="10">10 Rooms</option>
                    </select>
                </div>
                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                    <label for="inputAdult">Adult</label>
                    <select name="adult" class="form-control tm-select" id="inputAdult">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                    <label for="inputChildren">Children</label>
                    <select name="children" class="form-control tm-select" id="inputChildren">
                      <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>
        </div> <!-- form-row -->
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
