<div class="modal-content">
    <div class="tf-quick-view-image">
        <div class="wrap-quick-view wrapper-scroll-quickview">
            <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                <img class="lazyload" data-src="{{ $product->image_url ?? '#' }}" src="{{ $product->image_url ?? '#' }}" alt="">
            </div>
            @foreach (($product->gallery_urls ?? []) as $gallery_url)
            <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                <img class="lazyload" data-src="{{ $gallery_url ?? '#' }}" src="{{ $gallery_url ?? '#' }}" alt="">
            </div>
            @endforeach
        </div>
    </div>
    <div class="wrap">
        <div class="header">
            <h5 class="title">Quick View</h5>
            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
        </div>
        <div class="tf-product-info-list">
            <div class="tf-product-info-heading">
                <div class="tf-product-info-name">
                    <div class="text text-btn-uppercase">{{ $product->category->name ?? 'N/A' }}</div>
                    <h3 class="name">{{ $product->name ?? 'N/A' }}</h3>
                    <div class="sub">
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
                            <div class="text text-caption-1">18 sold in last 32 hours</div>
                        </div>
                    </div>
                </div>
                <div class="tf-product-info-desc">
                    <div class="tf-product-info-price">
                        <h5 class="price-on-sale font-2">{{ price($product->sale_price ?? 0) }}</h5>
                        <div class="compare-at-price font-2">{{ price($product->mrp_price ?? 0) }}</div>
                        <div class="badges-on-sale text-btn-uppercase">
                            {{ round(((($product->mrp_price ?? 0) - ($product->sale_price ?? 0)) / ($product->mrp_price ?? 0)) * 100) }}%
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
                
                <div>
                    <div class="tf-product-info-by-btn mb_10 align-items-end">
                        <div class="tf-product-info-quantity">
                            <div class="title mb_12">Quantity:</div>
                            <div class="wg-quantity">
                                <span class="btn-quantity btn-decrease">-</span>
                                <input class="quantity-product" type="text" name="number" value="1" id="order_qty_{{ $product->id }}" min="1" max="{{ $product->current_stock ?? 0 }}" data-product_id="{{ $product->id }}">
                                <span class="btn-quantity btn-increase">+</span>
                            </div>
                        </div>
                        @auth
                        <div>
                            <p class="text-danger stock_alert_msg" style="display: none;">Available Stock: <b>0</b></p>
                            <a href="#shoppingCart" data-bs-toggle="modal" onclick="add_to_cart({{ $product->id }}, 'Single', 'Add to cart')" class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price total-price">{{ price($product->sale_price ?? 0) }}</span></a>
                        </div>
                        @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="login_modal()" class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6"><span>Add to cart -&nbsp;</span><span class="tf-qty-price total-price">{{ price($product->sale_price ?? 0) }}</span></a>
                        @endauth
                        {{-- <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon hover-tooltip compare btn-icon-action show-compare">
                            <span class="icon icon-gitDiff"></span>
                            <span class="tooltip text-caption-2">Compare</span>
                        </a> --}}
                        {{-- <a href="javascript:void(0);" class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                            <span class="icon icon-heart"></span>
                            <span class="tooltip text-caption-2">Wishlist</span>
                        </a> --}}
                    </div>
                    @auth
                    <a href="javascript:void(0)" onclick="add_to_cart({{ $product->id }}, 'Single', 'Buy now')" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                    @else
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="login_modal()" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                     @endauth
                </div>

                <div class="tf-product-info-guranteed">
                    <div class="text-title">Guaranteed safe checkout:</div>
                    <div class="tf-payment">
                        <a href="#">
                            <img src="{{ asset('front_assets/images/payment/img-1.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front_assets/images/payment/img-2.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front_assets/images/payment/img-3.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front_assets/images/payment/img-4.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front_assets/images/payment/img-5.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front_assets/images/payment/img-6.png') }}" alt="">
                        </a>
                    </div>
                </div>

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
                </ul>
            </div>
                
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('front_assets/js/main.js') }}"></script>