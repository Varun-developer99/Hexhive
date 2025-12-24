@extends('layouts.front.app')

@section('title', 'Home')

@section('css')

@endsection

@section('content')
   
   <!-- Slider -->
        <div class="slider-padding">
            <div class="tf-slideshow slider-default slider-position slider-effect-fade slider-radius-2">
                <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="false">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('front_assets/images/slider/slider-organic.webp') }}" alt="fashion-slideshow">
                                {{-- <div class="box-content">
                                    <div class="content-slider">
                                        <div class="box-title-slider">
                                            <div class="fade-item fade-item-1 heading title-display text-white">Organic Fresh <br> Produce</div>
                                            <p class="fade-item fade-item-2 body-text-1 text-white">Enjoy the best of nature with our selection of fresh.</p>
                                        </div>
                                        <div class="fade-item fade-item-3 box-btn-slider">
                                            <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span class="text">Shop Now</span><i class="icon icon-arrowUpRight"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('front_assets/images/slider/slider-organic2.jpg') }}" alt="fashion-slideshow">
                                {{-- <div class="box-content">
                                    <div class="content-slider">
                                        <div class="box-title-slider">
                                            <div class="fade-item fade-item-1 heading title-display text-white">100% Organic <br> Vegetables</div>
                                            <p class="fade-item fade-item-2 body-text-1 text-white">Savor the purest flavors with our pesticide-free, farm-fresh produce.</p>
                                        </div>
                                        <div class="fade-item fade-item-3 box-btn-slider">
                                            <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span class="text">Shop Now</span><i class="icon icon-arrowUpRight"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('front_assets/images/slider/slider-organic3.jpg') }}" alt="fashion-slideshow">
                                {{-- <div class="box-content">
                                    <div class="content-slider">
                                        <div class="box-title-slider">
                                            <div class="fade-item fade-item-1 heading title-display text-white">Fresh-Squeezed <br> Orange Juice</div>
                                            <p class="fade-item fade-item-2 body-text-1 text-white">Enjoy the bright, tangy flavor of freshly pressed oranges with every sip.</p>
                                        </div>
                                        <div class="fade-item fade-item-3 box-btn-slider">
                                            <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span class="text">Shop Now</span><i class="icon icon-arrowUpRight"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-pagination">
                    <div class="container">
                        <div class="sw-dots sw-pagination-slider type-circle white-circle-line justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Slider -->
         <!-- collection -->
        <section class="flat-spacing-2 pb_0">
            <div class="container">
                <div class="heading-section-2 wow fadeInUp">
                    <h3>Categories you might like</h3>
                    {{-- <a href="#" class="btn-line">View All Collection</a> --}}
                </div>
                <div class="flat-collection-circle wow fadeInUp" data-wow-delay="0.1s">
                    <div dir="ltr" class="swiper tf-sw-collection" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <!-- item 1 -->
                             @foreach($category as $cat)
                                <div class="swiper-slide">
                                    <div class="collection-circle hover-img">
                                        <a href="#" class="img-style">
                                            <img class="lazyload" data-src="{{ $cat->thumb_url ?? asset('front_assets/images/collections/collection-circle/cls-circle1.jpg') }}" src="{{ $cat->thumb_url ?? asset('front_assets/images/collections/collection-circle/cls-circle1.jpg') }}" alt="collection-img">
                                        </a>
                                        <div class="collection-content text-center">
                                            <div>
                                                <a href="#" class="cls-title">
                                                    <h6 class="text">{{ $cat->name }}</h6>
                                                    <i class="icon icon-arrowUpRight"></i>    
                                                </a>
                                            </div>
                                            <div class="count text-secondary">{{ $cat->products_count }} items</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex d-lg-none sw-pagination-collection sw-dots type-circle justify-content-center"></div>
                    </div>
                    <div class="nav-prev-collection d-none d-lg-flex nav-sw style-line nav-sw-left"><i class="icon icon-arrLeft"></i></div>
                    <div class="nav-next-collection d-none d-lg-flex nav-sw style-line nav-sw-right"><i class="icon icon-arrRight"></i></div>
                </div>
            </div>
        </section>
        <!-- /collection -->
        <!-- Deal of the day -->
        <section class="flat-spacing">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Deals of the day</h3>
                    <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <!-- 1 -->
                        @foreach($fresh_arrivals as $prod)
                        <div class="swiper-slide">
                            <div class="card-product card-product-size wow fadeInUp" data-wow-delay="0s">
                                <div class="card-product-wrapper">
                                    <a href="{{ route('front.product', $prod->slug) }}" class="product-img">
                                        <img class="lazyload img-product" data-src="{{ $prod->thumb_url }}" src="{{ $prod->thumb_url }}" alt="image-product">
                                        <img class="lazyload img-hover" data-src="{{ $prod->thumb_url }}" src="{{ $prod->thumb_url }}" alt="image-product">
                                    </a>
                                    {{-- <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div> --}}
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                    </div> 
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="title link">{{ $prod->name }}</a>
                                    <span class="price">₹{{ $prod->mrp_price }} <del class="text-secondary ms-2">₹{{ $prod->sale_price }}</del></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Deal of the day -->
        <!-- Collection -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="collection-position-2 style-5 style-7 hover-img wow fadeInUp" data-wow-delay="0s">
                            <a class="img-style">
                                <img class="lazyload" data-src="{{ asset('front_assets/images/collections/1 (1).webp') }}" src="{{ asset('front_assets/images/collections/1 (1).webp') }}" alt="banner-cls">
                            </a>
                            {{-- <div class="content ">
                                <span class="text-title text-white">Pure Organic-Vegan</span>
                                <h4 class="title"><a href="#" class="link text-white">Fresh Veggie Combos Start from $22</a></h4>
                                <div>
                                    <a href="#" class="btn-line style-white">Shop Now</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="collection-position-2 style-5 style-7 hover-img wow fadeInUp" data-wow-delay="0.1s">
                            <a class="img-style">
                                <img class="lazyload" data-src="{{ asset('front_assets/images/collections/2.webp') }}" src="{{ asset('front_assets/images/collections/2.webp') }}" alt="banner-cls">
                            </a>
                            {{-- <div class="content">
                                <span class="text-title text-white">Top-quality nuts and grains.</span>
                                <h4 class="title"><a href="#" class="link text-white">Nut & Grain Combos Start from $22</a></h4>
                                <div>
                                    <a href="#" class="btn-line style-white">Shop Now</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                       <div class="collection-position-2 style-5 style-7 hover-img wow fadeInUp" data-wow-delay="0.2s">
                            <a class="img-style">
                                <img class="lazyload" data-src="{{ asset('front_assets/images/collections/3.webp') }}" src="{{ asset('front_assets/images/collections/3.webp') }}" alt="banner-cls">
                            </a>
                            {{-- <div class="content">
                                <span class="text-title text-white">Delicious and nutritious blends.</span>
                                <h4 class="title"><a href="#" class="link text-white">Smoothie Essentials Bundle Start from $22</a></h4>
                                <div>
                                    <a href="#" class="btn-line style-white">Shop Now</a>
                                </div>


                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery shop gram -->
        <section>
            <div class="container">
                <div class="heading-section text-center">
                    <h3 class="heading wow fadeInUp">Shop Instagram</h3>
                    <p class="subheading text-secondary wow fadeInUp">Elevate your wardrobe with fresh finds today!</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="10" data-space-md="10" data-space="8" data-pagination="2" data-pagination-md="3" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".1s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/gallery/gallery-1.jpg') }}" src="{{ asset('front_assets/images/gallery/gallery-1.jpg') }}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".2s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/gallery/gallery-2.jpg') }}" src="{{ asset('front_assets/images/gallery/gallery-2.jpg') }}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".3s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/gallery/gallery-3.jpg') }}" src="{{ asset('front_assets/images/gallery/gallery-3.jpg') }}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/gallery/gallery-4.jpg') }}" src="{{ asset('front_assets/images/gallery/gallery-4.jpg') }}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".5s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/gallery/gallery-5.jpg') }}" src="{{ asset('front_assets/images/gallery/gallery-5.jpg') }}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-gallery sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Gallery shop gram -->
        <!-- Iconbox -->
        <section class="flat-spacing">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-return"></span></div>
                                <div class="content text-center">
                                    <h6>14-Day Returns</h6>
                                    <p class="text-secondary">Risk-free shopping with easy returns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-shipping"></span></div>
                                <div class="content text-center">
                                    <h6>Free Shipping</h6>
                                    <p class="text-secondary">No extra costs, just the price you see.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-headset"></span></div>
                                <div class="content text-center">
                                    <h6>24/7 Support</h6>
                                    <p class="text-secondary">24/7 support, always here just for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-sealCheck"></span></div>
                                <div class="content text-center">
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

@endsection