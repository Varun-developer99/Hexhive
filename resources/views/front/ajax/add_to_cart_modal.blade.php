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
                        @foreach (($item->product->getMedia('main_img') ?? []) as $file)
                            <div class="swiper-slide stagger-item" data-color="{{ $color ?? 'N/A' }}">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ $file->getURL() ?? '#' }}" src="{{ $file->getURL() ?? '#' }}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="tf-mini-cart-info flex-grow-1">
                        <div
                            class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                            <div class="text-title">
                                <a href="product-detail.html" class="link text-line-clamp-1">{{ $item->product->name ?? 'N/A' }}</a>
                            </div>
                            <div class="text-button tf-btn-remove remove" onclick="remove_from_cart({{ $item->id }})">Remove</div>
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                            <div class="text-secondary-2">
                                @foreach (json_decode($item->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach
                            </div>
                            @if ($item->order_type == 'Subscribe')
                                <div class="text-secondary-2">Rent Days: {{ $item->rent_days }}</div>
                                <div class="text-button">{{ $item->qty }} X {{ price($item->per_day_rent ?? 0) }}</div>
                            @else
                                <div class="text-button">{{ $item->qty }} X {{ price($item->sale_price ?? 0) }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="container">
                    <div class="row align-items-center justify-content-center py-5">
                        <div class="col-8">
                            <div class="tf-page-cart-checkout">
                                <div class="d-flex gap-10 align-items-center mb_20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.32 3H8.68c-.26 0-.52.11-.7.29L3.29 7.98c-.18.18-.29.44-.29.7v6.63c0 .27.11.52.29.71l4.68 4.68c.19.19.45.3.71.3h6.63c.27 0 .52-.11.71-.29l4.68-4.68c.19-.19.29-.44.29-.71V8.68c0-.27-.11-.52-.29-.71l-4.68-4.68c-.18-.18-.44-.29-.7-.29zM12 17.3c-.72 0-1.3-.58-1.3-1.3s.58-1.3 1.3-1.3 1.3.58 1.3 1.3-.58 1.3-1.3 1.3zm0-4.3c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1s1 .45 1 1v4c0 .55-.45 1-1 1z"></path></svg>
                                    <h5 class="fw-5">Cart is empty</h5>
                                </div>
                                <p class="mb_20">You have no items in your cart.</p>
                                <a href="{{ route('front.shop') }}" class="btn-style-2 mb_20 w-100 radius-3 justify-content-center">
                                    <span class="text text-btn-uppercase">Continue Shopping</span>
                                </a>
                                {{-- <p>Have a question? <a href="contact.html" class="text-primary">Contact Support</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforelse
                
            </div>
        </div>
    </div>
    <div class="tf-mini-cart-bottom">
        {{-- <div class="tf-mini-cart-tool">
            <div class="tf-mini-cart-tool-btn btn-add-note">
                <svg width="21" height="20" viewbox="0 0 21 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_6133_36620)">
                        <path
                            d="M10 3.33325H4.16667C3.72464 3.33325 3.30072 3.50885 2.98816 3.82141C2.67559 4.13397 2.5 4.55789 2.5 4.99992V16.6666C2.5 17.1086 2.67559 17.5325 2.98816 17.8451C3.30072 18.1577 3.72464 18.3333 4.16667 18.3333H15.8333C16.2754 18.3333 16.6993 18.1577 17.0118 17.8451C17.3244 17.5325 17.5 17.1086 17.5 16.6666V10.8333"
                            stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path
                            d="M16.25 2.0832C16.5815 1.75168 17.0312 1.56543 17.5 1.56543C17.9688 1.56543 18.4185 1.75168 18.75 2.0832C19.0815 2.41472 19.2678 2.86436 19.2678 3.3332C19.2678 3.80204 19.0815 4.25168 18.75 4.5832L10.8333 12.4999L7.5 13.3332L8.33333 9.99986L16.25 2.0832Z"
                            stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_6133_36620">
                            <rect width="20" height="20" fill="white"
                                transform="translate(0.833008)"></rect>
                        </clippath>
                    </defs>
                </svg>
                <div class="text-caption-1">Note</div>
            </div>
            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.333 2.5H0.833008V13.3333H13.333V2.5Z" stroke="#181818"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M13.333 6.66675H16.6663L19.1663 9.16675V13.3334H13.333V6.66675Z"
                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M4.58333 17.4999C5.73393 17.4999 6.66667 16.5672 6.66667 15.4166C6.66667 14.266 5.73393 13.3333 4.58333 13.3333C3.43274 13.3333 2.5 14.266 2.5 15.4166C2.5 16.5672 3.43274 17.4999 4.58333 17.4999Z"
                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M15.4163 17.4999C16.5669 17.4999 17.4997 16.5672 17.4997 15.4166C17.4997 14.266 16.5669 13.3333 15.4163 13.3333C14.2657 13.3333 13.333 14.266 13.333 15.4166C13.333 16.5672 14.2657 17.4999 15.4163 17.4999Z"
                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
                <div class="text-caption-1">Shipping</div>
            </div>
            <div class="tf-mini-cart-tool-btn btn-add-gift">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                    viewbox="0 0 17 18" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.99566 2.73409C2.99566 0.55401 5.42538 -0.746668 7.23916 0.463462L8.50073 1.30516L9.7623 0.463462C11.5761 -0.746668 14.0058 0.55401 14.0058 2.73409V3.24744H14.8225C15.9633 3.24744 16.8881 4.17233 16.8881 5.31312V6.82566C16.8881 7.21396 16.5734 7.52873 16.1851 7.52873H15.8905V15.1877C15.8905 15.1905 15.8905 15.1933 15.8905 15.196C15.886 16.7454 14.6286 18 13.0782 18H3.92323C2.37003 18 1.11091 16.7409 1.11091 15.1877V7.52877H0.81636C0.42806 7.52877 0.113281 7.21399 0.113281 6.82569V5.31316C0.113281 4.17228 1.03812 3.24744 2.179 3.24744H2.99566V2.73409ZM4.40181 3.24744H7.79765V2.52647L6.45874 1.63317C5.57987 1.0468 4.40181 1.67677 4.40181 2.73409V3.24744ZM9.20381 2.52647V3.24744H12.5996V2.73409C12.5996 1.67677 11.4216 1.0468 10.5427 1.63317L9.20381 2.52647ZM2.179 4.6536C1.81472 4.6536 1.51944 4.94888 1.51944 5.31316V6.12261H5.73398L5.734 4.6536H2.179ZM5.73401 7.52877V13.9306C5.73401 14.1806 5.86682 14.4119 6.08281 14.5379C6.29879 14.6639 6.56545 14.6657 6.78312 14.5426L8.50073 13.5715L10.2183 14.5426C10.436 14.6657 10.7027 14.6639 10.9187 14.5379C11.1346 14.4119 11.2674 14.1806 11.2674 13.9306V7.52873H14.4844V15.1603C14.4844 15.1627 14.4843 15.1651 14.4843 15.1675V15.1877C14.4843 15.9643 13.8548 16.5938 13.0782 16.5938H3.92323C3.14663 16.5938 2.51707 15.9643 2.51707 15.1877V7.52877H5.73401ZM15.482 6.12258V5.31312C15.482 4.94891 15.1867 4.6536 14.8225 4.6536H11.2674V6.12258H15.482ZM9.86129 4.6536H7.14017V12.7254L8.15469 12.1518C8.36941 12.0304 8.63204 12.0304 8.84676 12.1518L9.86129 12.7254V4.6536Z">
                    </path>
                </svg>
                <div class="text-caption-1">Gift</div>
            </div>
            <div class="tf-mini-cart-tool-btn btn-add-coupon">
                <svg width="21" height="20" viewbox="0 0 21 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.3247 11.1751L11.3497 17.1501C11.1949 17.305 11.0111 17.428 10.8087 17.5118C10.6064 17.5957 10.3895 17.6389 10.1705 17.6389C9.95148 17.6389 9.7346 17.5957 9.53227 17.5118C9.32994 17.428 9.14613 17.305 8.99134 17.1501L1.83301 10.0001V1.66675H10.1663L17.3247 8.82508C17.6351 9.13735 17.8093 9.55977 17.8093 10.0001C17.8093 10.4404 17.6351 10.8628 17.3247 11.1751V11.1751Z"
                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M5.99902 5.83325H6.00902" stroke="#181818" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="text-caption-1">Coupon</div>
            </div>
        </div> --}}
        <div class="tf-mini-cart-bottom-wrap">
            <div class="tf-cart-totals-discounts">
                <h5>Subtotal </h5>
                <h5 class="tf-totals-total-value">{{ price(($cart_items->sum('total_amount') ?? 0)) }} <small style="font-size: 12px">NZD </small></h5>
            </div>
            {{-- <div class="tf-cart-checkbox">
                <div class="tf-checkbox-wrapp">
                    <input class="" type="checkbox" id="CartDrawer-Form_agree"
                        name="agree_checkbox">
                    <div>
                        <i class="icon-check"></i>
                    </div>
                </div>
                <label for="CartDrawer-Form_agree"> I agree with <a href="term-of-use.html" title="Terms of Service">Terms & Conditions</a></label>
            </div> --}}
            <div class="tf-mini-cart-view-checkout">
                <a href="{{ route('front.cart') }}" class="tf-btn w-100 btn-white radius-4 has-border"><span class="text">View cart</span></a>
                <a href="{{ route('front.checkout') }}" class="tf-btn w-100 btn-fill radius-4"><span class="text">Check Out</span></a>
            </div>
            {{-- <div class="text-center">
                <a class="link text-btn-uppercase" href="shop-default-grid.html">Or continue shopping</a>
            </div> --}}
        </div>
    </div>
</div>