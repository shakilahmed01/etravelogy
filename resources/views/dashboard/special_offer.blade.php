@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Special Offers</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />

		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->

<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_8">
					<h3>Special offers</h3>
					<div class="block2">
						<img src="{{asset('Dashboard/assets/images/page3_img1.jpg')}}" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Barcelona</a></div>
							<p>Cras facilisis, nulla vel viverra auctor, leo gna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a celerisque eros convallis accumsan. </p>Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel
							<br>
							<a href="#" class="link1">LEARN MORE</a>
						</div>
					</div>
					<div class="block2">
						<img src="{{asset('Dashboard/assets/images/page3_img2.jpg')}}" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Moscow</a></div>
							<p>Cras facilisis, nulla vel viverra auctor, leo gna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a celerisque eros convallis accumsan. </p>Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel
							<br>
							<a href="#" class="link1">LEARN MORE</a>
						</div>
					</div>
					<div class="block2">
						<img src="{{asset('Dashboard/assets/images/page3_img3.jpg')}}" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Thailand</a></div>
							<p>Cras facilisis, nulla vel viverra auctor, leo gna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a celerisque eros convallis accumsan. </p>Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel
							<br>
							<a href="#" class="link1">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_3 prefix_1">
					<h5>CHOOse the country</h5>
					<ul class="list">
						<li><a href="#">Albania</a></li>
						<li><a href="#">American Samoa</a></li>
						<li><a href="#">Antarctica</a></li>
						<li><a href="#">Argentina</a></li>
						<li><a href="#">Armenia</a></li>
						<li><a href="#">Australia</a></li>
						<li><a href="#">Austria</a></li>
						<li><a href="#">Bahrain</a></li>
						<li><a href="#">Barbados</a></li>
						<li><a href="#">Belgium</a></li>
						<li><a href="#">Belize</a></li>
						<li><a href="#">Bermudas</a></li>
					</ul>
					<a href="#" class="link1">VIEW A<span class="low">ll</span></a>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->

	</body>
</html>
@endsection
