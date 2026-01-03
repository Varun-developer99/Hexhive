@extends('layouts.front.app')

@section('title', 'Checkout')

@section('css')
    <style>
        
    </style>
@endsection

@section('content')

        <!-- page-title -->
        <div class="page-title" style="background: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('front_assets/images/section/6215.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color: #fff;">Checkout</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li><a class="link" style="color: #fff;" href="/">Home</a></li>
                            <li><i class="icon-arrRight"></i></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <section>
            <div class="container" >
                <form action="{{ route('front.place_order') }}" method="POST">
                    <div class="row">
                        <div class="col-xl-6">
                            @csrf
                            <div class="flat-spacing tf-page-checkout">
                                <div class="wrap">
                                    <h5 class="title">Information</h5>
                                    <div class="info-box">
                                        <div class="grid-2">
                                            <input type="text" name="name" placeholder="Full Name*" value="{{ auth()->user()->name ?? '' }}" required>
                                            <input type="text" name="phone" placeholder="Phone Number*" required>
                                        </div>
                                        <div class="grid-2">
                                            <input type="text" class="disabled" placeholder="Email Address*" value="{{ auth()->user()->email }}" readonly required>
                                            <input type="text" class="disabled" name="country" value="India" readonly required>
                                        </div>
                                        <div class="grid-2">
                                            <input type="text" name="address" placeholder="Street,..." required>
                                            <input type="text" name="city" placeholder="Town/City*" required>
                                        </div>
                                        <div class="grid-2">
                                            <div class="tf-select">
                                                <select name="states" id="required">
                                                    <option value="">Select State...</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>
                                            <input type="text" name="postcode" placeholder="Postal Code*" required>
                                        </div>
                                        <textarea name="note" placeholder="Write note..."></textarea>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h5 class="title">Choose payment Option:</h5>
                                    <form class="form-payment">
                                        <div class="payment-box" id="payment-box">
                                            <div class="payment-item payment-choose-card active">
                                                <label for="credit-card-method" class="payment-header" data-bs-toggle="collapse" data-bs-target="#credit-card-payment" aria-controls="credit-card-payment">
                                                    <input type="radio" name="payment-method" class="tf-check-rounded" id="credit-card-method" checked="">
                                                    <span class="text-title">Credit Card</span>
                                                </label>
                                                <div id="credit-card-payment" class="collapse show" data-bs-parent="#payment-box">
                                                    <div class="payment-body">
                                                        <p class="text-secondary">Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</p>
                                                        <div class="input-payment-box">
                                                            <input type="text" placeholder="Name On Card*">
                                                            <div class="ip-card">
                                                                <input type="text" placeholder="Card Numbers*">
                                                                <div class="list-card">
                                                                    <img src="{{ asset('front_assets/images/payment/img-7.png') }}" width="48" height="16" alt="card">
                                                                    <img src="{{ asset('front_assets/images/payment/img-8.png') }}" width="21" height="16" alt="card">
                                                                    <img src="{{ asset('front_assets/images/payment/img-9.png') }}" width="22" height="16" alt="card">
                                                                    <img src="{{ asset('front_assets/images/payment/img-10.png') }}" width="24" height="16" alt="card">
                                                                </div>
                                                            </div>
                                                            <div class="grid-2">
                                                                <input type="date">
                                                                <input type="text" placeholder="CVV*">
                                                            </div>
                                                        </div>
                                                        <div class="check-save">
                                                            <input type="checkbox" class="tf-check" id="check-card" checked="">
                                                            <label for="check-card">Save Card Details</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payment-item">
                                                <label for="delivery-method" class="payment-header collapsed" data-bs-toggle="collapse" data-bs-target="#delivery-payment" aria-controls="delivery-payment">
                                                    <input type="radio" name="payment-method" class="tf-check-rounded" id="delivery-method">
                                                    <span class="text-title">Cash on delivery</span>
                                                </label>
                                                <div id="delivery-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                            </div>
                                            <div class="payment-item">
                                                <label for="apple-method" class="payment-header collapsed" data-bs-toggle="collapse" data-bs-target="#apple-payment" aria-controls="apple-payment">
                                                    <input type="radio" name="payment-method" class="tf-check-rounded" id="apple-method">
                                                    <span class="text-title apple-pay-title"><img src="{{ asset('front_assets/images/payment/applePay.png') }}" alt="apple"> Apple Pay</span>
                                                </label>
                                                <div id="apple-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                            </div>
                                            <div class="payment-item paypal-item">
                                                <label for="paypal-method" class="payment-header collapsed" data-bs-toggle="collapse" data-bs-target="#paypal-method-payment" aria-controls="paypal-method-payment">
                                                    <input type="radio" name="payment-method" class="tf-check-rounded" id="paypal-method">
                                                    <span class="paypal-title"><img src="{{ asset('front_assets/images/payment/paypal.png') }}" alt="apple"></span>
                                                </label>
                                                <div id="paypal-method-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="tf-btn btn-reset w-100 mt-3">Make Payment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1">
                            <div class="line-separation"></div>
                        </div>
                        <div class="col-xl-5">
                            <div class="flat-spacing flat-sidebar-checkout">
                                <div class="sidebar-checkout-content">
                                    <h5 class="title">Shopping Cart</h5>
                                    {{-- <p class="">You are purchasing from a NewZealand registered company</p> --}}
                                    <div class="list-product">
                                        @foreach (($cart ?? []) as $item)
                                        <div class="item-product">
                                            <a href="{{ route('front.product',$item->product->slug) }}" class="img-product">
                                                @foreach (($item->product->getMedia('main_img') ?? []) as $file)
                                                    <img src="{{ $file->getURL() ?? '#' }}" alt="product">
                                                @endforeach
                                            </a>
                                            <div class="content-box">
                                                <div class="info">
                                                    <a href="{{ route('front.product',$item->product->slug) }}" class="name-product link text-title">{{ $item->product->name ?? 'N/A' }}</a>
                                                    <div class="variant text-caption-1 text-secondary">
                                                        @foreach (json_decode($item->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach
                                                        {{-- <span class="size">XL</span>/<span class="color">Blue</span> --}}
                                                    </div>
                                                </div>
                                                @if ($item->order_type == 'Subscribe')
                                                    <div class="subscribe-info">
                                                        <p>Per Day Cost: {{ price($item->per_day_rent) }} <small style="font-size:12px;"> </small></p>
                                                        <p>Subscribe For: {{ $item->rent_days }} days</p>
                                                        <div class="total-price text-button"><span class="count">{{ $item->qty ?? 0 }}</span>X<span class="price">{{ price(($item->per_day_rent ?? 0) * ($item->rent_days ?? 0)) }} = {{ price(($item->total_amount ?? 0)) }}</span> </div>
                                                    </div>
                                                @else
                                                    <div class="total-price text-button"><span class="count">{{ $item->qty ?? 0 }}</span>X<span class="price">{{ price($item->total_amount ?? 0) }}</span></div>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    {{-- <div class="sec-discount">
                                        <div dir="ltr" class="swiper tf-sw-categories swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-preview="2.25" data-tablet="3" data-mobile-sm="2.5" data-mobile="1.2" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                                            <div class="swiper-wrapper" id="swiper-wrapper-2f4a22757f9f98810" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide swiper-slide-active" style="width: 220px; margin-right: 20px;" role="group" aria-label="1 / 3">
                                                    <div class="box-discount">
                                                        <div class="discount-top">
                                                            <div class="discount-off">
                                                                <div class="text-caption-1">Discount</div>
                                                                <span class="sale-off text-btn-uppercase">10% OFF</span>
                                                            </div>
                                                            <div class="discount-from">
                                                                <p class="text-caption-1">For all orders <br> from 200$</p>
                                                            </div>
                                                        </div>
                                                        <div class="discount-bot">
                                                            <span class="text-btn-uppercase">Mo234231</span>
                                                            <button class="tf-btn"><span class="text">Apply Code</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" style="width: 220px; margin-right: 20px;" role="group" aria-label="2 / 3">
                                                    <div class="box-discount active">
                                                        <div class="discount-top">
                                                            <div class="discount-off">
                                                                <div class="text-caption-1">Discount</div>
                                                                <span class="sale-off text-btn-uppercase">10% OFF</span>
                                                            </div>
                                                            <div class="discount-from">
                                                                <p class="text-caption-1">For all orders <br> from 200$</p>
                                                            </div>
                                                        </div>
                                                        <div class="discount-bot">
                                                            <span class="text-btn-uppercase">Mo234231</span>
                                                            <button class="tf-btn"><span class="text">Apply Code</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 220px; margin-right: 20px;">
                                                    <div class="box-discount">
                                                        <div class="discount-top">
                                                            <div class="discount-off">
                                                                <div class="text-caption-1">Discount</div>
                                                                <span class="sale-off text-btn-uppercase">10% OFF</span>
                                                            </div>
                                                            <div class="discount-from">
                                                                <p class="text-caption-1">For all orders <br> from 200$</p>
                                                            </div>
                                                        </div>
                                                        <div class="discount-bot">
                                                            <span class="text-btn-uppercase">Mo234231</span>
                                                            <button class="tf-btn"><span class="text">Apply Code</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                        <div class="ip-discount-code">
                                            <input type="text" placeholder="Add voucher discount">
                                            <button class="tf-btn"><span class="text">Apply Code</span></button>
                                        </div>
                                        <p>Discount code is only used for orders with a total value of products over $500.00</p>  
                                    </div> --}}
                                    <div class="sec-total-price">
                                        <div class="top">
                                            <div class="item d-flex align-items-center justify-content-between text-button">
                                                <span>Sub Total</span>
                                                <span>{{ price($sub_total = $cart->sum('total_amount')) }}    </small></span>
                                            </div>
                                            <div class="item d-flex align-items-center justify-content-between text-button">
                                                <span>Discounts</span>
                                                <span>-{{ price($discount_amount = ($sub_total * ($item->coupon->discount ?? 0)) / 100) }}    </small></span>
                                            </div>
                                            <div class="item d-flex align-items-center justify-content-between text-button">
                                                <span>Tax <small style="color: rgba(33, 37, 41, 0.75)">(15% Included)</small></span>
                                                <span>{{ price(calculate_tax($sub_total -= ($discount_amount ?? 0))) }}    </small></span>
                                            </div>
                                            <div class="item d-flex align-items-center justify-content-between text-button">
                                                <span>Shipping</span>
                                                <span>₹{{ $sub_total >= 500 ? ($shipping_cost = 0) : ($shipping_cost = shipping_cost()) }}.00    </small></span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <h5 class="d-flex justify-content-between">
                                                <span>Total</span>
                                                <span class="total-price-checkout">{{ price($sub_total + $shipping_cost) }}    </small></span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
@endsection

@section('scripts')
   
@endsection
