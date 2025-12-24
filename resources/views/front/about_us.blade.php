@extends('layouts.front.app')

@section('title', 'About Us')

@section('css')
    <style>
        .back-button {
            position: relative;
            display: inline-block;
            overflow: hidden;
        }

        .back-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgba(34, 202, 211, 1) 0%, rgba(0, 0, 0, .3982843137254902) 100%);
            /* always visible overlay */
            z-index: 2;
        }

        .back-button2::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgb(254 97 16 / 50%) 0%, rgba(0, 0, 0, .3982843137254902) 100%);
            z-index: 2;
        }

        .back-button3::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgb(248 167 0 / 62%) 0%, rgba(0, 0, 0, .3982843137254902) 100%);
            z-index: 2;
        }

        .back-button img {
            display: block;
            width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
        }

        .cls-content {
            z-index: 9;
        }


        .milestone-section {
            text-align: center;
            padding: 40px 20px;
        }

        .year-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .year-tabs li {
            padding: 8px 18px;
            border-radius: 20px;
            background: #f0f0f0;
            cursor: pointer;
            transition: 0.3s;
            font-weight: 500;
        }

        .year-tabs li.active {
            background: #0a3030;
            color: #fff;
        }

        .milestone-slider {
            margin-top: 20px;
        }

        .milestone-slide {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
        }

        .milestone-slide img {
            width: 100%;
            display: block;
            border-radius: 12px;
        }

        .slide-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            padding: 20px;
            color: #fff;
            text-align: left;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .slide-caption h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .slide-caption p {
            margin: 0;
            font-size: 16px;
            line-height: 1.4;
        }

        .milestone-slide {
            position: relative;
        }

        .milestone-slide img {
            width: 100%;
            display: block;
            border-radius: 12px;
        }

        /* Center bottom text */
        .slide-caption {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 15px 25px;
            color: #fff;
            text-align: center;
            border-radius: 10px;
        }

        .slide-caption h3 {
            font-size: 22px;
            margin: 0;
        }

        .slide-caption p {
            margin: 5px 0 0;
            font-size: 14px;
        }

        /* Move arrows inside the image */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            top: 50%;
            transform: translateY(-50%);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 18px;
        }

        .swiper-button-next {
            right: 15px;
        }

        .swiper-button-prev {
            left: 15px;
        }

        .milestone-section {
            text-align: center;
            padding: 30px 20px;
        }

        .year-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
            padding: 0;
            margin: 20px 0 30px;
        }

        .year-tabs li {
            padding: 8px 18px;
            border-radius: 20px;
            background: #f0f0f0;
            cursor: pointer;
            transition: 0.3s;
            font-weight: 500;
        }

        .year-tabs li.active {
            background: #0a3030;
            color: #fff;
        }

        .milestone-slider {
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            border-radius: 12px;
            overflow: hidden;
        }

        .swiper-slide {
            position: relative;
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* Caption bottom center */
        .slide-caption {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 25px;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            max-width: 80%;
        }

        .slide-caption h4 {
            margin: 0;
            font-size: 18px;
            font-weight: 400;
        }

        .slide-caption h3 {
            margin: 5px 0;
            font-size: 24px;
            font-weight: 600;
        }

        .slide-caption p {
            margin: 0;
            font-size: 14px;
            line-height: 1.4;
        }

        /* Arrows inside image */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            top: 50%;
            transform: translateY(-50%);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 18px;
        }

        .swiper-button-next {
            right: 15px;
        }

        .swiper-button-prev {
            left: 15px;
        }

        .tf-icon-box.style-2 img {
            width: unset;
        }

    </style>
@endsection

@section('content')
    <!-- #wrapper -->
    <div id="wrapper">




        <!-- page-title -->
        <div class="page-title" style="background-image: url({{ asset('front_assets/images/section/page-title.jpg') }})">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color:#fff;">About HEXHIVE</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="#" style="color:#fff;">At HEXHIVE, we carry forward a legacy of excellence built over four decades in the production. </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- about-us -->
        <section class="flat-spacing about-us-main pb_0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us-features wow fadeInLeft">
                            <img class="lazyload" data-src="{{ asset('front_assets/images/banner/about-us.jpg') }}" src="{{ asset('front_assets/images/banner/about-us.jpg') }}" alt="image-team">
                            {{-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                    src="https://player.vimeo.com/video/904084725?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                    title="Tynor Corporate Video 2022(1)">
                                </iframe></div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-us-content">
                            <h3 class="title wow fadeInUp">About HEXHIVE</h3>
                            <div class="widget-tabs style-3">
                                <ul class="widget-menu-tab wow fadeInUp">
                                    <li class="item-title active">
                                        <span class="inner text-button">Introduction</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner text-button">Our Mission </span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner text-button">Our Vision
                                        </span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner text-button">Our Values
                                        </span>
                                    </li>
                                </ul>
                                <div class="widget-content-tab wow fadeInUp">
                                    <div class="widget-content-inner active">
                                        <p>Building on a legacy of delivering premium-quality produce for over four decades, HEXHIVE has emerged as one of the most trusted and credible names in the industrial sector for the production, trade, and supply of organic honey and a diverse range of honey-based products.
                                        </p>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p>To deliver pure, natural, and ethically sourced honey products by combining decades of expertise with modern technology, while maintaining the highest standards of quality, hygiene, and sustainability—creating value for customers, beekeepers, and communities alike.
                                        </p>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p>To become a globally trusted honey brand that sets benchmarks in purity, innovation, and sustainable practices, while promoting healthy living and supporting the growth of responsible beekeeping across India and beyond.

                                        </p>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p>At Tynor NewZealand, transparency is key, with our policies and ethical standards creating an open environment that encourages 
                                            our workforce to surpass their limits while serving NewZealand customers with integrity. This culture fosters trust, empowers 
                                            employees for ongoing excellence, and drives us toward collective success in the NewZealand market through building lasting 
                                            relationships based on trust, quality, and exceptional service standards.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- <a href="#" class="tf-btn btn-fill wow fadeInUp"><span class="text text-button">Read More</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about-us -->

        <!-- Iconbox -->
        <section class="flat-spacing line-bottom-container">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2"
                    data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                    data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="icon-box"><span class="icon icon-return"></span></div>
                                <div class="content">
                                    <h6>14-Day Returns</h6>
                                    <p class="text-secondary">Risk-free shopping with easy returns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="icon-box"><span class="icon icon-shipping"></span></div>
                                <div class="content">
                                    <h6>Free Shipping</h6>
                                    <p class="text-secondary">No extra costs, just the price you see.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="icon-box"><span class="icon icon-headset"></span></div>
                                <div class="content">
                                    <h6>24/7 Support</h6>
                                    <p class="text-secondary">24/7 support, always here just for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="icon-box"><span class="icon icon-sealCheck"></span></div>
                                <div class="content">
                                    <h6>Member Discounts</h6>
                                    <p class="text-secondary">Special prices for our loyal customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
         <!-- Our Teams -->
        <section class="flat-spacing">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Meet Our Teams</h3>
                    <p class="subheading text-secondary-2">Discover exceptional experiences through testimonials from our satisfied customers.</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-latest" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-item hover-image wow fadeInUp" data-wow-delay="0s">
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset('front_assets/images/team/team-1.jpg') }}" src="{{ asset('front_assets/images/team/team-1.jpg') }}" alt="image-team">
                                </div>
                                <div class="content">
                                    <div>
                                        <h6 class="name"><a class="link text-line-clamp-1" href="#">Annette Black</a></h6>
                                        <div class="infor text-caption-1 text-secondary-2">Founder/CEO</div>
                                    </div>
                                    <ul class="tf-social-icon">
                                        <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item hover-image wow fadeInUp" data-wow-delay="0.1s">
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset('front_assets/images/team/team-2.jpg') }}" src="{{ asset('front_assets/images/team/team-2.jpg') }}" alt="image-team">
                                </div>
                                <div class="content">
                                    <div>
                                        <h6 class="name"><a class="link text-line-clamp-1" href="#">Jane Cooper</a></h6>
                                        <div class="infor text-caption-1 text-secondary-2">Sales Director</div>
                                    </div>
                                    <ul class="tf-social-icon">
                                        <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item hover-image wow fadeInUp" data-wow-delay="0.2s">
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset('front_assets/images/team/team-3.jpg') }}" src="{{ asset('front_assets/images/team/team-3.jpg') }}" alt="image-team">
                                </div>
                                <div class="content">
                                    <div>
                                        <h6 class="name"><a class="link text-line-clamp-1" href="#">Brooklyn Simmons</a></h6>
                                        <div class="infor text-caption-1 text-secondary-2">Manager</div>
                                    </div>
                                    <ul class="tf-social-icon">
                                        <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item hover-image wow fadeInUp" data-wow-delay="0.3s">
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset('front_assets/images/team/team-4.jpg') }}  " src="{{ asset('front_assets/images/team/team-4.jpg') }}" alt="image-team">
                                </div>
                                <div class="content">
                                    <div>
                                        <h6 class="name"><a class="link text-line-clamp-1" href="#">Theresa Webb</a></h6>
                                        <div class="infor text-caption-1 text-secondary-2">Product Manager</div>
                                    </div>
                                    <ul class="tf-social-icon">
                                        <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-latest sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Our Teams -->
   <!-- Partner -->
        <section class="flat-spacing-5 bg-surface">
            <div dir="ltr" class="swiper tf-sw-partner sw-auto" data-preview="auto" data-tablet="auto" data-mobile-sm="auto" data-mobile="auto" data-space-lg="74" data-space-md="50" data-space="50" data-loop="true" data-auto-play="true" data-delay="0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/vanfaba.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/anvouge.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/carolin.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/shangxi.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/ecomife.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/cheryl.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/sopify.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/pennyw.png') }}" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="brand-item">
                            <img src="{{ asset('front_assets/images/brand/panadoxn.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Partner -->

        <!-- Testimonial -->
        <section class="flat-spacing">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Customer Review</h3>
                </div>
                <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item style-4">
                                <div class="content-top">
                                    <div class="box-icon">
                                        <i class="icon icon-quote"></i>
                                    </div>
                                    <div class="text-title">Variety of Styles!</div>
                                    <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</p>
                                    <div class="box-rate-author">
                                        <div class="box-author">
                                            <div class="text-title author">Sybil Sharp</div>
                                        </div>
                                        <div class="list-star-default color-primary">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item style-4">
                                <div class="content-top">
                                    <div class="box-icon">
                                        <i class="icon icon-quote"></i>
                                    </div>
                                    <div class="text-title">Quality of Clothing!</div>
                                    <p class="text-secondary">"I absolutely love this shop! The products are high-quality and the customer service is excellent. I always leave with exactly what I need and a smile on my face."</p>
                                    <div class="box-rate-author">
                                        <div class="box-author">
                                            <div class="text-title author">Mark G.</div>
                                        </div>
                                        <div class="list-star-default color-primary">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item style-4">
                                <div class="content-top">
                                    <div class="box-icon">
                                        <i class="icon icon-quote"></i>
                                    </div>
                                    <div class="text-title">Customer Service!</div>
                                    <p class="text-secondary">"I love this shop! The products are always top-quality, and the staff is incredibly friendly and helpful. They go out of their way to make sure that I'm satisfied with my purchase.”</p>
                                    <div class="box-rate-author">
                                        <div class="box-author">
                                            <div class="text-title author">Emily S.</div>
                                        </div>
                                        <div class="list-star-default color-primary">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item style-4">
                                <div class="content-top">
                                    <div class="box-icon">
                                        <i class="icon icon-quote"></i>
                                    </div>
                                    <div class="text-title">Variety of Styles!</div>
                                    <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</p>
                                    <div class="box-rate-author">
                                        <div class="box-author">
                                            <div class="text-title author">Sybil Sharp</div>
                                        </div>
                                        <div class="list-star-default color-primary">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
     


       

    </div>


@endsection
