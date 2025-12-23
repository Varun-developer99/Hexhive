@extends('layouts.front.app')

@section('title', $order->order_no. ' - Order Complete')

@section('css')
    <style>
        
    </style>
@endsection

@section('content')

        <!-- page-title -->
        <div class="page-title" style="background-image: url({{ asset('front_assets/images/section/page-title.jpg')}})">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color: #fff;">{{ $order->invoice_no }} - Order Complete</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li><a class="link" style="color: #fff;" href="/">Home</a></li>
                            <li><i class="icon-arrRight"></i></li>
                            <li>Order Complete</li>
                            <li><i class="icon-arrRight"></i></li>
                            <li>{{ $order->invoice_no }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <section class="flat-spacing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h5 class="fw-5 mb_20">Order Information</h5>
                        <div class="tf-page-cart-checkout">
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Date</div>
                                <p>{{ ($order->created_at ?? '') ? date('d M, Y h:i A', strtotime($order->created_at)) : '' }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Name</div>
                                <p>{{ $order->name ?? 'N/A' }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Email</div>
                                <p>{{ $order->email ?? 'N/A' }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Phone</div>
                                <p>{{ $order->phone ?? 'N/A' }}</p>
                            </div>
                            <div class="d-flex align-items-start justify-content-between mb_15">
                                <div class="fs-18">Address</div>
                                <p style="max-width: 250px;">{{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }}, {{ $order->postcode }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_24">
                                <div class="fs-22 fw-6">Total Amount</div>
                                <span class="total-value fw-6">{{ price($order->grand_total ?? 0) }}</span>
                            </div>
                            <div class="d-flex gap-10">
                                <a href="{{ route('front.shop') }}" class="tf-btn w-100 btn-white radius-4 has-border"><span class="text">Continue Shopping</span></a>
                                <a href="{{ route('customer.order.show', $order->id) }}" class="tf-btn w-100 btn-fill radius-4"><span class="text">Track Order</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
@endsection

@section('scripts')
   
@endsection
