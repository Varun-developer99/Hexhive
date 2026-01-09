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
        <div class="page-title" style="background: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('front_assets/images/section/6215.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color:#fff; font-weight: 600;">About Hexhive</h3>
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
                            <img class="lazyload" data-src="{{ asset('front_assets/images/section/about_us.jpeg') }}" src="{{ asset('front_assets/images/section/about_us.jpeg') }}" alt="image-team">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-us-content">
                            <h3 class="title wow fadeInUp">About HEXHIVE</h3>
                            <div class="widget-content-inner active">
                                <p>
                                   
                                    Hexhive Foods & Beverages Private Limited is a dynamic food and beverage company based in Ludhiana, Punjab, India, established in 2017 with a clear mission to bring high-quality, wholesome food products to consumers and markets across the country. 
                                    
                                    
                                    At Hexhive, we believe in the power of nature and authentic taste. What began as a focused enterprise in the production and distribution of premium honey and related natural food products has grown into a brand recognized for its commitment to quality, purity, and customer satisfaction. Our operations are built around rigorous quality testing, processing excellence, and trusted supply chain practices, ensuring that every product reflects our promise of excellence. 
                                    LinkedIn
                                    
                                    Driven by a passion for innovation and rooted in traditional values, Hexhive continues to expand its offerings while maintaining the highest standards in food safety and nutrition. We are dedicated to nurturing trust with our customers, partners, and communities — delivering not just products, but wholesome experiences that enrich everyday life.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
