@extends('layouts.front.app')

@section('title', 'Home')

@section('css')
<style>
 img.video-Hotspot.ls-is-cached.lazyloaded {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  bottom: 0;
  max-width: 100%;
  max-height: 100%;
  width: auto;
  height: auto;
}
.icon-box {
  width: 20%;
}
.collection-position-2 .img-style img {
  min-height: 397px;
}
.technology-products {
  text-align: center;
}
</style>
@endsection

@section('content')
    <!-- Slider -->
    <div class="tf-slideshow slider-default slider-position slider-effect-fade desktop-slider d-none d-md-block">
        <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false"
            data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{ asset('front_assets/images/slider/festive_sale_banner_02_4_oct_copy-82e72be7.webp') }}"
                            alt="fashion-slideshow">
                        {{-- <div class="box-content">
                        <div class="content-slider">
                            <div class="box-title-slider">
                                <h1 class="fade-item fade-item-1 heading text-white">Modern Work Desks</h1>
                                <p class="fade-item fade-item-2 body-text-1 text-white">Enhance your productivity with intelligently designed work desks.</p>
                            </div>
                            <div class="fade-item fade-item-3 box-btn-slider">
                                <a href="#" class="tf-btn btn-fill btn-white"><span class="text">Explore Collection</span><i class="icon icon-arrowUpRight"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{ asset('front_assets/images/slider/knee_cap_air_pro_banner_desktop_option_02_1_-e401c817.webp') }}"
                            alt="fashion-slideshow">

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{ asset('front_assets/images/slider/LS_Back_belt-93adc688.webp') }}"
                            alt="fashion-slideshow">

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{ asset('front_assets/images/slider/ortho_memory_pillow_Desktop_1-60d93f79.webp') }}"
                            alt="fashion-slideshow">

                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pagination">
            <div class="container">
                <div class="sw-dots sw-pagination-slider type-circle white-circle-line justify-content-center"></div>
            </div>
        </div>
        <div class="navigation-prev-slider nav-sw nav-sw-left lg"><i class="icon icon-arrLeft"></i></div>
        <div class="navigation-next-slider nav-sw nav-sw-right lg"><i class="icon icon-arrRight"></i></div>
    </div>
    <!-- /Slider -->
        <!--Mobile Slider -->
        <div class="tf-slideshow slider-default slider-position slider-effect-fade mobile-slider d-block d-md-none">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false"
                data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="{{ asset('front_assets/images/slider/Mobile-eb4a5412.webp') }}"
                                alt="fashion-slideshow">
                            {{-- <div class="box-content">
                            <div class="content-slider">
                                <div class="box-title-slider">
                                    <h1 class="fade-item fade-item-1 heading text-white">Modern Work Desks</h1>
                                    <p class="fade-item fade-item-2 body-text-1 text-white">Enhance your productivity with intelligently designed work desks.</p>
                                </div>
                                <div class="fade-item fade-item-3 box-btn-slider">
                                    <a href="#" class="tf-btn btn-fill btn-white"><span class="text">Explore Collection</span><i class="icon icon-arrowUpRight"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="{{ asset('front_assets/images/slider/knee_cap_mobile_1_-665964d2.webp') }}"
                                alt="fashion-slideshow">
    
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="{{ asset('front_assets/images/slider/LS_belt_mobile-7d485655.webp') }}"
                                alt="fashion-slideshow">
    
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="{{ asset('front_assets/images/slider/Banner_02-f4e5dd2a.webp') }}"
                                alt="fashion-slideshow">
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider type-circle white-circle-line justify-content-center"></div>
                </div>
            </div>
            <div class="navigation-prev-slider nav-sw nav-sw-left lg"><i class="icon icon-arrLeft"></i></div>
            <div class="navigation-next-slider nav-sw nav-sw-right lg"><i class="icon icon-arrRight"></i></div>
        </div>
        <!-- Mobile Slider -->
    <!-- Marquee -->
    <section class="tf-marquee bg-light-blue-4 border-0">
        <div class="marquee-wrapper">
            <div class="initial-child-container">
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Free shipping on all orders over $20.00</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Returns are free within 14 days</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <!-- 2 -->
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Free shipping on all orders over $20.00</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Returns are free within 14 days</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <!-- 3 -->
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Free shipping on all orders over $20.00</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Returns are free within 14 days</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <!-- 4 -->
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Free shipping on all orders over $20.00</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Returns are free within 14 days</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <!-- 5 -->
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Free shipping on all orders over $20.00</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Returns are free within 14 days</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <!-- 6 -->
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Free shipping on all orders over $20.00</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
                <div class="marquee-child-item">
                    <p class="text-btn-uppercase">Returns are free within 14 days</p>
                </div>
                <div class="marquee-child-item">
                    <span class="icon icon-lightning-line"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- /Marquee -->
    <!-- collection -->
    <section class="flat-spacing">
        <div class="container">
            <div class="heading-section-2 wow fadeInUp">
                <h3>Hero Categories</h3>
                <a href="#" class="btn-line">View All Collection</a>
            </div>
            <div class="flat-collection-circle wow fadeInUp" data-wow-delay="0.1s">
                <div dir="ltr" class="swiper tf-sw-categories" data-preview="5" data-tablet="3" data-mobile="2"
                    data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1"
                    data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero1_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture1.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Abdominal Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>
                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero4_1_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture2.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Wrist Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>
                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero_2_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture3.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Neck Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>
                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero6_1_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture4.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Knee Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>
                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero5_1_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture5.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Elbow Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>
                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                        <!-- item 6 -->
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero3_1_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture1.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Back Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>

                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-circle hover-img">
                                <a href="#" class="img-style">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/collections/collection-circle/hero7_1_1.png') }}"
                                        src="{{ asset('front_assets/images/collections/collection-circle/cls-furniture1.jpg') }}"
                                        alt="collection-img">
                                </a>
                                <div class="collection-content text-center">
                                    <div>
                                        <a href="#" class="cls-title">
                                            <h6 class="text">Ankle and Foot Support</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                    </div>

                                    <div class="count text-secondary">12 items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex d-lg-none sw-pagination-categories sw-dots type-circle justify-content-center">
                    </div>
                </div>
                <div class="nav-prev-categories d-none d-lg-flex nav-sw style-line nav-sw-left"><i
                        class="icon icon-arrLeft"></i></div>
                <div class="nav-next-categories d-none d-lg-flex nav-sw style-line nav-sw-right"><i
                        class="icon icon-arrRight"></i></div>
            </div>
        </div>
    </section>
    <!-- /collection -->
    <!-- Categories -->
    <section class="flat-spacing">
        <div class="container">
            <div class="heading-section-2 wow fadeInUp">
                <h3 class="heading">Shop By Activity</h3>
                <a href="#" class="btn-line">View All Collection</a>
            </div>
        </div>
        <div class="container-full slider-layout-right wow fadeInUp" data-wow-delay="0.1s">
            <div dir="ltr" class="swiper tf-sw-categories" data-preview="6.2" data-tablet="3.2" data-mobile="2.2"
                data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1"
                data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <!-- 1 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/Gymnastsics_1.png') }}"
                                    src="{{ asset('front_assets/images/collections/Gymnastsics_1.png') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Aerobics</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/athletics_1_.png') }}"
                                    src="{{ asset('front_assets/images/collections/athletics_1_.png') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Athletics</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/Badminton_desktop.png') }}"
                                    src="{{ asset('front_assets/images/collections/Badminton_desktop.png') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Badminton</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/Basketball-min_1.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/Basketball-min_1.jpg') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Basketball</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/Cricket.png') }}"
                                    src="{{ asset('front_assets/images/collections/Cricket.png') }}" alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Cricket</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/cycling1.png') }}"
                                    src="{{ asset('front_assets/images/collections/cycling1.png') }}" alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Cycling</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 7 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/Football-min_1.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/Football-min_1.jpg') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Football</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 8 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/Golf-min_1.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/Golf-min_1.jpg') }}" alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Golf</h6><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Categories -->
    <!-- Seller -->
    <section class="flat-spacing pt-0">
        <div class="container">
            <div class="flat-animate-tab">
                <ul class="tab-product justify-content-sm-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                    <li class="nav-tab-item" role="presentation">
                        <a href="#newArrivals" class="active" data-bs-toggle="tab">New Arrivals</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#bestSeller" data-bs-toggle="tab">Best Seller</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#onSale" data-bs-toggle="tab">On Sale</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="newArrivals" role="tabpanel">
                        <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
                            <!-- card product 1 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture1.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture1.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture3.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture3.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Salamanca dusty rose Leeds fabric</a>
                                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-blue"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture1.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture1.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-blue-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture2.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture2.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 2 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture6.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture6.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture7.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture7.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="marquee-product bg-main">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Stockholm Oakwood Fabric Back</a>
                                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-blue"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture6.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture6.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-blue-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture8.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture8.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 3 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0.2s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture32.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture32.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture33.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture33.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="variant-wrap countdown-wrap">
                                        <div class="variant-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Enchanted Garden Handcrafted </a>
                                    <span class="price"><span class="old-price">$98.00</span> $89.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-beige"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture32.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture32.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture33.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture33.jpg') }}"
                                                alt="image-product">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- card product 4 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture17.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture17.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture18.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture18.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Stockholm Mustard Yellow Fabric
                                        Solo</a>
                                    <span class="price">$69.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-dark-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture17.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture17.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture19.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture19.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture20.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture20.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 5 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture37.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture37.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture39.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture39.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            Cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Serene Garden Premium Porcelain</a>
                                    <span class="price">$39.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture37.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture37.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-blue-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture38.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture38.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 6 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture24.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture24.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture25.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture25.jpg') }}"
                                            alt="image-product">
                                    </a>

                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Serene Illumination Crystal Lamp</a>
                                    <span class="price">$79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture24.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture24.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-main"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture26.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture26.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 7 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0.2s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture9.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture9.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture11.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture11.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Copenhagen Beechwood Artisan</a>
                                    <span class="price"><span class="old-price">$98.00</span>$129.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture9.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture9.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture10.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture10.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-main"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 8 -->
                            <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture34.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture34.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/furniture/furniture36.jpg') }}"
                                            src="{{ asset('front_assets/images/products/furniture/furniture36.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Classic Grace Premium Glass</a>
                                    <span class="price"><span class="old-price">$98.00</span>$219.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-main"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture34.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture34.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-beige"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/furniture/furniture35.jpg') }}"
                                                src="{{ asset('front_assets/images/products/furniture/furniture35.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sec-btn text-center">
                            <a href="#" class="btn-line">View All Products</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="bestSeller" role="tabpanel">
                        <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
                            <!-- card product 1 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                                    <span class="price">$59.99</span>

                                </div>
                            </div>
                            <!-- card product 2 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="marquee-product bg-main">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Polarized sunglasses</a>
                                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-blue"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-blue-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 3 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="variant-wrap countdown-wrap">
                                        <div class="variant-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Ramie shirt with pockets </a>
                                    <span class="price"><span class="old-price">$98.00</span> $89.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                alt="image-product">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- card product 4 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Ribbed cotton-blend top</a>
                                    <span class="price">$69.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-dark-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 5 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-8.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-8.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-9.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-9.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Ribbed cotton-blend top</a>
                                    <span class="price">$39.99</span>
                                </div>
                            </div>
                            <!-- card product 6 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                            alt="image-product">
                                    </a>

                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Faux-leather trousers</a>
                                    <span class="price">$79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-orange"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-dark-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 7 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-84.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-84.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Belt wrap dress</a>
                                    <span class="price"><span class="old-price">$98.00</span>$129.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-light-green"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-94.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-94.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch line">
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-87.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-87.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 8 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-103.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-103.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Double-button trench coat</a>
                                    <span class="price"><span class="old-price">$98.00</span>$219.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-grey-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-111.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-111.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch line">
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-104.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-104.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sec-btn text-center">
                            <a href="#" class="btn-line">View All Products</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="onSale" role="tabpanel">
                        <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
                            <!-- card product 1 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">V-neck cotton T-shirt</a>
                                    <span class="price">$59.99</span>

                                </div>
                            </div>
                            <!-- card product 2 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="marquee-product bg-main">
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="marquee-wrapper">
                                            <div class="initial-child-container">
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF
                                                    </p>
                                                </div>
                                                <div class="marquee-child-item">
                                                    <span class="icon icon-lightning text-critical"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Polarized sunglasses</a>
                                    <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-blue"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-blue-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 3 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="variant-wrap countdown-wrap">
                                        <div class="variant-box">
                                            <div class="js-countdown" data-timer="1007500"
                                                data-labels="D :,H :,M :,S"></div>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Ramie shirt with pockets </a>
                                    <span class="price"><span class="old-price">$98.00</span> $89.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                alt="image-product">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- card product 4 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Ribbed cotton-blend top</a>
                                    <span class="price">$69.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="swatch-value bg-dark-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 5 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-8.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-8.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-9.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-9.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Ribbed cotton-blend top</a>
                                    <span class="price">$39.99</span>
                                </div>
                            </div>
                            <!-- card product 6 -->
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                            alt="image-product">
                                    </a>

                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Faux-leather trousers</a>
                                    <span class="price">$79.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-orange"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-171.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-dark-pink"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-172.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 7 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-84.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-84.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Belt wrap dress</a>
                                    <span class="price"><span class="old-price">$98.00</span>$129.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-light-green"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-grey"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-94.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-94.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch line">
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-87.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-87.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- card product 8 -->
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="#" class="product-img">
                                        <img class="lazyload img-product"
                                            data-src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                            alt="image-product">
                                        <img class="lazyload img-hover"
                                            data-src="{{ asset('front_assets/images/products/womens/women-103.jpg') }}"
                                            src="{{ asset('front_assets/images/products/womens/women-103.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    <div class="variant-wrap size-list">
                                        <ul class="variant-box">
                                            <li class="size-item">S</li>
                                            <li class="size-item">M</li>
                                            <li class="size-item">L</li>
                                            <li class="size-item">XL</li>
                                        </ul>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                            class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                            Add</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="#" class="title link">Double-button trench coat</a>
                                    <span class="price"><span class="old-price">$98.00</span>$219.99</span>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="swatch-value bg-grey-2"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-102.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-111.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-111.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch line">
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload"
                                                data-src="{{ asset('front_assets/images/products/womens/women-104.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-104.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sec-btn text-center">
                            <a href="#" class="btn-line">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Seller -->
    <!-- Banner lookbook -->
    <section class="">
        <div class="container">
            <div class="heading-section text-center wow fadeInUp">
                <h3 class="heading">Locate Your Pain Area</h3>
                <p class="subheading text-secondary">Get the right support where you need it </p>
            </div>
        </div>
    </section>
    <section class="banner-lookbook">
        <video id="background-video" autoplay loop muted
            poster="{{ asset('front_assets/images/banner/running_img.png') }}">
            <source src="{{ asset('front_assets/images/banner/locket-compress.mp4') }}" type="video/mp4">
        </video>
        <img class="lazyload video-Hotspot" data-src="{{ asset('front_assets/images/banner/running_img.png') }}"
            src="{{ asset('front_assets/images/banner/running_img.png') }}" alt="banner">
        <div class="lookbook-item">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/gallery/lookbook-sm3.jpg') }}" alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Ribbed
                                    cotton-blend top</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item shoulder">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture9.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item neck">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item Chest">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item wrist">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item finger">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item back">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item abdominal">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item knee">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item thigh">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item calf">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lookbook-item foot">
            <div class="dropdown dropup-center dropdown-custom">
                <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span>
                </div>
                <div class="dropdown-menu">
                    <div class="loobook-product style-row">
                        <div class="img-style">
                            <img src="{{ asset('front_assets/images/products/furniture/furniture12.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <div class="info">
                                <a href="#" class="text-title text-line-clamp-1 link">Copenhagen
                                    Beechwood Artisan</a>
                                <div class="price text-button">$69.99</div>
                            </div>
                            <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook btn-line">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner lookbook -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-lg-30">
                    <div class="wg-blog style-row hover-image">
                        <div class="image">
                            <img class=" ls-is-cached lazyloaded"
                                data-src="{{ asset('front_assets/images/banner/Logo_1-2a06a2de.webp') }}"
                                src="{{ asset('front_assets/images/banner/Logo_1-2a06a2de.webp') }}"
                                alt="Logo_1-2a06a2de.webp">
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a class="link" href="#">Most trusted name in orthotic care </a>
                            </h3>
                            <p>Acclaimed and recommended by healthcare professionals worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Iconbox -->
    <section class="line-top-container">
        <div class="container">
            <hr>
            <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2"
                data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4" data-loop="true"
                data-auto-play="true">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <video width="60px" loop="" autoplay="" muted="">
                                    <source type="video/mp4"
                                        src="{{ asset('front_assets/images/banner/science.mp4') }}">
                                </video>
                            </div>
                            <div class="content text-center">
                                <h6>scientifically Designed Products</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <video width="60px" loop="" autoplay="" muted="">
                                    <source type="video/mp4"
                                        src="{{ asset('front_assets/images/banner/pallete.mp4') }}">
                                </video>
                            </div>
                            <div class="content text-center">
                                <h6>20+ Categories 250+ Products</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <video width="60px" loop="" autoplay="" muted="">
                                    <source type="video/mp4"
                                        src="{{ asset('front_assets/images/banner/trophy.mp4') }}">
                                </video>
                            </div>
                            <div class="content text-center">
                                <h6>Industry leader for 30+ Years</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <video width="60px" loop="" autoplay="" muted="">
                                    <source type="video/mp4"
                                        src="{{ asset('front_assets/images/banner/best-customer-experience.mp4') }}">
                                </video>
                            </div>
                            <div class="content text-center">
                                <h6>5.7 M+ Happy Customers</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
            </div>
            <hr>
        </div>
    </section>
    <!-- /Iconbox -->
    <!-- Categories -->
    <section class="flat-spacing">
        <div class="container">
            <div class="heading-section-2 wow fadeInUp">
                <h3 class="heading">Shop for Daily Support</h3>
                <a href="#" class="btn-line py_8">View All Collection</a>
            </div>
        </div>
        <div class="container-full slider-layout-right">
            <div dir="ltr" class="swiper tf-sw-collection" data-preview="5.1" data-tablet="3.1"
                data-mobile="2.1" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1"
                data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <!-- 1 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-3 hover-img wow fadeInUp" data-wow-delay="0s">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/tynor_website_office.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/tynor_website_office.jpg') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Office</h6> <span class="count-item text-secondary">12
                                        items</span><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-3 hover-img wow fadeInUp" data-wow-delay="0.1s">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/tynor_website_posture_corrector.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/tynor_website_posture_corrector.jpg') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Posture</h6><span class="count-item text-secondary">12
                                        items</span><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-3 hover-img wow fadeInUp" data-wow-delay="0.2s">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/pregnancy_support.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/pregnancy_support.jpg') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Pregnancy</h6><span class="count-item text-secondary">12
                                        items</span><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-3 hover-img wow fadeInUp" data-wow-delay="0.3s">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/sleeping_support.jpg') }}"
                                    src="{{ asset('front_assets/images/collections/sleeping_support.jpg') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Sleep</h6><span class="count-item text-secondary">12
                                        items</span><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-3 hover-img wow fadeInUp" data-wow-delay="0.4s">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/travel.png') }}"
                                    src="{{ asset('front_assets/images/collections/travel.png') }}" alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Travel</h6><span class="count-item text-secondary">12
                                        items</span><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-3 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset('front_assets/images/collections/kids_support_img_dekstop_1.png') }}"
                                    src="{{ asset('front_assets/images/collections/kids_support_img_dekstop_1.png') }}"
                                    alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="#" class="cls-btn">
                                    <h6 class="text">Kids</h6><span class="count-item text-secondary">12
                                        items</span><i class="icon icon-arrowUpRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 7 -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Categories -->
    <!-- Cls tiktok -->
    <section class="flat-spacing pt-0">
        <div class="container">
            <div class="heading-section text-center wow fadeInUp">
                <h3 class="heading">On Tiktok</h3>
                <p class="subheading text-secondary">"Join us on TikTok for exclusive brand releases, unboxings, reviews,
                    and more!"</p>
            </div>
            <div dir="ltr" class="swiper tf-sw-collection-video" data-preview="3" data-tablet="3"
                data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15"
                data-pagination="1" data-pagination-md="3" data-pagination-lg="4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0s">
                            <img src="{{ asset('front_assets/images/collections/cls-tiktok1.jpg') }}" alt="poster"
                                class="poster">
                            <video class="hover-video" controls="false" width="300" height="600"
                                playsinline="" muted="" loop="">
                                <source src="{{ asset('front_assets/images/video/skin-care1.mp4') }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            {{-- <div class="cls-content">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('front_assets/images/avatar/avt-tiktok1.jpg') }}" alt="avt">
                                    </div>
                                    <div class="info">
                                        <div><a href="#" class="title text-title text-white link text-line-clamp-1">Faux-leather trousers</a></div>
                                        <span class="price text-button text-white">$60.00</span>
                                    </div>
                                </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0.1s">
                            <img src="{{ asset('front_assets/images/collections/cls-tiktok2.jpg') }}" alt="poster"
                                class="poster">
                            <video class="hover-video" controls="false" width="300" height="600"
                                playsinline="" muted="" loop="">
                                <source src="{{ asset('front_assets/images/video/skin-care2.mp4') }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('front_assets/images/collections/cls-tiktok3.jpg') }}" alt="poster"
                                class="poster">
                            <video class="hover-video" controls="false" width="300" height="600"
                                playsinline="" muted="" loop="">
                                <source src="{{ asset('front_assets/images/video/skin-care3.mp4') }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                        </div>
                    </div>

                </div>
                <div class="sw-pagination-collection sw-dots type-circle justify-content-center"></div>
                <div class="sec-btn text-center">
                    <a href="#" class="btn-line">Follow us on Tiktok</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Cls tiktok -->
    <!-- Slider -->
    <div class="widget block block-static-block">
        <div data-content-type="row" data-appearance="contained" data-element="main">
            <div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}"
                data-background-type="image" data-video-loop="true" data-video-play-only-visible="true"
                data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="GNCK6XW">
                <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
                    <div class="slider-padding">
                        <div class="banner-cls-discover">
                        <div class="technology-products">
                            <h1>Experience the Tynor story yourself!</h1>
                            <p>Explore Tynor's extraordinary journey of innovation and transformation in reshaping orthotic
                                <br> care in India, marking its presence in over 60+ countries worldwide.</p>
                        </div>

                        <div class="video-container">
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                    src="https://player.vimeo.com/video/904084725?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                    title="Tynor Corporate Video 2022(1)">
                                </iframe></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Slider -->
    <!-- Banner discover -->
    <section class="flat-spacing pt-5">
        <div class="slider-padding">
            <div class="banner-cls-discover hover-img">
                <a href="#" class="img-style">
                    <img class="lazyload" data-src="{{ asset('front_assets/images/banner/family.png') }}"
                        src="{{ asset('front_assets/images/banner/family.png') }}" alt="cls-tiktok">
                </a>
                <div class="cls-content">
                    <div class="box-title-top">
                        <h3 class="title"><a href="#" class="link text-white wow fadeInUp"
                                data-wow-delay="0.1s">Check out our Blog!</a></h3>
                        <p class="desc text-white wow fadeInUp" data-wow-delay="0.2s">Dive in for orthotic insights you
                            won't find anywhere else </p>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <a href="#" class="tf-btn btn-md btn-white"><span class="text">discover Now</span><i
                                class="icon icon-arrowUpRight"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner discover -->
    <!-- Testimonial -->
    <section class="">
        <div class="container">
            <div class="heading-section text-center wow fadeInUp">
                <h3 class="heading">Customer Say!</h3>
                <p class="subheading">Our customers adore our products, and we constantly aim to delight them.</p>
            </div>
            <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" data-preview="2"
                data-tablet="1.3" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15"
                data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item hover-img">
                            <div class="img-style">
                                <img data-src="{{ asset('front_assets/images/testimonial/tes-5.jpg') }}"
                                    src="{{ asset('front_assets/images/testimonial/tes-5.jpg') }}"
                                    alt="img-testimonial">
                                <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                    <span class="icon icon-eye"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="content">
                                <div class="content-top">
                                    <div class="list-star-default">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                    </div>
                                    <p class="text-secondary">"Stylish and high-quality glass vase. Its elegant design and
                                        premium finish make it a perfect choice for any flower display. Highly recommended!"
                                    </p>
                                    <div class="box-author">
                                        <div class="text-title author">Sybil Sharp</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                    stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_15758_14563">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0 0.684082)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="box-avt">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('front_assets/images/products/furniture/furniture34.jpg') }}"
                                            alt="avt">
                                    </div>
                                    <div class="box-price">
                                        <p class="text-title text-line-clamp-1">Classic Grace Premium Glass</p>
                                        <div class="text-button price">$60.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item hover-img">
                            <div class="img-style">
                                <img data-src="{{ asset('front_assets/images/testimonial/tes-6.jpg') }}"
                                    src="{{ asset('front_assets/images/testimonial/tes-6.jpg') }}"
                                    alt="img-testimonial">
                                <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                    <span class="icon icon-eye"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="content">
                                <div class="content-top">
                                    <div class="list-star-default">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                    </div>
                                    <p class="text-secondary">"Stylish and high-quality glass vase. Its elegant design and
                                        premium finish make it a perfect choice for any flower display. Highly recommended!"
                                    </p>
                                    <div class="box-author">
                                        <div class="text-title author">Mark G.</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                    stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_15758_14563">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0 0.684082)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="box-avt">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('front_assets/images/products/furniture/furniture37.jpg') }}"
                                            alt="avt">
                                    </div>
                                    <div class="box-price">
                                        <p class="text-title text-line-clamp-1">Serene Garden Premium Porcelain</p>
                                        <div class="text-button price">$60.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item hover-img">
                            <div class="img-style">
                                <img data-src="{{ asset('front_assets/images/testimonial/tes-5.jpg') }}"
                                    src="{{ asset('front_assets/images/testimonial/tes-5.jpg') }}"
                                    alt="img-testimonial">
                                <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                    <span class="icon icon-eye"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="content">
                                <div class="content-top">
                                    <div class="list-star-default">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                    </div>
                                    <p class="text-secondary">"Stylish and high-quality glass vase. Its elegant design and
                                        premium finish make it a perfect choice for any flower display. Highly recommended!"
                                    </p>
                                    <div class="box-author">
                                        <div class="text-title author">Sybil Sharp</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                    stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_15758_14563">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0 0.684082)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="box-avt">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('front_assets/images/products/furniture/furniture34.jpg') }}"
                                            alt="avt">
                                    </div>
                                    <div class="box-price">
                                        <p class="text-title text-line-clamp-1">Classic Grace Premium Glass</p>
                                        <div class="text-button price">$60.00</div>
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
    <!-- Iconbox -->
    <section class="flat-spacing line-top-container">
        <div class="container">
            <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2"
                data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
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
