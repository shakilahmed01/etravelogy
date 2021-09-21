@extends('layouts.app')
@section('content')
<style>
        .tm-banner3-bg {
            background: url(../Dashboard/assetsv1/img/banner3.jpg) center top no-repeat;
            min-height: 720px;
            position: relative;
}
</style>

    <section class="tm-banner">

        <div class="tm-container-outer tm-banner3-bg">
            <div class="container">

                <div class="row tm-banner-row tm-banner-row-header">
                    <div class="col-xs-12">
                        <div class="tm-banner-header">
                            <h1 class="text-uppercase tm-banner-title">Flight</h1>
                            <img src="{{asset('Dashboard/assetsv1/img/dots-3.png')}}" alt="Dots">
                            <p class="tm-banner-subtitle">We assist you to choose the best.</p>
                            <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>
                        </div>
                    </div>  <!-- col-xs-12 -->
                </div> <!-- row -->
<div class="row tm-banner-row" id="tm-section-search">

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
            <div class="form-group tm-form-group tm-form-group-1">

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
                <label for="inputCheckIn">Journey Date</label>
                <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
            </div>
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                <label for="inputCheckOut">Return Date</label>
                <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
            </div>
            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                <label for="btnSubmit">&nbsp;</label>
                <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Search</button>
            </div>
        </div>
    </form>

</div>
<div class="tm-banner-overlay"></div>
</div>  <!-- .container -->
</div>     <!-- .tm-container-outer -->
</section>
@endsection
