@extends('layouts.front.app')

@section('title', 'Home')

@section('css')

@endsection

@section('content')

    <!-- Slider -->
    <div class="slider-padding">
        <div class="tf-slideshow slider-default slider-position slider-effect-fade slider-radius-2">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="false">
                <div class="swiper-wrapper">
                    @if(isset($banners) && count($banners) > 0)
                        @foreach($banners as $banner)
                            <div class="swiper-slide">
                                <div class="wrap-slider">
                                    <a href="{{ route('front.shop', ['category' => $banner->category->slug]) }}"><img class="d-none d-md-block" src="{{ $banner->image_url ?? asset('front_assets/images/slider/slider-organic.webp') }}" alt="{{ $banner->name ?? 'fashion-slideshow' }}"></a>
                                    <a href="{{ route('front.shop', ['category' => $banner->category->slug]) }}"><img class="d-block d-md-none" src="{{ $banner->mobile_image_url ?? $banner->image_url ?? asset('front_assets/images/slider/slider-organic.webp') }}" alt="{{ $banner->name ?? 'fashion-slideshow' }}"></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
            </div>
            <div class="flat-collection-circle wow fadeInUp" data-wow-delay="0.1s">
                <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile="2"
                    data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1"
                    data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        @foreach($category as $cat)
                            <div class="swiper-slide">
                                    <div class="collection-circle hover-img">
                                        <a href="{{ route('front.shop', ['category' => $cat->slug]) }}" class="img-style">
                                        <img class="lazyload"
                                            data-src="{{ $cat->thumb_url ?? asset('front_assets/images/collections/collection-circle/cls-circle1.jpg') }}"
                                            src="{{ $cat->thumb_url ?? asset('front_assets/images/collections/collection-circle/cls-circle1.jpg') }}"
                                            alt="collection-img">
                                        </a>
                                    <div class="collection-content text-center">
                                        <div>
                                            <a href="{{ route('front.shop', ['category' => $cat->slug]) }}" class="cls-title">
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
                <div class="nav-prev-collection d-none d-lg-flex nav-sw style-line nav-sw-left"><i
                        class="icon icon-arrLeft"></i></div>
                <div class="nav-next-collection d-none d-lg-flex nav-sw style-line nav-sw-right"><i
                        class="icon icon-arrRight"></i></div>
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
            <div dir="ltr" class="swiper tf-sw-recent" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="30"
                data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    @foreach($fresh_arrivals as $product)
                        <div class="swiper-slide">
                            @include('front/product_card')
                        </div>
                    @endforeach
                </div>
                <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- Deal of the day -->
    <!-- Collection -->
    <section class="flat-spacing pt-0">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="collection-position-2 style-5 style-7 hover-img wow fadeInUp" data-wow-delay="0s">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ asset('front_assets/images/collections/Black Forest Honey.webp') }}"
                                src="{{ asset('front_assets/images/collections/Black Forest Honey.webp') }}" alt="banner-cls">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="collection-position-2 style-5 style-7 hover-img wow fadeInUp" data-wow-delay="0.1s">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ asset('front_assets/images/collections/Ginger Cube Honey.webp') }}"
                                src="{{ asset('front_assets/images/collections/Ginger Cube Honey.webp') }}" alt="banner-cls">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="collection-position-2 style-5 style-7 hover-img wow fadeInUp" data-wow-delay="0.2s">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ asset('front_assets/images/collections/Turmeric Honey.webp') }}"
                                src="{{ asset('front_assets/images/collections/Turmeric Honey.webp') }}" alt="banner-cls">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="flat-spacing">
        <div class="container">
            <div class="heading-section text-center wow fadeInUp">
                <h3 class="heading">Combo Products</h3>
                <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
            </div>
            <div dir="ltr" class="swiper tf-sw-recent" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="30"
                data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    @foreach($fresh_arrivals as $product)
                        <div class="swiper-slide">
                            @include('front/product_card')
                        </div>
                    @endforeach
                </div>
                <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
            </div>
        </div>
    </section>

@endsection