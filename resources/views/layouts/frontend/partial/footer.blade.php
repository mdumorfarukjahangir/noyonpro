<!-- =====================================
    	==== Start Contact -->
    	<section class="contact section-padding bg-img1" data-overlay-dark="8" data-background="img/b5.jpg" data-scroll-index="6">
    		<div class="container">
    			<div class="row">

                    <!-- Section-Head -->
                    @if (!Route::is('post.details'))
                    @include('layouts.frontend.partial.contact')
                    @endif


                    <div class="info full-width">
                        @foreach ($ads as $address)
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="item mb-sm50">
                                        <span class="icon icon-mobile"></span>
                                        <div class="cont">
                                            <h6>Phone</h6>
                                        <p>+88{{ $address->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item mb-sm50">
                                        <span class="icon icon-envelope"></span>
                                        <div class="cont">
                                            <h6>Email</h6>
                                            <p>{{ $address->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <span class="icon icon-map-pin"></span>
                                        <div class="cont">
                                            <h6>Address</h6>
                                            <p>{{ $address->address}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

    			</div>
    		</div>
    	</section>
    	<!-- End Contact ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Footer -->
    	<footer class="footer">
    		<p>Copyright &copy; noyonpro - 2019  All Rights Reserved.</p>
    	</footer>
    	<!-- End Footer ==== -->

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}','Error',{
                    closeButton:true,
                    progressBar:true,
                });
            @endforeach
        @endif
    </script>
      <script src="{{ asset('assets/frontend/js/script_single.js')}}"></script>

</body>
</html>
