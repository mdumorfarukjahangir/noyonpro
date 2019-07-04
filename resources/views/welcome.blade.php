@extends('layouts.frontend.app')
@section('content')
        	<!-- =====================================
    	==== Start Header -->
    	<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="img/bg.jpg" data-stellar-background-ratio="0.5">
    		<div class="container">
    			<div class="row">
    				<div class="vertical-center full-width text-center caption">
    					<h2>I Love To Design</h2>
	    				<h1 class="cd-headline clip">
				            <span class="blc">I Am </span>
				            <span class="cd-words-wrapper">
				              <b class="is-visible">Alex Smith</b>
				              <b>a Developer</b>
				              <b>a Designer</b>
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
    			<div class="row">
    				<div class="col-lg-5">
    					<div class="hero-img mb-md50">
    						<img src="img/hero.jpg" alt="">
    					</div>
    				</div>
    				<div class="col-lg-7">
    					<div class="content">
							<h4 class="title title-left">I Am UI / UX Designer</h4>
    						<p>I am <span>Alex Smith</span> fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam Fusce Fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam Fusce Fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    						<p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time.</p>

    						<div class="social-icon">
    							<a href="#0">
    								<span class="icon"><i class="fab fa-facebook-f"></i></span>
    							</a>
    							<a href="#0">
    								<span class="icon"><i class="fab fa-twitter"></i></span>
    							</a>
    							<a href="#0">
    								<span class="icon"><i class="fab fa-instagram"></i></span>
    							</a>
    							<a href="#0">
    								<span class="icon"><i class="fab fa-behance"></i></span>
    							</a>
    							<a href="#0">
    								<span class="icon"><i class="fab fa-vimeo-v"></i></span>
    							</a>
    						</div>

    						<span class="buton text-center">
							  <a href="#0" front="Hire Me" back="&#xf1d8;" data-scroll-nav="6"></a>
							</span>
							<span class="buton buton-bord text-center">
							  <a href="CV.pdf" front="Download C.V" back="&#xf019;" download="CV.pdf"></a>
							</span>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- End Hero ====
    	======================================= -->

    	<!-- =====================================
    	==== Start Numbers -->
    	<div class="numbers bg-img" data-stellar-background-ratio="0.5" data-overlay-dark="8" data-background="img/b3.jpg">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-3 col-md-6">
    					<div class="item mb-md50">
    						<span class="icon icon-happy"></span>
    						<h2 class="count">340</h2>
    						<p>Happy Customers</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6">
    					<div class="item mb-md50">
    						<span class="icon icon-layers"></span>
    						<h2 class="count">950</h2>
    						<p>Projects Complated</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6">
    					<div class="item mb-sm50">
    						<span class="icon icon-download"></span>
    						<h2 class="count">520</h2>
    						<p>Files Downloaded</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6">
    					<div class="item">
    						<span class="icon icon-pencil"></span>
    						<h2 class="count">6350</h2>
    						<p>Lines Of Code</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- End Numbers ====
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
						<span data-filter='.brand'>Brand</span>
						<span data-filter='.web'>Design</span>
						<span data-filter='.graphic'>Graphic</span>
					</div>

					<!-- gallery -->
					<div class="gallery full-width">

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items graphic">
							<div class="item-img">
								<img src="img/portfolio/1.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Design . Motion</h6>
										<h5>Crearive Design</h5>
									</div>
									<a href="img/portfolio/1.jpg" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items web">
							<div class="item-img">
								<img src="img/portfolio/2.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Design . Motion</h6>
										<h5>Crearive Design</h5>
									</div>
									<a href="img/portfolio/2.jpg" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items graphic">
							<div class="item-img">
								<img src="img/portfolio/3.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Design . Motion</h6>
										<h5>Crearive Design</h5>
									</div>
									<a href="img/portfolio/3.jpg" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items web">
							<div class="item-img">
								<img src="img/portfolio/4.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Design . Motion</h6>
										<h5>Crearive Design</h5>
									</div>
									<a href="img/portfolio/4.jpg" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items brand">
							<div class="item-img">
								<img src="img/portfolio/5.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Design . Motion</h6>
										<h5>Crearive Design</h5>
									</div>
									<a href="img/portfolio/5.jpg" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items brand">
							<div class="item-img">
								<img src="img/portfolio/6.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Design . Motion</h6>
										<h5>Crearive Design</h5>
									</div>
									<a href="img/portfolio/6.jpg" class="link">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>

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
                                        <a href="#0">
                                            <img src="{{asset('storage/app/public/uploads/post/'.$post->image)}}" alt="">
                                        </a>
                                        @foreach ($categories as $category)
                                        <a href="#0" class="tag">{{ $category->name }}</a>
                                        @endforeach

                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="#0">{{ $post->title }}</a>
                                        </h3>
                                    <p>{!! $post->body !!}</p>
                                        <div class="info">
                                            <span class="more">
                                                <a href="#0">Read More</a>
                                            </span>
                                            <span class="by">
                                                <a href="#0">Author - {{ $post->user->name }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

    				</div>

    			</div>
    		</div>
    	</section>
    	<!-- End Blog ====
    	======================================= -->
@endsection
