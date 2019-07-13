<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'noyonpro') }}</title>
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
<link rel="stylesheet" href="{{ asset('assets/frontend/css/singlepostcss.css')}}" />
</head>
<body>

<!--/ Nav Star /-->
<nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
          {{-- <a class="navbar-brand js-scroll" href="#page-top">BlasterUp</a> --}}
          <a href="{{ route('home')}}"> <img class="logo"  src={{ url('/assets/logo.png')}} alt=""></a>
        <a href="{{ route('home')}}"><img class="logonew" height="40px" width="60px" src={{ url('/assets/logonew.png')}} alt=""></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @foreach ($categories as $category)
                <li class="nav-item">
                <a class="nav-link postmenu" href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a>
                      </li>
                @endforeach

            </ul>
          </div>
        </div>
      </nav>
  <!--/ Nav End /-->

    <!--/ Intro Skew Star /-->
    <div class="intro intro-single route bg-image" style="background-image:url({{asset('assets/frontend/overlay-bg.jpg')}})" >
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
          <div class="table-cell">

          </div>
        </div>
      </div>
      <!--/ Intro Skew End /-->

  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <div class="container row">
                    {{-- @foreach ($posts as $post) --}}
                    @forelse($posts as $post)

                     <div class="pitem1 col-md-5">
                             <div class="post-img">
                                 <a href="#0">
                                     <img height="50%" width="50%" src="{{ url('/uploads/post/'.$post->image)}}" alt="">
                                 </a>
                                 @foreach ($post->tags as $tag)
                                 <a class="poststag" href="#0" class="tag">{{ $tag->name }}</a>
                                 @endforeach

                             </div>
                             <div class="content">
                                 <h3>
                                 <a  class="poststitle" href="{{ route('post.details',$post->slug)}}">{{ str_limit($post->title, 25)}}</a>
                                 </h3>
                                 {!! str_limit($post->body, 30) !!}

                             </div>
                         </div>

                         @empty
                         <div class="col-lg-12 col-md-12">
                             <div class="card h-100">
                                 <div class="single-post post-style-1 p-2">
                                 <strong>No Post Found :(</strong>
                                 </div><!-- single-post -->
                             </div><!-- card -->
                         </div><!-- col-lg-4 col-md-6 -->
                     @endforelse
            </div>

            </div>
        <div class="col-md-4">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Search</h5>
            <div class="sidebar-content">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Recent Post</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">

                    @foreach ($resentposts as $resentpost)

                    <li>
                    <a href="#">{{ $resentpost->title}}</a>
                    </li>

                    @endforeach

              </ul>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Archives</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">September, 2017.</a>
                </li>
                <li>
                  <a href="#">April, 2017.</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Tags</h5>
            <div class="sidebar-content">
              <ul>
                  @foreach ($tags as $tag)
                  <li>
                    <a href="{{ route('tag.posts',$tag->slug)}}">{{ $tag->name }}</a>
                      </li>
                  @endforeach

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  @include('layouts.frontend.partial.footer')



