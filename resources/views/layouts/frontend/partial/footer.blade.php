<!-- =====================================
    	==== Start Contact -->
    	<section class="contact section-padding bg-img" data-overlay-dark="8" data-background="img/b5.jpg" data-scroll-index="6">
    		<div class="container">
    			<div class="row">

    				<!-- Section-Head -->
    				<div class="section-head full-width mb-50">
    					<h4 class="title">Get In Touch</h4>
                    </div>
                    <div class="form full-width">
                            <form action="{{ route('msg.store') }}" method="post">
                                    @csrf
                                    <div class="controls">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="form_name" type="text" name="name" placeholder="Name *"  ">
                                                    </div>
                                                </div>

                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="form_email" type="email" name="email" placeholder="Email *" ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea id="form_message" name="message" placeholder="Your Message *" rows="4"  "></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <span class="buton buton-lg">
                                                            <button type="submit" front="Send Message" back="&#xf35d;"></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                            </form>
                    </div>

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
    		<p>Copyright &copy; And Made With Love All Rights Reserved.</p>
    	</footer>
    	<!-- End Footer ====
    	======================================= -->


</body>
</html>
