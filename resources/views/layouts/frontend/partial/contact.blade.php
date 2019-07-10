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
