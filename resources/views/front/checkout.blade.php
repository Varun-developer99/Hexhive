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
                <form action="{{ route('front.place_order') }}" method="POST" id="checkoutForm">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="flat-spacing tf-page-checkout">
                                <div class="wrap">
                                    <h5 class="title">Information</h5>
                                    <div class="info-box">
                                        <div class="grid-2">
                                            <input type="text" name="name" placeholder="Full Name*" value="{{ auth()->user()->name ?? '' }}" required>
                                            <input type="text" name="phone" placeholder="Phone Number*" required>
                                        </div>
                                        <div class="grid-2">
                                            <input type="text" class="disabled" name="email" placeholder="Email Address*" value="{{ auth()->user()->email }}" readonly required>
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
                                    <h5 class="title">Payment Method</h5>
                                    <div class="payment-methods mb-3">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="payment_type" id="razorpay" value="razorpay" checked>
                                            <label class="form-check-label" for="razorpay">
                                                <img src="{{ asset('front_assets/images/payment/Razorpay_logo.png') }}" alt="Razorpay" style="height:20px; margin-left:10px;">
                                            </label>
                                        </div>
                                        <div class="form-check d-none">
                                            <input class="form-check-input" type="radio" name="payment_type" id="cod" value="cod">
                                            <label class="form-check-label" for="cod">
                                                Cash on Delivery (COD)
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" class="tf-btn btn-fill w-100" id="payBtn">Place Order</button>
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
        const form = document.getElementById('checkoutForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const paymentType = document.querySelector('input[name="payment_type"]:checked').value;

        if (paymentType === 'cod') {
            // For COD, directly submit the form
            const paymentMethodInput = document.createElement('input');
            paymentMethodInput.type = 'hidden';
            paymentMethodInput.name = 'payment_method';
            paymentMethodInput.value = 'COD';
            form.appendChild(paymentMethodInput);

            const paymentStatusInput = document.createElement('input');
            paymentStatusInput.type = 'hidden';
            paymentStatusInput.name = 'payment_status';
            paymentStatusInput.value = 'Pending';
            form.appendChild(paymentStatusInput);

            form.submit();
            return;
        }

        // Razorpay payment flow
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
                        document.getElementById('payBtn').disabled = false;
                    }
                }
            };

            var rzp = new Razorpay(options);
            rzp.on('payment.failed', function (response){
                alert('Payment failed: ' + response.error.description);
                document.getElementById('payBtn').disabled = false;
            });
            rzp.open();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Something went wrong. Please try again.');
        });
    }

    function verifyPaymentAndPlaceOrder(paymentResponse) {
        document.getElementById('payBtn').disabled = true;
        document.getElementById('payBtn').innerText = 'Processing...';

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
                const form = document.getElementById('checkoutForm');
                
                // Add payment details to form
                const inputs = [
                    { name: 'payment_method', value: 'Razorpay' },
                    { name: 'payment_status', value: 'Paid' },
                    { name: 'payment_id', value: paymentResponse.razorpay_payment_id },
                    { name: 'razorpay_order_id', value: paymentResponse.razorpay_order_id }
                ];

                inputs.forEach(inp => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = inp.name;
                    input.value = inp.value;
                    form.appendChild(input);
                });

                // Submit the form
                form.submit();
            } else {
                alert('Payment verification failed. Please contact support.');
                document.getElementById('payBtn').disabled = false;
                document.getElementById('payBtn').innerText = 'Place Order';
            }
        })
        .catch(error => {
            console.error('Verification Error:', error);
            alert('Payment verification failed. Please contact support.');
            document.getElementById('payBtn').disabled = false;
            document.getElementById('payBtn').innerText = 'Place Order';
        });
    }
    </script>
@endsection
