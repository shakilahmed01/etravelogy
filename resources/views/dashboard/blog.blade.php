@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blog</title>
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
				<div class="grid_7">
					<h3>Recent Posts</h3>
					<div class="blog">
						<time datetime="2014-10-01">15<span>Feb</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">uamnibh Edet Mertolo numi</a></div>Posted by
							<a href="#">Admin</a>
						</div>
						<div class="clear"></div>
						<img src="{{asset('Dashboard/assets/images/page4_img1.jpg')}}" alt="" class="img_inner">
						<p>Cras facilisis, nulla vel viverra auctor, leo gna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a celerisque eros convallis accumsan. </p>Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh.
						<br>
						<a href="#" class="link1">LEARN MORE</a>
					</div>
					<div class="blog">
						<time datetime="2014-10-01">17<span>Feb</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">ERh EMertlo numolo</a></div>Posted by
							<a href="#">Admin</a>
						</div>
						<div class="clear"></div>
						<img src="{{asset('Dashboard/assets/images/page4_img2.jpg')}}" alt="" class="img_inner">
						<p>Cras facilisis, nulla vel viverra auctor, leo gna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a celerisque eros convallis accumsan. </p>Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh.
						<br>
						<a href="#" class="link1">LEARN MORE</a>
					</div>
				</div>
				<div class="grid_3 prefix_1">
					<h3 class="head1">CATEGORIES</h3>
					<ul class="list">
						<li><a href="#">Suspendisse massa mi </a></li>
						<li><a href="#">Porttitor at velit id </a></li>
						<li><a href="#">Congue adipiscing </a></li>
						<li><a href="#">Vestibulum vitae porta </a></li>
						<li><a href="#">Vivamus ac sodales </a></li>
						<li><a href="#">Massa quis adipiscing </a></li>
						<li><a href="#">Phasellus hendrerit </a></li>
						<li><a href="#">Libero in sapien </a></li>
						<li><a href="#">Dignissim vel imperdiet </a></li>
					</ul>
					<h3 class="head1">ARchives</h3>
					<ul class="list">
						<li><a href="#">November 2013</a></li>
						<li><a href="#">October 2013</a></li>
						<li><a href="#">September 2013</a></li>
						<li><a href="#">August 2013</a></li>
						<li><a href="#">July 2013</a></li>
					</ul>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->

	</body>
</html>
@endsection
