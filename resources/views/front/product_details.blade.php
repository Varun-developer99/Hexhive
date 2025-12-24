@extends('layouts.front.app')

@section('title', $product->name)

@section('css')
    <link rel="stylesheet" href="{{ asset('front_assets/css/photoswipe.css') }}">
    <style>
        .wrap-slider img {
            border-radius: 21px;
        }

        .movalble_buttons {
            background: #0a3030;
            backdrop-filter: blur(7.5px);
            display: flex;
            align-items: center;
            padding: 7px 0;
            justify-content: center;
            width: 100%;
            border-top: 1px solid rgb(203 203 203/50%);
            border-bottom: 1px solid rgb(203 203 203/50%);
            height: fit-content;
        }

        .movalble_buttons {
            order: 1;
            margin-bottom: 50px;
        }

        .movalble_buttons {
            position: sticky;
            top: 0;
            z-index: 9;
        }

        .movalble_buttons [class^=btn] {
            border-radius: 0;
            border: 0;
            padding: 8px 0;
            color: #fff;
            text-align: center;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 24px;
            margin-right: 32px;
        }



        .product_benefits {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .img-expand {
            flex: 1;
            background: #0a3030;
            color: white;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            text-align: center;
            transition: all 0.4s ease-in-out;
            min-height: 490px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .img-expand:hover {
            flex: 3;
            background: white;
            color: black;
            text-align: left;
            padding: 30px;
            border: 1px solid #2d3748;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .img-expand:hover .main-title_animate_title {
            color: black;
        }

        .main-title_animate_title {
            font-family: Figtree;
            font-size: 40px;
            font-style: normal;
            font-weight: 500;
            line-height: 44px;
            text-align: center;
            letter-spacing: -.4px;
        }

        .on_hover_img_expand {
            display: none;
            gap: 20px;
            align-items: center;
        }

        .img-expand:hover .on_hover_img_expand {
            display: flex;
            padding-top: 40px;
        }

        .animat_desc {
            flex: 2;
            font-size: 18px;
            font-weight: 500;
            line-height: 26px;
        }

        .animat_image img {
            width: 220px;
            height: auto;
            border-radius: 8px;
            flex: 1;
        }

        .movalble_buttons {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            white-space: nowrap;
            padding: 10px 0;
            scrollbar-width: none;
        }

        .movalble_buttons::-webkit-scrollbar {
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .product_benefits {
                flex-direction: column;
            }

            .img-expand {
                flex: 1;
                width: 100%;
            }

            .img-expand:hover {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .on_hover_img_expand {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            .img-expand {
                padding: 15px;
            }

            .img-expand:hover {
                padding: 15px;
            }

            .animat_desc {
                font-size: 16px;
            }

            .tf-slideshow .wrap-slider {
                height: 100%;
            }
            .wg-quantity{
                width: 100px;
            }
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* Aspect ratio 16:9 */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .disabled {
            pointer-events: none;
        }

        .tf-bundle-product-item .tf-product-bundle-image a {
            height: 220px;
            background-color: #e3e7ea;
        }

        .tf-bundle-product-item .tf-product-bundle-image img {
            object-fit: cover;
        }

        .tf-product-info-price .combo_product_mrp_price {
            font-size: 16px;
            font-weight: 400;
            line-height: 19.52px;
            color: var(--secondary-2);
            text-decoration: line-through;
            margin-right: 16px;
        }

        .tf-product-info-price.type-small .combo_product_sale_price {
            font-size: 16px;
            font-weight: 600;
            line-height: 26px;
            margin-right: 4px;
        }

        .tf-product-info-price.type-small .combo_product_mrp_price {
            font-size: 14px;
            font-weight: 400;
            line-height: 22px;
            margin-right: 4px;
        }

        .tf-product-info-price.type-1 #combo_product_total_sale_price {
            margin-right: 25px;
        }

        .tf-product-info-price.type-1 #combo_product_total_mrp_price {
            margin-right: 12px;
            font-size: 16px;
            font-weight: 500;
            line-height: 28px;
            position: relative;
            text-decoration: line-through;
            color: var(--secondary-2);
        }

        .tf-product-info-price.type-1 #combo_product_total_mrp_price::before {
            position: absolute;
            content: "";
            width: 1px;
            height: 16px;
            left: -13px;
            background-color: var(--line);
            top: 50%;
            transform: translateY(-50%);
        }


        @media only screen and (max-width: 991px) {

            .product-description-list .product-description-list-item .product-description-list-content,
            .accordion-product-wrap .accordion-product-item .accordion-content {
                padding: 40px;
            }
        }

        .variant-picker-item .variant-picker-values label.disabled{
            border: 2px solid #e53e3e;
        }
        .variant-picker-item .variant-picker-values label.disabled::before{
            position: absolute;
            content: "";
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            width: 100%;
            height: 2px;
            border-bottom: 2px solid #e53e3e;
        }
        .wg-quantity input{
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap">
                <div class="tf-breadcrumb-list">
                    <a href="{{ route('home') }}" class="text text-caption-1">Home</a>
                    <i class="icon icon-arrRight"></i>
                    <a href="{{ route('front.shop') }}" class="text text-caption-1">All Product</a>
                    <i class="icon icon-arrRight"></i>
                    <span class="text text-caption-1">{{ $product->name }}</span>
                </div>
                {{-- <div class="tf-breadcrumb-prev-next">
                    <a href="#" class="tf-breadcrumb-prev">
                        <i class="icon icon-arrLeft"></i>
                    </a>
                    <a href="#" class="tf-breadcrumb-back">
                        <i class="icon icon-squares-four"></i>
                    </a>
                    <a href="#" class="tf-breadcrumb-next">
                        <i class="icon icon-arrRight"></i>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- tf-add-cart-success -->
    {{-- <div class="tf-add-cart-success">
        <div class="tf-add-cart-heading">
            <h5>Shopping Cart</h5>
            <i class="icon icon-close tf-add-cart-close"></i>
        </div>
        <div class="tf-add-cart-product">
            <div class="image">
                <img class=" ls-is-cached lazyloaded"
                    data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}" alt=""
                    src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}">
            </div>
            <div class="content">
                <div class="text-title">
                    <a class="link" href="product-detail.html">Biker-style leggings</a>
                </div>
                <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                <div class="text-title">$68.00</div>
            </div>
        </div>
        <a href="shopping-cart.html" class="tf-btn w-100 btn-fill radius-4"><span class="text text-btn-uppercase">View cart</span></a>
    </div> --}}
    <!-- /tf-add-cart-success -->

    <!-- Product_Main -->
    <section class="flat-spacing">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <!-- Product default -->
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                    data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">
                                        <div class="swiper-slide stagger-item" data-color="{{ $color ?? 'N/A' }}">
                                            <div class="item">
                                                <img class="lazyload" data-src="{{ $product->image_url ?? '#' }}" src="{{ $product->image_url ?? '#' }}" alt="">
                                            </div>
                                        </div>
                                        @foreach (($product->gallery_urls ?? []) as $gallery_url)
                                            <div class="swiper-slide stagger-item" data-color="{{ $color ?? 'N/A' }}">
                                                <div class="item">
                                                    <img class="lazyload" data-src="{{ $gallery_url ?? '#' }}" src="{{ $gallery_url ?? '#' }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-color="{{ $color ?? 'N/A' }}">
                                            <a href="{{ $product->image_url ?? '#' }}" target="_blank" class="item" data-pswp-width="600px" data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload" data-zoom="{{ $product->image_url ?? '#' }}" data-src="{{ $product->image_url ?? '#' }}" src="{{ $product->image_url ?? '#' }}" alt="">
                                            </a>
                                        </div>
                                        @foreach (($product->gallery_urls ?? []) as $gallery_url)
                                            <div class="swiper-slide" data-color="{{ $color ?? 'N/A' }}">
                                                <a href="{{ $gallery_url ?? '#' }}" target="_blank" class="item"
                                                    data-pswp-width="600px" data-pswp-height="800px">
                                                    <img class="tf-image-zoom lazyload" data-zoom="{{ $gallery_url ?? '#' }}" data-src="{{ $gallery_url ?? '#' }}" src="{{ $gallery_url ?? '#' }}" alt="">
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /Product default -->
                    <!-- tf-product-info-list -->
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-heading">
                                    <div class="tf-product-info-name">
                                        {{-- <div class="text text-btn-uppercase">Clothing</div> --}}
                                        <h3 class="name">{{ $product->name }}</h3>
                                        {{-- <div class="sub">
                                            <div class="tf-product-info-rate">
                                                <div class="list-star">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="text text-caption-1">(134 reviews)</div>
                                            </div>
                                            <div class="tf-product-info-sold">
                                                <i class="icon icon-lightning"></i>
                                                <div class="text text-caption-1">18 sold in last 32 hours</div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="tf-product-info-desc">
                                        <div class="tf-product-info-price">
                                            <h5 class="price-on-sale font-2"> {{ price($product->sale_price ?? 0) }} </h5>
                                            <div class="compare-at-price font-2">{{ price(($product->mrp_price ?? 0)) }}
                                            </div>
                                            <div class="badges-on-sale text-btn-uppercase">
                                                <p>{{ round(((($product->mrp_price ?? 0) - ($product->sale_price ?? 0)) / ($product->mrp_price ?? 0)) * 100) }}%
                                                </p>
                                            </div>
                                        </div>
                                        <p>{!! $product->short_description !!}</p>
                                        {{-- <div class="tf-product-info-liveview">
                                            <i class="icon icon-eye"></i>
                                            <p class="text-caption-1"><span class="liveview-count">28</span> people are viewing this right now</p>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="tf-product-info-choose-option">
                                    <div id="order_one_time_box">
                                        <div class="tf-product-info-quantity tf-product-info-by-btn align-items-end mb-3">
                                            <div class="title">
                                                Quantity:
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease">-</span>
                                                    <input class="quantity-product" type="number" id="order_qty" name="qty"
                                                        value="1" min="1" max="{{ $product->current_stock ?? 0 }}" data-product_id="{{ $product->id }}">
                                                    <span class="btn-quantity btn-increase">+</span>
                                                </div>
                                            </div>
                                            @auth
                                                <div class="w-100">
                                                    <p class="text-danger" id="stock_alert_msg_{{ $product->id }}" style="display: none;">Available Stock: <b>0</b></p>
                                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 btn-add-to-cart w-100" onclick="add_to_cart({{ $product->id }}, 'Single', 'Add to cart')">
                                                        <span>Add to cart -&nbsp;</span>
                                                        <span class="tf-qty-price total-price">₹{{ $product->sale_price }}</span>
                                                    </a>
                                                </div>
                                            @else
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="login_modal()" class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 w-100">
                                                    <span>Add to cart -&nbsp;</span>
                                                    <span class="tf-qty-price total-price">₹{{ $product->sale_price }}</span>
                                                </a>
                                            @endauth
                                        </div>
                                        <div>
                                            @auth
                                                <a href="javascript:void(0)" class="btn-style-3 text-btn-uppercase btn-buy-now"
                                                    onclick="add_to_cart({{ $product->id }}, 'Single', 'Buy now')">Buy it now</a>
                                            @else
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#global_modal"
                                                    onclick="login_modal()" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                                            @endauth
                                        </div>
                                    </div>
                                    

                                    <div class="tf-product-info-help">
                                        {{-- <div class="tf-product-info-extra-link">
                                            <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-shipping"></i>
                                                </div>
                                                <p class="text-caption-1">Delivery & Return</p>
                                            </a>
                                            <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-question"></i>
                                                </div>
                                                <p class="text-caption-1">Ask A Question</p>
                                            </a>
                                            <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-share"></i>
                                                </div>
                                                <p class="text-caption-1">Share</p>
                                            </a>
                                        </div> --}}
                                        <div class="tf-product-info-time">
                                            <div class="icon">
                                                <i class="icon-timer"></i>
                                            </div>
                                            <p class="text-caption-1">Estimated Delivery:&nbsp;&nbsp;<span>3-6 days</span>
                                                </p>
                                        </div>
                                        <div class="tf-product-info-return">
                                            <div class="icon">
                                                <i class="icon-arrowClockwise"></i>
                                            </div>
                                            <p class="text-caption-1">Easy Return within <span>14 days</span> of purchase
                                                from our store. Duties & taxes are non-refundable.</p>
                                        </div>
                                        {{-- <div class="dropdown dropdown-store-location">
                                            <div class="dropdown-title dropdown-backdrop" data-bs-toggle="dropdown"
                                                aria-haspopup="true">
                                                <div class="tf-product-info-view link">
                                                    <div class="icon">
                                                        <i class="icon-map-pin"></i>
                                                    </div>
                                                    <span>View Store Information</span>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="dropdown-content">
                                                    <div class="dropdown-content-heading">
                                                        <h5>Store Location</h5>
                                                        <i class="icon icon-close"></i>
                                                    </div>
                                                    <div class="line-bt"></div>
                                                    <div>
                                                        <h6>Fashion Modave</h6>
                                                        <p>Pickup available. Usually ready in 24 hours</p>
                                                    </div>
                                                    <div>
                                                        <p>766 Rosalinda Forges Suite 044,</p>
                                                        <p>Gracielahaven, Oregon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <ul class="tf-product-info-sku">
                                        @if (count(json_decode($product->shop_by_body_part_ids ?? '[]')) > 0)
                                            <li>
                                                <p class="text-caption-1">Body Part:</p>
                                                <p class="text-caption-1 text-1">
                                                    @foreach (json_decode($product->shop_by_body_part_ids ?? '[]') as $body_part_id)
                                                        {{ body_part_data($body_part_id)->name ?? 'N/A' }}{{ $loop->last ? '' : ',' }}
                                                    @endforeach
                                                </p>
                                            </li>
                                        @endif
                                        @if (count(json_decode($product->shop_by_activity_ids ?? '[]')) > 0)
                                            <li>
                                                <p class="text-caption-1">Activity:</p>
                                                <p class="text-caption-1 text-1">
                                                    @foreach (json_decode($product->shop_by_activity_ids ?? '[]') as $activity_id)
                                                        {{ activity_data($activity_id)->name ?? 'N/A' }}{{ $loop->last ? '' : ',' }}
                                                    @endforeach
                                                </p>
                                            </li>
                                        @endif
                                        @if (count(json_decode($product->shop_by_daily_support_ids ?? '[]')) > 0)
                                            <li>
                                                <p class="text-caption-1">Daily Support:</p>
                                                <p class="text-caption-1 text-1">
                                                    @foreach (json_decode($product->shop_by_daily_support_ids ?? '[]') as $daily_support_id)
                                                        {{ daily_support_data($daily_support_id)->name ?? 'N/A' }}{{ $loop->last ? '' : ',' }}
                                                    @endforeach
                                                </p>
                                            </li>
                                        @endif
                                        @if (count(json_decode($product->shop_by_brand_ids ?? '[]')) > 0)
                                            <li>
                                                <p class="text-caption-1">Brand:</p>
                                                <p class="text-caption-1 text-1">
                                                    @foreach (json_decode($product->shop_by_brand_ids ?? '[]') as $brand_id)
                                                        {{ brand_data($brand_id)->name ?? 'N/A' }}{{ $loop->last ? '' : ',' }}
                                                    @endforeach
                                                </p>
                                            </li>
                                        @endif
                                    </ul>
                                    <div class="tf-product-info-guranteed">
                                        <div class="text-title">
                                            Guaranteed safe checkout:
                                        </div>
                                        <div class="tf-payment">
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-1.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-2.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-3.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-4.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-5.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-6.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Product_Description_Accordion -->
                        <section class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="accordion-product-wrap" id="accordion-product">
                                            @if (($product->description ?? '') != '')
                                                <li class="accordion-product-item">
                                                    <a href="#accordion-1" class="accordion-title current"
                                                        data-bs-toggle="collapse" aria-expanded="true"
                                                        aria-controls="accordion-1">
                                                        <h6>Product Details</h6>
                                                        <span class="btn-open-sub"></span>
                                                    </a>
                                                    <div id="accordion-1" class="collapse show"
                                                        data-bs-parent="#accordion-product">
                                                        <div class="accordion-content tab-description">
                                                            <div class="right text-clear">
                                                                {{-- <div class="letter-1 text-btn-uppercase mb_12"></div> --}}
                                                                {!! $product->description !!}
                                                                {{-- <p class="text-secondary"></p> --}}
                                                            </div>
                                                            {{-- <div class="left">
                                                            <div class="letter-1 text-btn-uppercase mb_12">COMPOSITION,
                                                                ORIGIN AND CARE GUIDELINES</div>
                                                            <ul class="list-text type-disc mb_12 gap-6">
                                                                <li>Composition: 55% polyester, 30% acrylic, 13% polyamide,
                                                                    2% elastane</li>
                                                                <li>Designed in Barcelona</li>
                                                                <li>Origin</li>
                                                                <li>Manufacture: USA</li>
                                                            </ul>

                                                            <div class="text-caption-2">MACHINE WASHING MAX 30°C / 85ºF
                                                                SHORT SPIN DRY</div>
                                                        </div> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                            @if (($product->enable_additional_information ?? 0) == 1)
                                                <li class="accordion-product-item">
                                                    <a href="#accordion-3" class="accordion-title  current"
                                                        data-bs-toggle="collapse" aria-expanded="true"
                                                        aria-controls="accordion-3">
                                                        <h6>Additional Info</h6>
                                                        <span class="btn-open-sub"></span>
                                                    </a>
                                                    <div id="accordion-3" class="collapse show"
                                                        data-bs-parent="#accordion-product">
                                                        <div class="accordion-content tab-shipping text-clear">
                                                            <ul>
                                                                @foreach ($product->product_info ?? [] as $product_info)
                                                                    <li style="font-size: 14px">
                                                                        <b>{{ $product_info->name ?? '' }}: </b>
                                                                        {{ $product_info->value ?? '' }}</li>
                                                                @endforeach
                                                            </ul>
                                                            {{-- <div class="w-100">
                                            <div class="text-btn-uppercase mb_12">Import duties information</div>
                                            <p>Let us handle the legwork. Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, NewZealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR, Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.</p>
                                        </div> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /Product_Description_Accordion -->
                    </div>
                    <!-- /tf-product-info-list -->

                </div>
            </div>
        </div>
        {{-- <div class="tf-sticky-btn-atc">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form class="form-sticky-atc">
                            <div class="tf-sticky-atc-product">
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}" alt="" src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}">
                                </div>
                                <div class="content">
                                    <div class="text-title">
                                        Biker-style leggings
                                    </div>
                                    <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                                    <div class="text-title">$68.00</div>
                                </div>
                            </div>
                            <div class="tf-sticky-atc-infos">
                                <div class="tf-sticky-atc-size d-flex gap-12 align-items-center">
                                    <div class="tf-sticky-atc-infos-title text-title">Size:</div>
                                    <div class="tf-dropdown-sort style-2" data-bs-toggle="dropdown">
                                        <div class="btn-select">
                                            <span class="text-sort-value font-2">M</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="select-item">
                                                <span class="text-value-item">S</span>
                                            </div>
                                            <div class="select-item active">
                                                <span class="text-value-item">M</span>
                                            </div>
                                            <div class="select-item">
                                                <span class="text-value-item">L</span>
                                            </div>
                                            <div class="select-item">
                                                <span class="text-value-item">XL</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-sticky-atc-quantity d-flex gap-12 align-items-center">
                                    <div class="tf-sticky-atc-infos-title text-title">Quantity:</div>
                                    <div class="wg-quantity style-1">
                                        <span class="btn-quantity minus-btn">-</span>
                                        <input type="text" name="number" value="1">
                                        <span class="btn-quantity plus-btn">+</span>
                                    </div>
                                </div>
                                <div class="tf-sticky-atc-btns">
                                    <a href="#shoppingCart" data-bs-toggle="modal"
                                        class="tf-btn w-100 btn-reset radius-4 btn-add-to-cart"><span
                                            class="text text-btn-uppercase">Add To Cart</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- /Product_Main -->
    <div class="movalble_buttons">
        <!-- <a href="#overview" class="btn1">Overview</a> -->
        @if (($product->enable_product_benefits ?? 0) == 1)
            <a href="#product_benefits" class="btn2 me-1">Product Benefits</a>
        @endif
        @if (($product->enable_product_features ?? 0) == 1)
            <a href="#product_features" class="btn3 me-1">Product Features</a>
        @endif
        @if (($product->enable_how_to_wear ?? 0) == 1)
            <a href="#howtowear" class="btn4 me-1">How to Wear</a>
        @endif
        @if (($product->enable_faq ?? 0) == 1)
            <a href="#faqs" class="btn6 me-1">FAQs</a>
        @endif
        <a href="#reviews" class="btn7 me-1">Reviews</a>
    </div>

    {{-- @if (($combo_product = combo_product_data($product->id) ?? '') != '')
        <section class="pb-4">
            <div class="container">
                <div class="frequently-bought-together-2">
                    <form action="{{ route('front.combo_product_add_to_cart') }}" method="POST"
                        class="form-bundle-product type-cols">
                        @csrf
                        <h5 class="mb_16">Frequently Bought Together</h5>
                        <div class="tf-bundle-products-wrap">
                            @foreach (json_decode($combo_product->product_ids ?? '[]') ?? [] as $key => $product_id)
                                @php
                                    $product_variant = product_variants_data_with_product_id($product_id);
                                @endphp
                                <div
                                    class="tf-bundle-product-item mb-3"id="combo_product_box_{{ $product_variant[0]->product_id }}">
                                    <div class="tf-product-bundle-image">
                                        <a href="{{ route('front.product', $product_variant[0]->product->slug ?? '') }}">
                                            @foreach ($product_variant[0]->product->getMedia('main_img') ?? [] as $file)
                                                <img src="{{ $file->getURL() ?? '#' }}" alt="product">
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="tf-product-bundle-infos">
                                        <div class="text-title">{{ $product_variant[0]->product->name }}</div>
                                        <div class="tf-product-bundle-variant tf-select">
                                            <select class=""
                                                name="combo_product[{{ $key }}][product_variant_id]"
                                                onchange="update_combo_product_price({{ $product_variant[0]->product_id }})">
                                                <option value="" disabled selected
                                                    data-sale_price="{{ $product->sale_price }}"
                                                    data-mrp_price="{{ $product->mrp_price }}">Select an option...
                                                </option>
                                                @foreach ($product_variant as $variant)
                                                    <option value="{{ $variant->id }}"
                                                        {{ product_variant_current_stock($variant->id) > 0 ? '' : 'disabled' }}
                                                        data-sale_price="{{ $variant->sale_price }}"
                                                        data-mrp_price="{{ $variant->mrp_price }}">
                                                        @foreach (json_decode($variant->attribute_value_ids) as $attribute_value_id)
                                                            {{ attribute_value_data($attribute_value_id)->name }}
                                                            {{ $loop->last ? '' : '/' }}
                                                        @endforeach
                                                        <small>({{ product_variant_current_stock($variant->id) > 0 ? 'In Stock' : 'Out of Stock' }})</small>
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="tf-product-info-price type-small">
                                            <h5 class="combo_product_sale_price">$00.00</h5>
                                            <div class="combo_product_mrp_price">$00.00</div>
                                            <div class="badges-on-sale">0%</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="tf-bundle-product-total-submit">
                                <h6>Total price:</h6>
                                <div class="tf-product-info-price type-1">
                                    <h4 class="" id="combo_product_total_sale_price">$00.00</h4>
                                    <div class="" id="combo_product_total_mrp_price">$00.00</div>
                                    <div class="badges-on-sale" id="combo_product_total_discount">0%</div>
                                </div>
                                @auth
                                    <button type="submit" class="tf-bundle-product-btn btn-style-2 text-btn-uppercase">Add to
                                        cart</button>
                                @else
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#global_modal"
                                        onclick="login_modal()"
                                        class="tf-bundle-product-btn btn-style-2 text-btn-uppercase">Add to cart</a>
                                @endauth
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </section>
    @endif --}}
    <!-- Slider -->
    @if (($product->enable_product_benefits ?? 0) == 1)
        <section class="flat-spacing pb-4" id="product_benefits">
            <div class="container">
                <div class="tf-slideshow slider-default slider-effect-fade">
                    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                        data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true">
                        <div class="swiper-wrapper">
                            @foreach ($product->getMedia('product_benefits_img') ?? [] as $file)
                                <div class="swiper-slide">
                                    <div class="wrap-slider">
                                        <img src="{{ $file->getURL() ?? '#' }}" alt="fashion-slideshow">
                                        {{-- <div class="box-content">
                                    <div class="content-slider">
                                        <div class="box-title-slider">
                                            <p class="fade-item fade-item-1 subheading text-btn-uppercase text-white"> collection Summer 2024</p>
                                            <div class="fade-item fade-item-2 heading text-white title-display">Be The First <br> To Wear</div>
                                        </div>
                                        <div class="fade-item fade-item-3 box-btn-slider">
                                            <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span  class="text">Explore Collection</span><i class="icon icon-arrowUpRight"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="wrap-pagination">
                        <div class="container">
                            <div class="sw-dots sw-pagination-slider type-circle white-circle justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- /Slider -->
    @if (($product->enable_product_features ?? 0) == 1)
        <section class="flat-spacing" id="product_features">
            <div class="container flat-animate-tab">
                <div class="product_benefits">
                    @forelse (($product->product_features ?? []) as $key => $product_features)
                        <div class="img-expand">
                            <div class="main-title_animate_title">{{ $product_features->title ?? '' }}</div>
                            <div class="on_hover_img_expand">
                                <div class="animat_desc">
                                    {{ $product_features->description ?? '' }}
                                </div>
                                <div class="animat_image">
                                    <img src="{{ asset($product_features->img ?? '#') }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- Slider -->
    @if (($product->enable_how_to_wear ?? 0) == 1)
        <section class="slider-padding" id="howtowear">
            <div class="container">
                <div class="tf-slideshow slider-style2">
                    <div class="row">
                        @forelse ((old('how_to_wear') ?? $product->how_to_wear ?? []) as $key => $how_to_wear)
                            <div class="col-md-{{ 12 / count($product->how_to_wear ?? []) }}">
                                <div class="video-container slider-radius-3">
                                    <iframe src="{{ $how_to_wear->vimeo_link ?? '' }}" frameborder="0"
                                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        @empty
                            <h4>No Video Found...!</h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- /Slider -->
    <!-- FAQs -->

    @if (($product->enable_faq ?? 0) == 1)
        <section class="flat-spacing" id="faqs">
            <div class="container">
                <div class="page-faqs-wrap">
                    <div class="list-faqs">
                        <div>
                            <h5 class="faqs-title">FAQs</h5>
                            <ul class="accordion-product-wrap style-faqs" id="accordion-faq">
                                @foreach (product_faqs_data(json_decode($product->faq_ids ?? '[]')) as $faq)
                                    <li class="accordion-product-item">
                                        <a href="#accordion-{{ $faq->id }}" class="accordion-title collapsed "
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="accordion-{{ $faq->id }}">
                                            <h6>{{ $faq->title ?? '' }}</h6>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="accordion-{{ $faq->id }}" class="collapse"
                                            data-bs-parent="#accordion-faq">
                                            <div class="accordion-faqs-content">
                                                <p class="text-secondary">{!! $faq->description ?? '' !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- /FAQs -->
    <!-- Product_Description_Accordion -->
    <section class="" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="accordion-product-wrap">
                        <li class="accordion-product-item">
                            <h6>Customer Reviews</h6>
                            <div id="accordion-2" class=" show" data-bs-parent="#accordion-product">
                                <div class="accordion-content tab-reviews write-cancel-review-wrap ">
                                    <div class="tab-reviews-heading">
                                        <div class="top">
                                            <div class="text-center">
                                                <div class="number title-display">
                                                    {{ product_review_rating_overall($product_reviews) }}</div>
                                                <div class="list-star">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p>({{ $total_review_count = count($product_reviews) }} Ratings)</p>
                                            </div>
                                            @php
                                                $five_start_count = $product_reviews->where('rate', 5)->count();
                                                $four_start_count = $product_reviews->where('rate', 4)->count();
                                                $three_start_count = $product_reviews->where('rate', 3)->count();
                                                $two_start_count = $product_reviews->where('rate', 2)->count();
                                                $one_start_count = $product_reviews->where('rate', 1)->count();
                                            @endphp
                                            <div class="rating-score">
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">5</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div
                                                            style="width: {{ $five_start_count == 0 ? 0 : ($five_start_count / $total_review_count) * 100 }}%;">
                                                        </div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">{{ $five_start_count }}</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">4</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div
                                                            style="width: {{ $four_start_count == 0 ? 0 : ($four_start_count / $total_review_count) * 100 }}%;">
                                                        </div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">{{ $four_start_count }}</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">3</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div
                                                            style="width: {{ $three_start_count == 0 ? 0 : ($three_start_count / $total_review_count) * 100 }}%;">
                                                        </div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">{{ $three_start_count }}</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">2</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div
                                                            style="width: {{ $two_start_count == 0 ? 0 : ($two_start_count / $total_review_count) * 100 }}%;">
                                                        </div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">{{ $two_start_count }}</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">1</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div
                                                            style="width: {{ $one_start_count == 0 ? 0 : ($one_start_count / $total_review_count) * 100 }}%;">
                                                        </div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">{{ $one_start_count }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            {{-- <div class="btn-style-4 text-btn-uppercase letter-1 btn-comment-review btn-cancel-review">Cancel Review</div> --}}

                                            @auth
                                                @if (check_review_exist(Auth::user()->id, $product->id))
                                                    <a href="{{ route('front.cancel_review', $product->id) }}"
                                                        class="btn-style-4 text-btn-uppercase letter-1 btn-comment-review btn-cancel-review d-block">Cancel
                                                        Review</a>
                                                @elseif(check_product_is_buy(Auth::user()->id, $product->id))
                                                    <div
                                                        class="btn-style-4 text-btn-uppercase letter-1 btn-comment-review btn-write-review">
                                                        Write a review</div>
                                                @endif
                                            @else
                                                <div class="btn-style-4 text-btn-uppercase letter-1 btn-comment-review btn-write-review"
                                                    onclick="login_modal()" data-bs-toggle="modal"
                                                    data-bs-target="#global_modal">Write a review</div>
                                            @endauth
                                        </div>
                                    </div>
                                    <div class="reply-comment style-1 cancel-review-wrap">
                                        <div
                                            class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                            <h4 class="">{{ sprintf('%02d', count($product_reviews)) }} Comments
                                            </h4>
                                            {{-- <div class="d-flex align-items-center gap-12">
                                                <div class="text-caption-1">Sort by:</div>
                                                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                                    <div class="btn-select">
                                                        <span class="text-sort-value">Most Recent</span>
                                                        <span class="icon icon-arrow-down"></span>
                                                    </div>
                                                    <div class="dropdown-menu">
                                                        <div class="select-item active">
                                                            <span class="text-value-item">Most Recent</span>
                                                        </div>
                                                        <div class="select-item">
                                                            <span class="text-value-item">Oldest</span>
                                                        </div>
                                                        <div class="select-item">
                                                            <span class="text-value-item">Most Popular</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="reply-comment-wrap">
                                            @forelse ($product_reviews ?? [] as $product_review)
                                                <div class="reply-comment-item">
                                                    <div class="user">
                                                        <div class="image">
                                                            <img src="{{ asset('front_assets/images/avatar/user-default.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <h6>
                                                                <a href="javascript:void(0);"
                                                                    class="link">{{ $product_review->title ?? 'N/A' }}</a>
                                                            </h6>
                                                            <div class="day text-secondary-2 text-caption-1">1 days ago
                                                                &nbsp;&nbsp;- &nbsp; By
                                                                {{ $product_review->user->name ?? 'N/A' }}</div>
                                                        </div>
                                                    </div>
                                                    <p class="text-secondary">{{ $product_review->comment ?? 'N/A' }}</p>
                                                </div>
                                            @empty

                                            @endforelse
                                        </div>
                                    </div>
                                    <form action="{{ route('front.add_review') }}" method="POST"
                                        class="form-write-review write-review-wrap">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="heading">
                                            <h4>Write a review:</h4>
                                            <div class="list-rating-check">
                                                <input type="radio" id="star5" name="rate" value="5">
                                                <label for="star5" title="text"></label>
                                                <input type="radio" id="star4" name="rate" value="4">
                                                <label for="star4" title="text"></label>
                                                <input type="radio" id="star3" name="rate" value="3">
                                                <label for="star3" title="text"></label>
                                                <input type="radio" id="star2" name="rate" value="2">
                                                <label for="star2" title="text"></label>
                                                <input type="radio" id="star1" name="rate" value="1"
                                                    checked>
                                                <label for="star1" title="text"></label>
                                            </div>
                                        </div>
                                        <div class="mb_32">
                                            <div class="mb_8">Review Title</div>
                                            <fieldset class="mb_20">
                                                <input class="" type="text"
                                                    placeholder="Give your review a title" name="title" tabindex="2"
                                                    value="" aria-required="true" required="">
                                            </fieldset>
                                            <div class="mb_8">Review</div>
                                            <fieldset class="mb_20">
                                                <textarea name="comment" class="" rows="4" placeholder="Write your comment here" tabindex="2"
                                                    aria-required="true" required=""></textarea>
                                            </fieldset>
                                            {{-- <div class="cols mb_20">
                                                <fieldset class="">
                                                    <input class="" type="text" placeholder="You Name (Public)" name="text" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <fieldset class="">
                                                    <input class="" type="email" placeholder="Your email (private)" name="email" tabindex="2"value="" aria-required="true" required="">
                                                </fieldset>
                                            </div> --}}
                                            {{-- <div class="d-flex align-items-center">
                                                <input type="radio" name="availability" class="tf-check"
                                                    id="check1">
                                                <label class="text-secondary" for="check1">Save my name, email, and
                                                    website in this browser for the next time I comment.</label>
                                            </div> --}}
                                        </div>
                                        <div class="button-submit">
                                            <button class="text-btn-uppercase" type="submit">Submit Reviews</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /Product_Description_Accordion -->
    <!-- Ralated Products -->
    <section class="flat-spacing">
        <div class="container flat-animate-tab">
            <ul class="tab-product justify-content-sm-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                <li class="nav-tab-item" role="presentation">
                    <a href="#ralatedProducts" class="active" data-bs-toggle="tab">Ralated Products</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="ralatedProducts" role="tabpanel">
                    <div dir="ltr" class="swiper tf-sw-latest" data-preview="6" data-tablet="4" data-mobile="2"
                        data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                        data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            @php
                                $page_product = $product;
                            @endphp
                            @foreach (related_products_random(6) as $product)
                                <div class="swiper-slide">
                                    @include('front.product_card')
                                </div>
                            @endforeach
                            @php
                                $product = $page_product;
                            @endphp
                        </div>
                        <div class="sw-pagination-latest sw-dots type-circle justify-content-center"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Ralated Products -->


@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('front_assets/js/drift.min.js') }}"></script>
    <script type="module" src="{{ asset('front_assets/js/model-viewer.min.js') }}"></script>
    <script type="module" src="{{ asset('front_assets/js/zoom.js') }}"></script>

    <script>
        // function change_rent_qty(value){
        //     var rent_qty = parseInt($('#rent_qty').val() || 0);
        //     var max_rent_qty = parseInt($('#rent_qty').attr('max') || 0);
        //     rent_qty += value;
        //     if(rent_qty < 1){ rent_qty = 1; }
        //     if(rent_qty > max_rent_qty){ rent_qty = max_rent_qty;
        //         $.notify({ message: 'Sorry we have only ' + max_rent_qty + ' items for subscription.' }, { type: 'danger', });
        //     }
        //     $('#rent_qty').val(rent_qty);
        //     var per_day_rent = parseFloat($('#rent-btn').data('per_day_rent') || 0);
        //     var rent_days = parseInt($('#rent_days').val() || 0);
        //     var total_rent = per_day_rent * rent_qty * rent_days;
        //     $('#total_rent_price').html('$' + total_rent + ' <small style="font-size:12px;"> </small>');
        // }
        // function change_rent_days(value){
        //     var rent_days = parseInt($('#rent_days').val() || 0);
        //     rent_days += value;
        //     if(rent_days < 7){
        //         rent_days = 7;
        //         $.notify({ message: 'Minimum subscription period is 7 days.' }, { type: 'danger', });
        //     }
        //     $('#rent_days').val(rent_days);
        //     var per_day_rent = parseFloat($('#rent-btn').data('per_day_rent') || 0);
        //     var rent_qty = parseInt($('#rent_qty').val() || 0);
        //     var total_rent = per_day_rent * rent_qty * rent_days;
        //     $('#total_rent_price').html('$' + total_rent + ' <small style="font-size:12px;"> </small>');
        // }
        // function toggle_order_one_time_box() {
        //     if ($('#one-time').is(':checked')) {
        //         $('#order_one_time_box').show(300);
        //         $('#order_subscribe_box').hide(300);
        //     } else {
        //         $('#order_one_time_box').hide(300);
        //         $('#order_subscribe_box').show(300);
        //     }
        // }
        // function calculate_combo_product_price() {
        //     var sale_price = 0;
        //     var mrp_price = 0;

        //     $('.combo_product_sale_price').each(function() {
        //         sale_price += parseFloat($(this).text().replace(/\$/g, ''));
        //     });
        //     $('.combo_product_mrp_price').each(function() {
        //         mrp_price += parseFloat($(this).text().replace(/\$/g, ''));
        //     });
        //     sale_price = Math.round(sale_price);
        //     mrp_price = Math.round(mrp_price);
        //     $('#combo_product_total_sale_price').html('$' + sale_price + ' <small style="font-size:12px;"> </small>');
        //     $('#combo_product_total_mrp_price').text('$' + mrp_price);
        //     $('#combo_product_total_discount').text(Math.round((((mrp_price - sale_price) / mrp_price) * 100)) + '%');
        // }

        // function update_combo_product_price(product_id) {
        //     var sale_price = ($('#combo_product_box_' + product_id + ' select option:selected').data('sale_price') || 0);
        //     var mrp_price = ($('#combo_product_box_' + product_id + ' select option:selected').data('mrp_price') || 0);

        //     $('#combo_product_box_' + product_id + ' .combo_product_sale_price').html('$' + sale_price +
        //         ' <small style="font-size:12px;"> </small>');
        //     $('#combo_product_box_' + product_id + ' .combo_product_mrp_price').text('$' + mrp_price);
        //     $('#combo_product_box_' + product_id + ' .badges-on-sale').text(Math.round((((mrp_price - sale_price) /
        //         mrp_price) * 100)) + '%');
        //     if ($('#combo_product_box_' + product_id + ' select:selected').data('current_stock') == 0) {
        //         $('#combo_product_box_' + product_id + ' .btn-add-to-cart').addClass('disabled');
        //     } else {
        //         $('#combo_product_box_' + product_id + ' .btn-add-to-cart').removeClass('disabled');
        //     }
        //     calculate_combo_product_price();
        // }

        // @foreach (json_decode($combo_product->product_ids ?? '[]') ?? [] as $product_id)
        //     update_combo_product_price({{ $product_id }});
        // @endforeach

        // calculate_combo_product_price();

        function add_to_cart(product_id, order_type, btn_type) {
            var qty = $('#order_qty').val();
            $.get('{{ route('ajax.add_to_cart') }}', {
                product_id: product_id,
                qty: qty,
                order_type: order_type
            }, function(data) {
                if (data.status == 200) {
                    $('#shoppingCart_html').html(data.html);
                    $('.nav-icon-item .count-box').text(data.cart_count);
                    if (btn_type == 'Buy now') {
                        window.location.href = "{{ route('front.checkout') }}";
                    }
                    // $.notify({ title:'Success', message:data.message }, { type:'success', });
                } else {
                    $.notify({
                        message: data.message
                    }, {
                        type: 'danger',
                    });
                }
            });
        }
    </script>
@endsection
