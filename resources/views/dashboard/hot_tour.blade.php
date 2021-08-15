@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hot Tours</title>
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
				<div class="banners">
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img1.jpg')}}" alt="">
							<div class="label">
								<div class="title">NEW ZEALAND</div>
								<div class="price">from<span>$ 1.200</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img2.jpg')}}" alt="">
							<div class="label">
								<div class="title">GOA</div>
								<div class="price">from<span>$ 1.500</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img3.jpg')}}" alt="">
							<div class="label">
								<div class="title">FRANCE</div>
								<div class="price">from<span>$ 1.600</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img4.jpg')}}" alt="">
							<div class="label">
								<div class="title">CANADA</div>
								<div class="price">from<span>$ 2000</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img5.jpg')}}" alt="">
							<div class="label">
								<div class="title">TURKEY</div>
								<div class="price">from<span>$ 1.500</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img6.jpg')}}" alt="">
							<div class="label">
								<div class="title">EGYPT</div>
								<div class="price">from<span>$ 1.500</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img7.jpg')}}" alt="">
							<div class="label">
								<div class="title">JAPAN</div>
								<div class="price">from<span>$ 1000</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="{{asset('Dashboard/assets/images/page2_img8.jpg')}}" alt="">
							<div class="label">
								<div class="title">BRAZIL</div>
								<div class="price">from<span>$ 1.700</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->

	</body>
</html>
@endsection
