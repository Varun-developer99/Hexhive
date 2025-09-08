@extends('layouts.front.app')

@section('title', 'Contact Us')

@section('css')

@endsection

@section('content')
   

      <!-- page-title -->
        <div class="page-title" style="background-image: url('{{ asset('front_assets/images/section/page-title.jpg') }}');">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Contact Us</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="{{ url('/') }}">Homepage</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            {{-- <li>
                                <a class="link" href="#">Pages</a>
                            </li> --}}
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Contact Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- Store locations -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-us-map">
                            <div class="wrap-map">
                                {{-- <div id="map-contact" class="map-contact" data-map-zoom="16" data-map-scroll="true"></div> --}}
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13700.64876910842!2d75.8153216!3d30.85413375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1757307612432!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="right">
                                <h4>Information</h4>
                                <div class="mb_20">
                                    <div class="text-title mb_8">Phone:</div>
                                    <p class="text-secondary">+1 666 234 8888</p>
                                </div>
                                <div class="mb_20">
                                    <div class="text-title mb_8">Email:</div>
                                    <p class="text-secondary">themesflat@gmail.com</p>
                                </div>
                                <div class="mb_20">
                                    <div class="text-title mb_8">Address:</div>
                                    <p class="text-secondary">2163 Phillips Gap Rd, West Jefferson, North Carolina, United States</p>
                                </div>
                                <div>
                                    <div class="text-title mb_8">Open Time:</div>
                                    <p class="mb_4 open-time">
                                        <span class="text-secondary">Mon - Sat:</span> 7:30am - 8:00pm PST
                                    </p>
                                    <p class="open-time">
                                        <span class="text-secondary">Sunday:</span> 9:00am - 5:00pm PST
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Store locations -->

        <!-- Get In Touch -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="heading-section text-center">
                    <h3 class="heading">Get In Touch</h3>
                    <p class="subheading">Use the form below to get in touch with the sales team</p>
                </div>
                <form id="contactform" action="./contact/contact-process.php" method="post" class="form-leave-comment">
                    <div class="wrap">
                        <div class="cols">
                            <fieldset class="">
                                <input class="" type="text" placeholder="Your Name*" name="name" id="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="">
                                <input class="" type="email" placeholder="Your Email*" name="email" id="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <fieldset class="">
                            <textarea name="message" id="message" rows="4" placeholder="Your Message*" tabindex="2" aria-required="true" required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="button-submit send-wrap">
                        <button class="tf-btn btn-fill" type="submit">
                            <span class="text text-button">Send message</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- /Get In Touch -->

@endsection
