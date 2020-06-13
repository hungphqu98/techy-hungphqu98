@extends('master.home')
@section('footer')

@section('main')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

     <!--contact map start-->
    <div class="contact_map mt-60">
       <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="map-area">
                      <div id="googleMap">
                      <div style="overflow:hidden;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.8050769367928!2d105.84378317738498!3d20.968165260728988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDU4JzA2LjEiTiAxMDXCsDUwJzM4LjciRQ!5e0!3m2!1svi!2s!4v1588499500426!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>contact us</h3>
                         <p></p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : 2 Lorem Rd,Ipsum, London</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:(+84) 373302668">(+84) 373302668</a></li>
                            <li><i class="fa fa-envelope-o"></i> whysoserious245@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Tell us your project</h3>
                        <form id="contact-form" method="POST"  action="">
                            @csrf
                            <p>
                               <label> Your Name (required)</label>
                                <input name="name" placeholder="Name *" type="text" required>
                            </p>
                            <p>
                               <label>  Your Email (required)</label>
                                <input name="email" placeholder="Email *" type="email" required>
                            </p>
                            <p>
                               <label>  Subject</label>
                                <input name="subject" placeholder="Subject *" type="text">
                            </p>
                            <div class="contact_textarea">
                                <label>  Your Message (required)</label>
                                <textarea placeholder="Message *" name="content"  class="form-control2" required ></textarea>
                            </div>
                            <button type="submit"> Send</button>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->

   <!--brand newsletter area start-->
   <div class="brand_newsletter_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div class="newsletter_inner" style="border:0">

                </div>
            </div>
        </div>
    </div>
</div>
    <!--brand area end-->

@stop()