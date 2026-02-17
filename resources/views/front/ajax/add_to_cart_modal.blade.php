{{-- <div class="tf-mini-cart-threshold">
    <div class="tf-progress-bar">
        <div class="value" style="width: 0%;" data-progress="75">
            <i class="icon icon-shipping"></i>
        </div>
    </div>
    <div class="text-caption-1">
        Congratulations! You've got free shipping!
    </div>
</div> --}}
<div class="tf-mini-cart-wrap">
    <div class="tf-mini-cart-main">
        <div class="tf-mini-cart-sroll">
            <div class="tf-mini-cart-items">
                @forelse ($cart_items as $item)
                    <div class="tf-mini-cart-item file-delete" id="cart_item_{{ $item->id }}">
                        <div class="tf-mini-cart-image">
                            <div class="swiper-slide stagger-item">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ $item->product->image_url ?? '#' }}"
                                        src="{{ $item->product->image_url ?? '#' }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tf-mini-cart-info flex-grow-1">
                            <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                <div class="text-title">
                                    <a href="product-detail.html"
                                        class="link text-line-clamp-1">{{ $item->product->name ?? 'N/A' }}</a>
                                </div>
                                <div class="text-button tf-btn-remove remove" onclick="remove_from_cart({{ $item->id }})">
                                    Remove</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                <div class="text-button">{{ $item->qty }} X {{ price($item->sale_price ?? 0) }}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="container">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-8">
                                <div class="tf-page-cart-checkout">
                                    <div class="d-flex gap-10 align-items-center mb_20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path
                                                d="M15.32 3H8.68c-.26 0-.52.11-.7.29L3.29 7.98c-.18.18-.29.44-.29.7v6.63c0 .27.11.52.29.71l4.68 4.68c.19.19.45.3.71.3h6.63c.27 0 .52-.11.71-.29l4.68-4.68c.19-.19.29-.44.29-.71V8.68c0-.27-.11-.52-.29-.71l-4.68-4.68c-.18-.18-.44-.29-.7-.29zM12 17.3c-.72 0-1.3-.58-1.3-1.3s.58-1.3 1.3-1.3 1.3.58 1.3 1.3-.58 1.3-1.3 1.3zm0-4.3c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1s1 .45 1 1v4c0 .55-.45 1-1 1z">
                                            </path>
                                        </svg>
                                        <h5 class="fw-5">Cart is empty</h5>
                                    </div>
                                    <p class="mb_20">You have no items in your cart.</p>
                                    <a href="{{ route('front.shop') }}"
                                        class="btn-style-2 mb_20 w-100 radius-3 justify-content-center">
                                        <span class="text text-btn-uppercase">Continue Shopping</span>
                                    </a>
                                    {{-- <p>Have a question? <a href="contact.html" class="text-primary">Contact Support</a>
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Related Products Slider -->
    @if(isset($related_products) && count($related_products) > 0)
    <div class="tf-mini-cart-related">
        <div class="related-products-header">
            <h6 class="related-title">You May Also Like</h6>
        </div> 
         <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile="3" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                @foreach($related_products as $product)
                <div class="swiper-slide">
                    <div class="related-product-card">
                        <a href="{{ route('front.product', $product->slug) }}" class="related-product-img">
                            <img src="{{ $product->thumb_url }}" alt="{{ $product->name }}" loading="lazy">
                        </a>
                        <div class="related-product-info">
                            <a href="{{ route('front.product', $product->slug) }}" class="related-product-name">{{ Str::limit($product->name, 25, '...') }}</a>
                            <div class="related-product-price">
                                <span class="sale-price">₹{{ $product->sale_price }}</span>
                                @if($product->mrp_price > $product->sale_price)
                                <del class="mrp-price">₹{{ $product->mrp_price }}</del>
                                @endif
                            </div>
                            <button type="button" class="related-add-btn" onclick="add_to_cart({{ $product->id }}, 'Single', 'Add to cart')">
                                <span class="plus-icon">+</span> Add
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
      
   
    
    <div class="tf-mini-cart-bottom">   
        <div class="tf-mini-cart-tool">
            <div class="tf-mini-cart-tool-btn btn-add-coupon">
                <svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.3247 11.1751L11.3497 17.1501C11.1949 17.305 11.0111 17.428 10.8087 17.5118C10.6064 17.5957 10.3895 17.6389 10.1705 17.6389C9.95148 17.6389 9.7346 17.5957 9.53227 17.5118C9.32994 17.428 9.14613 17.305 8.99134 17.1501L1.83301 10.0001V1.66675H10.1663L17.3247 8.82508C17.6351 9.13735 17.8093 9.55977 17.8093 10.0001C17.8093 10.4404 17.6351 10.8628 17.3247 11.1751V11.1751Z"
                        stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.99902 5.83325H6.00902" stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
                <div class="text-caption-1" id="toggleCoupons" >View All Coupons</div>
            </div>
        </div>
        <div class="tf-mini-cart-bottom-wrap">
            <div class="tf-cart-totals-discounts">
                <span>Subtotal </span>
                <span class="tf-totals-total-value">{{ price(($subtotal ?? 0)) }}</span>
            </div>
            @if(isset($applied_coupon) && $applied_coupon && $discount_amount > 0)
            <div class="tf-cart-totals-discounts" style="font-size: 12px;">
                <span>Discount ({{ $applied_coupon->code }}) </span>
                <span class="tf-totals-total-value">- {{ price($discount_amount) }}</span>
            </div>
            <div class="tf-cart-totals-discounts" style="border-top: 1px solid #eee; padding-top: 8px;">
                <span>Total </span>
                <span class="tf-totals-total-value">{{ price($subtotal - $discount_amount) }}</span>
            </div>
            @endif
            <div class="tf-mini-cart-view-checkout">
                <a href="{{ route('front.cart') }}" class="tf-btn w-100 btn-white radius-4 has-border"><span
                        class="text">View cart</span></a>
                <a href="{{ route('front.checkout') }}" class="tf-btn w-100 btn-fill radius-4"><span class="text">Check
                        Out</span></a>
            </div>
        </div>
        <div class="tf-mini-cart-tool-openable add-note">
            <div class="tf-mini-cart-tool-content">
                <label for="Cart-note" class="tf-mini-cart-tool-text">
                    <span class="icon">
                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6766_32777)">
                                <path
                                    d="M9.16699 3.33325H3.33366C2.89163 3.33325 2.46771 3.50885 2.15515 3.82141C1.84259 4.13397 1.66699 4.55789 1.66699 4.99992V16.6666C1.66699 17.1086 1.84259 17.5325 2.15515 17.8451C2.46771 18.1577 2.89163 18.3333 3.33366 18.3333H15.0003C15.4424 18.3333 15.8663 18.1577 16.1788 17.8451C16.4914 17.5325 16.667 17.1086 16.667 16.6666V10.8333"
                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M15.417 2.0832C15.7485 1.75168 16.1981 1.56543 16.667 1.56543C17.1358 1.56543 17.5855 1.75168 17.917 2.0832C18.2485 2.41472 18.4348 2.86436 18.4348 3.3332C18.4348 3.80204 18.2485 4.25168 17.917 4.5832L10.0003 12.4999L6.66699 13.3332L7.50033 9.99986L15.417 2.0832Z"
                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                            <defs>
                                <clippath id="clip0_6766_32777">
                                    <rect width="20" height="20" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </span>
                    <span class="text-title">Note</span>
                </label>
                <form class="form-add-note tf-mini-cart-tool-wrap">
                    <fieldset class="d-flex">
                        <textarea name="note" id="Cart-note"
                            placeholder="Add special instructions for your order..."></textarea>
                    </fieldset>
                    <div class="tf-cart-tool-btns">
                        <button type="submit" class="btn-style-2 w-100"><span
                                class="text text-btn-uppercase">Save</span></button>
                        <div class="text-center w-100 text-btn-uppercase tf-mini-cart-tool-close">Cancel</div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tf-mini-cart-tool-openable add-coupon" id="couponBox" style="display: none;"> 
            <div class="tf-mini-cart-tool-content"  style="position: relative;">
                <div class="header">
                    <h5 class="title">Selected Coupon</h5>
                    <span class="icon-close icon-close-popup" id="closeCoupon"></span>
                </div>
                @if(isset($coupons) && count($coupons) > 0)
                <div class="sec-discount" style="padding: 6px 8px; border-top: 1px solid #eee;">
                    <div dir="ltr" class="swiper tf-sw-discount" data-preview="3" data-space="10">
                        <div class="swiper-wrapper">
                            @foreach($coupons as $coupon)
                            <div class="swiper-slide">
                                <div class="box-discount" style="background: #faf8ec; border-radius: 8px; padding: 10px; color: #381d10; min-width:180px;">
                                    <div class="discount-top" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                        <div class="discount-off">
                                            <div style="font-size: 11px; opacity: 0.85;">Discount</div>
                                            <span style="font-size: 16px; font-weight: 800;">{{ $coupon->discount }}% OFF</span>
                                        </div>
                                        <div class="discount-from" style="text-align: right;">
                                            <p style="font-size: 10px; opacity: 0.9; margin: 0;">For all<br>orders</p>
                                        </div>
                                    </div>
                                    <div class="discount-bot" style="display: flex; justify-content: space-between; align-items: center; background: rgba(255,255,255,0.22); border-radius: 6px; padding: 6px 10px;">
                                        <span style="font-size: 11px; font-weight: 700;">{{ $coupon->code }}</span>
                                        <button type="button" class="btn-apply-coupon" data-coupon-code="{{ $coupon->code }}" style="background: #fff; color: #667eea; border: none; border-radius: 5px; padding: 4px 8px; font-size: 10px; font-weight: 700; cursor: pointer;">
                                            @if($applied_coupon && $applied_coupon->id == $coupon->id)
                                                Applied ✓
                                            @else
                                                Apply
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    const toggleBtn = document.getElementById('toggleCoupons');
    const couponBox = document.getElementById('couponBox');
    const closeBtn  = document.getElementById('closeCoupon');

    // View All Coupons click
    toggleBtn.addEventListener('click', function () {
        couponBox.style.display = 'block';
        this.innerText = 'Hide Coupons';
    });

    // Close button click
    closeBtn.addEventListener('click', function () {
        couponBox.style.display = 'none';
        toggleBtn.innerText = 'View All Coupons';
    });
</script>