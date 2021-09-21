@extends('layouts.app')
@section('content')
<style>
        .tm-banner2-bg {
            background: url(../Dashboard/assetsv1/img/banner2.jpg) center top no-repeat;
            min-height: 720px;
            position: relative;
}
</style>

    <section class="tm-banner">

        <div class="tm-container-outer tm-banner2-bg">
            <div class="container">

                <div class="row tm-banner-row tm-banner-row-header">
                    <div class="col-xs-12">
                        <div class="tm-banner-header">
                            <h1 class="text-uppercase tm-banner-title">Tour Package</h1>
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
                <label for="inputCity">Location</label>
                <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
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
