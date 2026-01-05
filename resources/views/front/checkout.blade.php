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
                                            <div class="payment-item d-none">
                                                <label for="delivery-method" class="payment-header collapsed" data-bs-toggle="collapse" data-bs-target="#delivery-payment" aria-controls="delivery-payment">
                                                    <input type="radio" name="payment-method" class="tf-check-rounded" id="delivery-method">
                                                    <span class="text-title">Cash on delivery</span>
                                                </label>
                                                <div id="delivery-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                            </div>
                                            <div class="payment-item d-none">
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
                                        <button type="button" class="tf-btn btn-reset w-100 mt-3" id="payBtn">Make Payment</button>
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
   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

   <script>
    document.getElementById('payBtn').onclick = function (e) {
        e.preventDefault();

        // Validate form fields
        const form = document.querySelector('form');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Calculate total amount
        const subTotal = {{ $sub_total = $cart->sum('total_amount') }};
        const discountAmount = {{ $discount_amount = ($sub_total * ($item->coupon->discount ?? 0)) / 100 }};
        const afterDiscount = subTotal - discountAmount;
        const taxAmount = {{ calculate_tax($sub_total - ($discount_amount ?? 0)) }};
        const shippingCost = {{ $sub_total >= 500 ? 0 : shipping_cost() }};
        const grandTotal = afterDiscount + shippingCost;

        // Create Razorpay order
        fetch("{{ route('front.razorpay.create_order') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ amount: grandTotal })
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) {
                alert('Error creating order: ' + data.error);
                return;
            }

            var options = {
                "key": data.key,
                "amount": data.amount,
                "currency": "INR",
                "name": "HexHive",
                "description": "Order Payment",
                "image": "{{ asset('front_assets/images/logo.png') }}",
                "order_id": data.order_id,
                "handler": function (response) {
                    // Payment successful, verify and place order
                    verifyPaymentAndPlaceOrder(response);
                },
                "prefill": {
                    "name": document.querySelector('input[name="name"]').value,
                    "email": "{{ auth()->user()->email }}",
                    "contact": document.querySelector('input[name="phone"]').value
                },
                "theme": {
                    "color": "#3399cc"
                },
                "modal": {
                    "ondismiss": function() {
                        console.log('Payment cancelled by user');
                    }
                }
            };

            var rzp = new Razorpay(options);
            rzp.on('payment.failed', function (response){
                alert('Payment failed: ' + response.error.description);
            });
            rzp.open();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Something went wrong. Please try again.');
        });
    }

    function verifyPaymentAndPlaceOrder(paymentResponse) {
        // Show loading state
        document.getElementById('payBtn').disabled = true;
        document.getElementById('payBtn').innerText = 'Processing...';

        // Verify payment and place order
        fetch("{{ route('front.razorpay.verify_payment') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                razorpay_order_id: paymentResponse.razorpay_order_id,
                razorpay_payment_id: paymentResponse.razorpay_payment_id,
                razorpay_signature: paymentResponse.razorpay_signature
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                // Now submit the form with payment details
                const form = document.querySelector('form');
                
                // Add payment details to form
                const paymentMethodInput = document.createElement('input');
                paymentMethodInput.type = 'hidden';
                paymentMethodInput.name = 'payment_method';
                paymentMethodInput.value = 'Razorpay';
                form.appendChild(paymentMethodInput);

                const paymentStatusInput = document.createElement('input');
                paymentStatusInput.type = 'hidden';
                paymentStatusInput.name = 'payment_status';
                paymentStatusInput.value = 'Paid';
                form.appendChild(paymentStatusInput);

                const paymentIdInput = document.createElement('input');
                paymentIdInput.type = 'hidden';
                paymentIdInput.name = 'payment_id';
                paymentIdInput.value = paymentResponse.razorpay_payment_id;
                form.appendChild(paymentIdInput);

                const orderIdInput = document.createElement('input');
                orderIdInput.type = 'hidden';
                orderIdInput.name = 'razorpay_order_id';
                orderIdInput.value = paymentResponse.razorpay_order_id;
                form.appendChild(orderIdInput);

                // Submit the form
                form.submit();
            } else {
                alert('Payment verification failed. Please contact support.');
                document.getElementById('payBtn').disabled = false;
                document.getElementById('payBtn').innerText = 'Make Payment';
            }
        })
        .catch(error => {
            console.error('Verification Error:', error);
            alert('Payment verification failed. Please contact support.');
            document.getElementById('payBtn').disabled = false;
            document.getElementById('payBtn').innerText = 'Make Payment';
        });
    }
    </script>
@endsection
