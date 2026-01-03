@extends('layouts.front.app')

@section('title', 'Contact Us')

@section('css')
    <style>
        
    </style>
@endsection

@section('content')

        <!-- page-title -->
        <div class="page-title" style="background: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('front_assets/images/section/6215.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color: #fff;">Contact Us</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" style="color: #fff;" href="/">Home</a>
                            </li>
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
                        <div class="contact-us-map align-items-center">
                            <div class="wrap-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3183.004533890155!2d174.934808!3d-37.0811989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d53360a39d775%3A0xaf7840246dac040f!2s70%20Tatariki%20Street%2C%20Rosehill%2C%20Auckland%202113%2C%20New%20Zealand!5e0!3m2!1sen!2sin!4v1743749051401!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="right">
                                <h4>Information</h4>
                                <div class="mb_20">
                                    <div class="text-title mb_8">Phone:</div>
                                    <p class="text-secondary">(+91) 9058800025</p>
                                </div>
                                <div class="mb_20">
                                    <div class="text-title mb_8">Email:</div>
                                    <p class="text-secondary">Sales: ksk@hexhive.in</p>
                                </div>
                                <div class="mb_20">
                                    <div class="text-title mb_8">Address:</div>
                                    <p class="text-secondary">183 A Rajguru Nagar , Ludhiana</p>
                                </div>
                                <div>
                                    <div class="text-title mb_8">Open Time:</div>
                                    <p class="mb_4 open-time">
                                        <span class="text-secondary">Mon - Sat:</span> 7:30am - 8:00pm
                                    </p>
                                    <p class="open-time">
                                        <span class="text-secondary">Sunday:</span> 9:00am - 5:00pm
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
                <form action="{{ route('front.contact.insert') }}" method="post" class="form-leave-comment">
                    @csrf
                    <input type="hidden" name="id" value="0">
                    <div class="wrap">
                        <div class="cols">
                            <fieldset>
                                <input type="text" placeholder="Your Name*" name="name" id="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset>
                                <input type="email" placeholder="Your Email*" name="email" id="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <div class="cols">
                            <fieldset>
                                <input type="text" placeholder="Your Phone Number*" name="phone" id="phone" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset>
                                <input type="text" placeholder="Your Subject*" name="subject" id="subject" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <fieldset>
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
