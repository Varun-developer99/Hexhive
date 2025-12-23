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
                        <h3 class="heading text-center" style="color:#fff;">From Humble Beginnings to Industry Leaders</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="#" style="color:#fff;">From accessible care to limitless
                                    possibilities, join us on our journey. </a>
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
                            {{-- <img class="lazyload" data-src="{{ asset('front_assets/images/banner/about-us.jpg') }}" src="{{ asset('front_assets/images/banner/about-us.jpg') }}" alt="image-team"> --}}
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                    src="https://player.vimeo.com/video/904084725?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                    title="Tynor Corporate Video 2022(1)">
                                </iframe></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-us-content">
                            <h3 class="title wow fadeInUp">About Fidelity</h3>
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
                                        <p>Tynor Orthotics was founded in 1993 when orthopedic appliances were expensive and 
                                            challenging to obtain, and we are now proudly operating in NewZealand as your trusted 
                                            local partner for orthopedic solutions. As a NewZealand registered distributor, we believe 
                                            healthcare should be proactive, not just curative, and have evolved as a leader in the orthopedic 
                                            industry serving NewZealand customers. Based in NewZealand, Tynor has established itself as the 
                                            premier provider of best-in-class orthotic solutions, serving the unique needs of NewZealand 
                                            healthcare market.
                                        </p>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p>Our goal is to transform Tynor into a trusted NewZealand healthcare brand that offers both curative 
                                            solutions and proactive preventive well-being choices for NewZealand customers. This strategic expansion 
                                            aligns with our vision of serving NewZealand customers with world-class products while leading the charge 
                                            in promoting limitless living. We are committed to engaging with NewZealand healthcare methodologies and 
                                            web-enabled technology to better serve our local community.
                                        </p>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p>We provide world-class and innovative orthopedic solutions in NewZealand through focused research & development, 
                                            collaborating with NewZealand's academic and medical fraternity to improve healthcare standards. Our emphasis 
                                            on ethical working and state-of-the-art technology helps us meet the dynamic demands of NewZealand's healthcare 
                                            market. We maintain the highest quality standards while delivering exceptional orthopedic solutions nationwide to 
                                            our customers.

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
        <!-- /Iconbox -->
        <section class="flat-spacing" id="accordion">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Our Brands</h3>
                    <p class="subheading text-secondary">Orthotic innovation for a healthier , happier you. </p>
                </div>
                <div class="container">
                    <div dir="ltr" class="swiper tf-sw-collection sw-lookbook-wrap" data-preview="3"
                        data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15"
                        data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="collection-position-3 hover-img wow fadeInUp" data-wow-delay="0s">
                                    <a class="img-style" data-bs-toggle="collapse" href="#demo">
                                        <img class="lazyload"
                                            data-src="{{ asset('front_assets/images/collections/banner-collection/banner-cls3.jpg') }}"
                                            src="{{ asset('front_assets/images/collections/banner-collection/banner-cls3.jpg') }}"
                                            alt="banner-cls">
                                    </a>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-position-3 hover-img cls-lookbook wow fadeInUp"
                                    data-wow-delay="0.1s">
                                    <a class="img-style" data-bs-toggle="collapse" href="#demo2">
                                        <img class="lazyload"
                                            data-src="{{ asset('front_assets/images/collections/banner-collection/banner-cls4.jpg') }}"
                                            src="{{ asset('front_assets/images/collections/banner-collection/banner-cls4.jpg') }}"
                                            alt="banner-cls">
                                    </a>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-position-3 hover-img wow fadeInUp" data-wow-delay="0.2s">
                                    <a class="img-style" data-bs-toggle="collapse" href="#demo3">
                                        <img class="lazyload"
                                            data-src="{{ asset('front_assets/images/collections/banner-collection/banner-cls5.jpg') }}"
                                            src="{{ asset('front_assets/images/collections/banner-collection/banner-cls5.jpg') }}"
                                            alt="banner-cls">
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-collection sw-dots type-circle justify-content-center"></div>
                    </div>
                </div>
                <div class=" pt-5 collapse" id="demo" data-bs-parent="#accordion">
                    <div class="px-1">
                        <div class="banner-cls-discover hover-img back-button">
                            <a href="#" class="img-style back-button" data-bs-toggle="collapse"
                                data-bs-target="#demo">
                                <img class="lazyload" data-src="{{ asset('front_assets/images/banner/care.png') }}"
                                    src="{{ asset('front_assets/images/banner/care.png') }}" alt="cls-tiktok">
                            </a>
                            <div class="cls-content">
                                <div class="box-title-top">
                                    <h3 class="title"><a href="#" class="link text-white">Tynor Cure </a></h3>
                                    <p class="desc text-white px-md-5">Tynor Cure embodies the spirit of conquering life's
                                        challenges. Centered on the essence of healing with confidence, Tynor CURE, promotes
                                        faster recovery. Through rigorous R&D, our products are crafted by harmonizing the
                                        principles of biology and anatomy thus redefining the standards of body care
                                        solutions. This holistic journey harmonizes both cure & support, reshaping the way
                                        of approaching overall well-being.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" pt-5 collapse" id="demo2" data-bs-parent="#accordion">
                    <div class="px-1">
                        <div class="banner-cls-discover hover-img ">
                            <a href="#" class="img-style back-button2">
                                <img class="lazyload" data-src="{{ asset('front_assets/images/banner/sport.png') }}"
                                    src="{{ asset('front_assets/images/banner/sport.png') }}" alt="cls-tiktok">
                            </a>
                            <div class="cls-content">
                                <div class="box-title-top">
                                    <h3 class="title"><a href="#" class="link text-white">Tynor Sport
                                        </a></h3>
                                    <p class="desc text-white px-md-5">Tynor Sport revolutionizes orthopedic solutions to
                                        ignite personal transformation. Going beyond traditional athletic gear , it embodies
                                        a philosophy of progress and growth. Through rigorous R&D, our products are
                                        scientifically crafted with a deep understanding of human anatomy while prioritizing
                                        personalized comfort, support, and aesthetics. Rooted in the essence of unwavering
                                        support and protection, our scientifically designed and durable products propel your
                                        journey from "Good to Great". With Tynor Sport, we empower you on and off the field,
                                        let you redefine boundaries and enhance performance.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" pt-5 collapse" id="demo3" data-bs-parent="#accordion">
                    <div class="px-1">
                        <div class="banner-cls-discover hover-img ">
                            <a href="#" class="img-style back-button3">
                                <img class="lazyload" data-src="{{ asset('front_assets/images/banner/life.png') }}"
                                    src="{{ asset('front_assets/images/banner/life.png') }}" alt="cls-tiktok">
                            </a>
                            <div class="cls-content">
                                <div class="box-title-top">
                                    <h3 class="title"><a href="#" class="link text-white">Tynor Life
                                        </a></h3>
                                    <p class="desc text-white px-md-5">Recognizing the significance of self-care in
                                        overcoming everyday challenges, Tynor Life is dedicated to providing your body with
                                        the care it deserves. Our mission is to develop innovative products that prioritize
                                        your well-being and enhance your daily life. Through rigorous R&D, our products are
                                        scientifically crafted with a deep understanding of human anatomy, emphasizing
                                        personalized comfort, support, and aesthetics. With Tynor Life, we envision a future
                                        where everyone enjoys unparalleled comfort, embracing life where comfort and
                                        well-being empower you to live smart.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- our milestone --}}
        <section class="milestone-section">
            <h2>Our Milestones</h2>

            <ul class="year-tabs">
                <li class="active" data-index="0">1993-1997</li>
                <li data-index="1">1997</li>
                <li data-index="2">2001</li>
                <li data-index="3">2004</li>
                <li data-index="4">2005</li>
                <li data-index="5">2010</li>
                <li data-index="6">2011</li>
                <li data-index="7">2016</li>
                <li data-index="8">2018</li>
                <li data-index="9">2022</li>
                <li data-index="10">2022-2023</li>
                <li data-index="11">2024</li>
            </ul>

            <div class="swiper milestone-slider">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/Image_1_1.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">1993-1997</h4>
                            <h3 style="color: #fff;">Tynor's Foundation</h3>
                            <p style="color: #fff;">Dr. P.J. Singh's Entrepreneurial Vision - Study of imported products,
                                Market Research, and Product Planning</p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/1997_15_1.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">1997

                            </h4>
                            <h3 style="color: #fff;">Inaugural Production</h3>
                            <p style="color: #fff;">Established the First orthopedic goods Production Unit on Independence
                                day</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/Image1.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2001

                            </h4>
                            <h3 style="color: #fff;"> Quality Excellence</h3>
                            <p style="color: #fff;">Attains ISO 9001 Certificate</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2004.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2004


                            </h4>
                            <h3 style="color: #fff;"> Improvement of Production Efficiency</h3>
                            <p style="color: #fff;">Adoption of learn manufacturing system</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2005.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2005

                            </h4>
                            <h3 style="color: #fff;"> Innovative Leap</h3>
                            <p style="color: #fff;"> Univeils TORNADO (TORNADO- Tynor Ortho Reasearch N Appliances
                                Development org. )</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2010.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2010

                            </h4>
                            <h3 style="color: #fff;">Strategic Partnerships</h3>
                            <p style="color: #fff;">Collaboration with French-based Company Thuasne</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2011.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2011

                            </h4>
                            <h3 style="color: #fff;">National Award</h3>
                            <p style="color: #fff;">Honored for being Countrys best Entrepreneur by the Former President
                                Smt. Pratibha Patil</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2016.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2016

                            </h4>
                            <h3 style="color: #fff;"> Scaling Success</h3>
                            <p style="color: #fff;"> Hitting the Century Mark with Rs 100 Cr. turnover and Established of a
                                New Production Unit</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2018_1.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2018

                            </h4>
                            <h3 style="color: #fff;">Private Equity Funding</h3>
                            <p style="color: #fff;">Funding from lighthouse an American PE fund</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2022_1.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2022

                            </h4>
                            <h3 style="color: #fff;"> Global Market Domination</h3>
                            <p style="color: #fff;">Tynor become the Number 1 brand in six countries</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/2021-2023_2.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2022-2023

                            </h4>
                            <h3 style="color: #fff;">Brand Evolution</h3>
                            <p style="color: #fff;">Tynor shifts its approch & works on becoming a Consumer Healthcare
                                Brand</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front_assets/images/banner/Image_1_1_3.png') }}" alt="">
                        <div class="slide-caption">
                            <h4 style="color: #fff;">2024

                            </h4>
                            <h3 style="color: #fff;"> Establishment of new
                                manufacturing facility - T MED</h3>
                            <p style="color: #fff;">To redefine the future of Orthopedic manufacturing on a global scale
                            </p>
                        </div>
                    </div>

                </div>

                <!-- ARROWS -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var swiper = new Swiper('.milestone-slider', {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                });

                // TAB click -> go to that slide
                $('.year-tabs li').click(function() {
                    var index = $(this).data('index');
                    swiper.slideTo(index);
                    $('.year-tabs li').removeClass('active');
                    $(this).addClass('active');
                });

                // On Slide Change -> update active tab
                swiper.on('slideChange', function() {
                    $('.year-tabs li').removeClass('active');
                    $('.year-tabs li[data-index="' + swiper.activeIndex + '"]').addClass('active');
                });
            });
        </script>


        <section class="pt-5" id="accordion">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Certificates</h3>
                    <p class="subheading text-secondary">Tynor is distinguished by a range of certificates, showcasing its
                        unwavering commitment to quality, safety, compliance with standards.

                    </p>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="6" data-tablet="3" data-mobile-sm="2"
                    data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                    data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <img src="{{ asset('front_assets/images/banner/11.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <img src="{{ asset('front_assets/images/banner/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <img src="{{ asset('front_assets/images/banner/12.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <img src="{{ asset('front_assets/images/banner/4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <img src="{{ asset('front_assets/images/banner/5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <img src="{{ asset('front_assets/images/banner/6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>

    </div>


@endsection
