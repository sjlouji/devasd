@extends('welcome')

@section('content')
<div class="title-section dark-bg module grey-bg">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12 col-padding-y">
                <div class="title-section-text">
                    <h1>Contact Us</h1>
                </div>
            </div><!-- Top Columns /-->
            
        </div>
    </div><!-- Grid Container /-->
</div>
<!-- Title Section /-->

<div class="contact-page module">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-lg-6 col-md-6 col-padding-y">
                <div class="comment-form">
                    <h2>Feel free to write to us</h2>
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" placeholder="Name*" value="" required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <input type="email" class="form-control" placeholder="Email*" value="" required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" placeholder="Contact*" value="" required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>

                            <div class="col-md-12 Textarea-btn">
                                <textarea class="form-control mb-3" id="exampleFormControlTextarea1*" rows="5" placeholder="Message...."></textarea>
                                <button class="btn btn-secondary btn-padding btn-dark-animated" type="submit">Send Message</button>
                            </div>
                            
                        </div><!-- Form Row /-->
                    </form>
                </div>
            </div><!-- Columns /-->
            
            <div class="col-sm-12 col-lg-3 col-md-4 offset-lg-2 offset-md-1 col-padding-y">
                
                <div class="contact-address">
                    <i class="fas fa-mobile-alt"></i>
                    <h6>phone</h6>
                    <p>+1 000 234 5678</p>
                    <p>+92 345 345 8844</p>
                </div>
                
                <div class="contact-address">
                    <i class="fas fa-map-marker-alt"></i>
                    <h6>address</h6>
                    <p>Webful Creations Street United States</p>
                </div>
                
                <div class="contact-address">
                    <i class="far fa-envelope"></i>
                    <h6>Email</h6>
                    <a href="https://www.webfulcreations.com/">ateeq@yoursite.com</a>
                    <a href="https://www.webfulcreations.com/">support@webfulcreations.com</a>
                </div>
            
            </div><!-- Columns /-->
            
        </div>
    </div><!-- Grid Container /-->
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12 col-padding-y">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12330.695150419098!2d-104.8778931128081!3d39.40888565113789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd61cb55fc2964aec!2sOutlets+at+Castle+Rock!5e0!3m2!1sen!2s!4v1460940151482" height="270" allowfullscreen></iframe>
            </div><!-- map ends here -->
        </div><!-- Columns /-->
    </div>
</div>
<!-- Contact Page /-->
@endsection