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
<link rel="shortcut icon" href="{{ asset('assets/frontend/favicon.ico')}}" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">

<!-- Plugins -->

<link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css')}}" />

<!-- Core Style Css -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />
<link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


</head>
<body>
@include('layouts.frontend.partial.nav')
@yield('content')
@include('layouts.frontend.partial.footer')

