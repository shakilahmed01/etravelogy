<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>etravelogy</title>
<!--
Journey Template
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
                                  <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

      <div class="tm-main-content" id="top">
          <div class="tm-top-bar-bg"></div>
          <div class="tm-top-bar" id="">
              <div class="container">
                  <div class="row">
                      <nav class="navbar navbar-expand-lg narbar-light">
                          <a class="navbar-brand mr-auto" href="{{route('indexv1')}}">
                              <img src="{{asset('Dashboard/assetsv1/img/logo1.png')}}" alt="Site logo">
                              Etravelogy
                          </a>
                          <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                              <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                  <a class="nav-link " href="{{route('indexv1')}}">Home<span class="sr-only">(current)</span></a>
                              </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="{{route('tour')}}">Tour <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('flight')}}">Flight</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('hotel')}}">Hotel</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('bus')}}">Bus</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('visa')}}">Visa</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('login')}}">Log In</a>
                              </li>
                          </ul>
                      </div>
                  </nav>
              </div> <!-- row -->
          </div> <!-- container -->
      </div> <!-- .tm-top-bar -->
