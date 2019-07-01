<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'noyonpro') }}</title>
<!-- Metas -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="keywords" content="describe your website keyword" />
<meta name="description" content="describe your website type" />
 

<!-- Title  -->
<title>noyonpro</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.ico')}}" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css')}}" />

<!-- Core Style Css -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />

</head>
<body>
@include('layouts.frontend.partial.nav')
@yield('content')
@include('layouts.frontend.partial.footer')

        <!-- jQuery -->
		<script src="{{ asset('assets/frontend/js/jquery-3.0.0.min.js')}}"></script>
		<script src="{{ asset('assets/frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>

		<!-- popper.min -->
		<script src="{{ asset('assets/frontend/js/popper.min.js')}}"></script>

	  	<!-- bootstrap -->
		<script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>

		<!-- scrollIt -->
		<script src="{{ asset('assets/frontend/js/scrollIt.min.js')}}"></script>

		<!-- animated.headline -->
		<script src="{{ asset('assets/frontend/js/animated.headline.js')}}"></script>

		<!-- jquery.waypoints.min -->
		<script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>

		<!-- jquery.counterup.min -->
		<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>

		<!-- owl carousel -->
		<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>

		<!-- jquery.magnific-popup js -->
		<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>

		<!-- stellar js -->
		<script src="{{ asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>

      	<!-- validator js -->
      	<script src="{{ asset('assets/frontend/js/validator.js')}}"></script>

      	<!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js')}}"></script>