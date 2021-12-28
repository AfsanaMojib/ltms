<!DOCTYPE HTML>
<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Landscape Tree Management System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="{{url('website/js/skel.min.js')}}"></script>
		<script src="{{url('website/js/skel-panels.min.js')}}"></script>
		<script src="{{url('website/js/init.js')}}"></script>
		
			<link rel="stylesheet" href="{{url('website/css/skel-noscript.css')}}" />
			<link rel="stylesheet" href="{{url('website/css/style.css')}}" />
			<link rel="stylesheet" href="{{url('website/css/style-desktop.css')}}" />
	
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
		
@include('website.fixed.header')


	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		

@yield('main')


	<!-- /Main -->

	<!-- Footer -->
		

@include('website.fixed.footer')

	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<section>
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</section>
			</div>
		</div>

	</body>
</html>