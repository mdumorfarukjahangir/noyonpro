@extends('layouts.frontend.app')
@section('content')
        	<!-- =====================================
        ==== Start Header -->



        <header class="header valign bg-img" style="background: url('{{ asset('/uploads/intro/'.$intro->image)}}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;" >
    		<div class="container">
    			<div class="row">
    				<div class="vertical-center full-width text-center caption">

    					<h2>

                             {{ $intro->name }}
                        </h2>
	    				<h1 class="cd-headline clip">
				            <span class="blc">I Am </span>
				            <span class="cd-words-wrapper">
				              <b class="is-visible">Md. Noyon Mia</b>
                              @foreach ($ims as $im)
                              <b>{{ $im->name }}</b>
                              @endforeach
				            </span>
		          		</h1>
    				</div>
    			</div>
    		</div>

    		<div class="arrow">
				<a href="#" data-scroll-nav="1">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
    	</header>

    	<!-- End Header ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Hero -->
    	<section class="hero section-padding" data-scroll-index="1">
    		<div class="container">
                    @foreach ($abouts as $about)
    			<div class="row">
    				<div class="col-lg-5">
    					<div class="hero-img mb-md50">
    						<img src="{{url('/uploads/about/'.$about->image)}}" alt="">
    					</div>
    				</div>
    				<div class="col-lg-7">

    					<div class="content">
							<h4 class="title title-left">{{ $about->title }}</h4>
                        <p>{!! $about->content !!}</p>

    						<div class="social-icon">
                            <a href="{{ $about->link1 }}">
    								<span class="icon"><i class="fab fa-facebook-f"></i></span>
    							</a>
    							<a href="{{ $about->link2 }}">
    								<span class="icon"><i class="fab fa-twitter"></i></span>
    							</a>
    							<a href="{{ $about->link3 }}">
    								<span class="icon"><i class="fab fa-instagram"></i></span>
    							</a>
    							<a href="{{ $about->link4 }}">
    								<span class="icon"><i class="fab fa-linkedin"></i></span>
    							</a>
    						</div>

    						<span class="buton text-center">
							  <a href="#0" front="Hire Me" back="&#xf1d8;" data-scroll-nav="6"></a>
							</span>
							<span class="buton buton-bord text-center">
							  <a href="{{url('/uploads/about/'.$about->cv)}}" front="Download C.V" back="&#xf019;" download="Cv"></a>
							</span>
                        </div>

    				</div>
                </div>
                @endforeach
    		</div>
    	</section>
    	<!-- End Hero ====
    	======================================= -->

            	<!-- =====================================
    	==== Start Portfolio -->
    	<section class="portfolio section-padding" data-scroll-index="3">
			<div class="container">
				<div class="row">

    				<!-- Section-Head -->
    				<div class="section-head full-width">
    					<h4 class="title">My Portfolio</h4>
    				</div>

    			</div>

				<div class="row justify-content-center">

					<!-- filter links -->
					<div class="filtering text-center mb-50">
						<span data-filter='*' class="active">All</span>
                        @foreach ($brands as $brand)
                        <span data-filter='.{{ "brand".$brand->id}}'>{{ $brand->name}}</span>
                        @endforeach
					</div>

					<!-- gallery -->
					<div class="gallery full-width">

                        @foreach ($portfolios as $portfolio)
						<!-- gallery item -->
						<div class="col-sm-6 col-md-6 col-lg-4 items {{"brand".$portfolio->brand_id}}">
							<div class="item-img">
								<img  src="{{url('/uploads/item/'.$portfolio->image)}}"  alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h5>{{ $portfolio->heading}}</h5>
										<h6>{{ $portfolio->content}}</h6>
									</div>
									<a href="{{url('/uploads/item/'.$portfolio->image)}}" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
                        </div>
                        @endforeach


						<div class="clearfix"></div>
					</div>

					<div class="col-md-12 text-center">
						<span class="buton">
						  <a href="#0" front="View All" back="&#xf06e;"></a>
						</span>
					</div>

				</div>
			</div>
		</section>
    	<!-- End Portfolio ====
    	======================================= -->

        	<!-- =====================================
    	==== Start Numbers -->
    	<div class="numbers bg-img1" data-stellar-background-ratio="0.5" data-overlay-dark="8" data-background="img/b3.jpg">
    		<div class="container">

                <div class="row">
                        @foreach ($countdowns as $countdown)
                        <div class="col-lg-3 col-md-4">
                            <div class="item mb-md50">
                                <span class="{{ $countdown->name }}"></span>
                                <h2 class="count">{{ $countdown->number }}</h2>
                                <p>{{ $countdown->title }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>


    		</div>
    	</div>
    	<!-- End Numbers ====
    	======================================= -->

    	<!-- =====================================
    	==== Start Blog -->
    	<section class="blog section-padding" data-scroll-index="5">
    		<div class="container">
    			<div class="row">

    				<div class="section-head full-width">
    					<h4 class="title">My Blog</h4>

    				</div>

    				<div class="owl-carousel owl-theme">
                            @foreach ($posts as $post)
                            <div class="pitem">
                                    <div class="post-img">
                                        <a href="{{ route('post.details',$post->slug)}}">
                                            <img src="{{ url('/uploads/post/'.$post->image)}}" alt="">
                                        </a>
                                        @foreach ($post->categories as $category)
                                        <a href="{{ route('category.posts',$category->slug) }}" class="tag">{{ $category->name }}</a>
                                        @endforeach

                                    </div>
                                    <div class="content">
                                        <h3>
                                        <a href="{{ route('post.details',$post->slug)}}">{{ str_limit($post->title, 25)}}</a>
                                        </h3>
                                        {!! str_limit($post->body, 30) !!}
                                        <div class="info">
                                            <span class="more">
                                                <a href="{{ route('post.details',$post->slug)}}">Read More</a>
                                            </span>
                                            <span class="by">
                                                <a href="#0">Author - {{ $post->user->name }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                    <div class="section-head full-width">
    					<a class="allposts" href="{{ route('post.index')}}"><h6>All Posts</h6></a>

    				</div>


    			</div>
    		</div>
    	</section>
    	<!-- End Blog ====
    	======================================= -->
@endsection
