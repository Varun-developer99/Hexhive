@extends('layouts.front.app')

@section('title', 'Cart')

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
                        <h3 class="heading text-center" style="color: #fff;">Cart</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li><a class="link" style="color: #fff;" href="/">Home</a></li>
                            <li><i class="icon-arrRight"></i></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <section class="flat-spacing">
            <div class="container">
                <form action="{{ route('front.update_cart') }}" method="POST" class="row">
                    @csrf
                    <div class="col-xl-8">
                        {{-- <div class="tf-cart-sold">
                            <div class="notification-sold bg-surface">
                                <img class="icon" src="images/logo/icon-fire.png" alt="img">
                                <div class="count-text">Your cart will expire in <div class="js-countdown time-count" data-timer="600" data-labels=":,:,:,"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">:</span></span><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--1 js-countdown__value--1">00</span><span class="countdown__label">:</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">09</span><span class="countdown__label">:</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">38</span><span class="countdown__label"></span></span></div></div> minutes! Please checkout now before your items sell out!</div>  
                            </div>
                            <div class="notification-progress">
                                <div class="text">Buy <span class="fw-semibold text-primary">$70.00</span> more to get <span class="fw-semibold">Freeship</span></div>
                                <div class="progress-cart">
                                    <div class="value" style="width: 50%;" data-progress="50">
                                        <span class="round"></span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @if (count($cart) == 0)
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
                        @else
                            <table class="tf-table-page-cart">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cart as $key => $item)
                                    @php
                                        $current_stock = 0;
                                    @endphp
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="{{ route('front.product', $item->product->slug ?? '#') }}" class="img-box">
                                                <img src="{{ $item->product->image_url ?? '#' }}" alt="product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="{{ route('front.product', $item->product->slug ?? '#') }}" class="cart-title link">{{ $item->product->name ?? 'N/A' }}</a>
                                            </div>
                                        </td>
                                        <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                            <div class="cart-price text-button price-on-sale">{{ price($item->sale_price ?? 0) }}</div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <input type="hidden" name="cart[{{ $key }}][id]" value="{{ $item->id }}">
                                            <div class="wg-quantity mx-md-auto" onclick="update_cart_amount()">
                                                <span class="btn-quantity btn-decrease">-</span>
                                                <input type="number" class="quantity-product" name="cart[{{ $key }}][qty]" value="{{ $item->qty ?? 0 }}" max="{{ $current_stock = $item->product->current_stock ?? 0 }}" min="1" data-product_id="{{ $item->product_id }}">
                                                <span class="btn-quantity btn-increase">+</span>
                                            </div>
                                            <p class="text-danger text-center" id="stock_alert_msg_{{ $item->product_id }}" style="display: none;">Available Stock: <b>{{ $current_stock }}</b></p>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                            <div class="cart-total text-button total-price">{{ price($item->total_amount ?? 0) }}</div>
                                        </td>
                                        <td data-cart-title="Remove" class="remove-cart" onclick="remove_from_cart({{ $item->id }}); update_cart_amount();"><span class="remove icon icon-close"></span></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Your cart is empty</td> 
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="ip-discount-code">
                                @if ($item->coupon ?? '')
                                    <div class="alert alert-success">
                                        Coupon Applied : <strong>{{ $item->coupon->code }}</strong> 
                                        <span class="btn btn-danger btn-sm float-end" style="cursor:pointer" onclick="remove_coupon()">Remove Coupon</span>
                                        <input type="hidden" name="coupon_discount" id="coupon_discount" value="{{ $item->coupon->discount }}">
                                    </div>
                                @else
                                    <input type="text" placeholder="Add voucher discount" name="coupon_code" id="coupon_code" value="{{ session('coupon_code') ?? '' }}">
                                    <button type="button" class="tf-btn" onclick="applyCoupon()"><span class="text">Apply Code</span></button>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="col-xl-4">
                        <div class="fl-sidebar-cart">
                            <div class="box-order bg-surface">
                                <h5 class="title">Order Summary</h5>
                                <div class="subtotal text-button d-flex justify-content-between align-items-center">
                                    <span>Subtotal </span>
                                    <span class="total" id="sub_total">{{ price($sub_total = ($cart->sum('total_amount'))) }}</span>
                                </div>
                                <div class="discount text-button d-flex justify-content-between align-items-center">
                                    <span>Discounts</span>
                                    <span class="discount_amount">-{{ price($discount_amount = ($sub_total * ($item->coupon->discount ?? 0)) / 100) }} </span>
                                </div>
                                <div class="discount text-button d-flex justify-content-between align-items-center">
                                    <span>Tax <small style="color: rgba(33, 37, 41, 0.75)">(18% Included)</small></span>
                                    <span class="tax">{{ price(calculate_tax($sub_total -= ($discount_amount ?? 0))) }} </span>
                                </div>
                                <div class="discount text-button d-flex justify-content-between align-items-center">
                                    <span>Shipping Charges</span>
                                    <span class="total" id="shipping_cost">₹{{ $sub_total >= 500 ? ($shipping_cost = 0) : ($shipping_cost = shipping_cost()) }}.00 </span>
                                </div>
                                {{-- <div class="ship">
                                    <span class="text-button">Shipping</span>
                                    <div class="flex-grow-1">
                                        <fieldset class="ship-item">
                                            <input type="radio" name="ship-check" class="tf-check-rounded" id="free" checked="">
                                            <label for="free">
                                                <span>Free Shipping</span>
                                                <span class="price">${{ shipping_cost() }}.00</span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="ship-item">
                                            <input type="radio" name="ship-check" class="tf-check-rounded" id="local">
                                            <label for="local">
                                                <span>Local:</span>
                                                <span class="price">$35.00</span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="ship-item">
                                            <input type="radio" name="ship-check" class="tf-check-rounded" id="rate">
                                            <label for="rate">
                                                <span>Flat Rate:</span>
                                                <span class="price">$35.00</span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div> --}}
                                <h5 class="total-order d-flex justify-content-between align-items-center">
                                    <span>Total </span>
                                    <span class="total" id="grand_total">{{ price($sub_total + $shipping_cost) }}</span>
                                </h5>
                                <div class="box-progress-checkout">
                                    <fieldset class="check-agree">
                                        <input type="checkbox" id="check-agree" class="tf-check-rounded" required>
                                        <label for="check-agree">
                                            I agree with the <a href="{{ url('') }}/p/terms-and-conditions">terms and conditions</a>
                                        </label>
                                    </fieldset>
                                    <button type="submit" class="tf-btn"><span class="text">Process To Checkout</span></button>
                                    <p class="text-button text-center">Or <a href="{{ route('front.shop') }}">continue shopping</a></p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

@endsection

@section('scripts')
    <script>
        function applyCoupon(){
            var coupon_code = $('#coupon_code').val();
            $.get('{{ url('apply_coupon') }}', { coupon_code: coupon_code }, function(data){
                if(data.status == 1){
                    var html = `
                        <div class="alert alert-success">
                            Coupon Applied : <strong>${data.coupon.code}</strong> 
                            <span class="btn btn-danger btn-sm float-end" style="cursor:pointer" onclick="remove_coupon()">Remove Coupon</span>
                            <input type="hidden" name="coupon_discount" id="coupon_discount" value="${data.coupon.discount}">
                        </div>`;
                    $('.ip-discount-code').html(html);
                    update_cart_amount();
                    $.notify({ title:'Success', message:data.message }, { type:'success', });
                }else{
                    $.notify({ title:'Error', message:data.message }, { type:'danger', });
                }
            });
        }

        function remove_coupon(){
            $.get('{{ url('remove_coupon') }}', function(data){
                if(data.status == 1){
                    $('.ip-discount-code').html('<input type="text" placeholder="Add voucher discount" name="coupon_code" id="coupon_code" value=""> <button type="button" class="tf-btn" onclick="applyCoupon()"><span class="text">Apply Code</span></button>');
                    update_cart_amount();
                    $.notify({ title:'Success', message:data.message }, { type:'success', });
                }else{
                    $.notify({ title:'Error', message:data.message }, { type:'danger', });
                }
            });
        }

        function update_cart_amount() {
            var sub_total = 0;
            $('.total-price').each(function() {
                sub_total += parseFloat(($(this).text()).replace('₹', ''));
            })
            if(sub_total >= 500){
                shipping_cost = 0;
            }else{
                shipping_cost = {{ shipping_cost() }};
            }

            $('#sub_total').html('₹' + sub_total.toFixed(2));

            var coupon_discount = parseFloat($('#coupon_discount').val()) || 0;
            if (coupon_discount) {
                var discount_amount = (sub_total * coupon_discount) / 100;
                sub_total -= discount_amount;
            }else{
                discount_amount = 0;
            }

            $('.discount_amount').html('-₹' + discount_amount.toFixed(2));
            
            // Update tax amount display
            tax = sub_total - (sub_total / 1.15);
            $('.tax').html('₹' + tax.toFixed(2));
            $('#shipping_cost').html('₹' + shipping_cost.toFixed(2));
            var grand_total = sub_total + shipping_cost;
            $('#grand_total').html('₹' + grand_total.toFixed(2));
        }

        // Trigger applyCoupon() on Enter key press
        $(document).on('keypress', '#coupon_code', function(e) {
            if (e.which === 13) { // 13 is the keycode for Enter
                e.preventDefault(); // Prevent form submission
                applyCoupon();
            }
        });
    </script>
@endsection
