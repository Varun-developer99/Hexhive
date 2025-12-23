@extends('layouts.front.app')

@section('title', $order->order_no.' - Orders')

@section('css')
    <style>
        .account-orders table thead, .account-orders table td, .account-orders table th{
            padding: 5px 10px;
        }
    </style>
@endsection

@section('content')

<div class="btn-sidebar-account">
    <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount"><i class="icon icon-squares-four"></i></button>
</div>

<section class="flat-spacing">
    <div class="container">
        <div class="my-account-wrap">

            @include('front.dashboard.template.side_bar')

            <div class="my-account-content">
                <div class="account-order-details">
                    <div class="wd-form-order">
                        <div class="order-head">
                            {{-- <figure class="img-product">
                                <img src="images/products/womens/women-1.jpg" alt="product">
                            </figure> --}}
                            <div class="content">
                                <div class="badge bg-{{ $order->order_status == 'Delivered' ? 'success':'danger' }}">{{ $order->order_status }}</div>
                                <h6 class="mt-8 fw-5">Order: <small class="text-muted">#{{ $order->order_no }}</small></h6>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('front.order.invoice', $order->id) }}" class="btn btn-primary btn-sm" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16"> <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/> <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/> </svg>
                                    Download Invoice
                                </a>
                                {{-- @if ($order->order_status == 'Pending')
                                    <a href="{{ route('front.order.cancel', $order->id) }}" class="btn btn-danger btn-sm" target="_blank" rel="noopener noreferrer">Cancel Order</a>
                                @endif --}}
                            </div>
                        </div>
                        <div class="tf-grid-layout md-col-2 gap-15">
                            <div class="item">
                                <div class="text-2 text_black-2">Customer Details</div>
                                <div class="text-2 mt_4 fw-6">Name: <span class="text-muted">{{ $order->name }}</span></div>
                                <div class="text-2 mt_4 fw-6">Email: <span class="text-muted">{{ $order->email }}</span></div>
                                <div class="text-2 mt_4 fw-6">Phone: <span class="text-muted">{{ $order->phone }}</span></div>
                            </div>
                            <div class="item">
                                <div class="text-2 text_black-2">Address</div>
                                <div class="text-2 mt_4 fw-6">{{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->postcode }}, {{ $order->country }}</div>
                            </div>
                            <div class="item">
                                <div class="text-2 text_black-2">Order Date</div>
                                <div class="text-2 mt_4 fw-6">{{ ($order->created_at ?? '') ? date('d M, Y h:i A', strtotime($order->created_at)) : '' }}</div>
                            </div>
                            <div class="item">
                                <div class="text-2 text_black-2">Order Note: </div>
                                <div class="text-2 mt_4 fw-6">{{ $order->note ?? '-' }}</div>
                            </div>
                        </div>
                        <div class="widget-tabs style-3 widget-order-tab">
                            <ul class="widget-menu-tab">
                                <li class="item-title active">
                                    <span class="inner">Order History</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Item Details</span>
                                </li>
                                {{-- <li class="item-title">
                                    <span class="inner">Courier</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Receiver</span>
                                </li> --}}
                            </ul>
                            <div class="widget-content-tab">
                                <div class="widget-content-inner active">
                                    <div class="widget-timeline">
                                        <ul class="timeline">
                                            @foreach ($order->order_history as $key => $order_history)
                                            <li>
                                                <div class="timeline-badge {{ $loop->first ? 'success' : '' }}"></div>
                                                <div class="timeline-box">
                                                    <a class="timeline-panel" href="javascript:void(0);">
                                                        <div class="text-2 fw-6">{{ $order_history->order_status }}</div>
                                                        <span>{{ ($order_history->created_at ?? '') ? date('d M, Y h:i A', strtotime($order_history->created_at)) : '' }}</span>
                                                    </a>
                                                    <p><strong>Remarks : </strong>{{ $order_history->remarks }}</p>
                                                    {{-- <p><strong>Estimated Delivery Date : </strong>12/07/2024</p> --}}
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    @foreach ($order->order_details as $order_details)
                                    <div class="order-head">
                                        @foreach (($order_details->product->getMedia('main_img') ?? []) as $file)
                                        <figure class="img-product">
                                            <img src="{{ $file->getURL() ?? '#' }}" alt="product">
                                        </figure>
                                        @endforeach
                                        <div class="content">
                                            <div class="text-2 fw-6"> 
                                                <a href="{{ route('front.product', $order_details->product->slug ?? '#') }}" target="_blank" rel="noopener noreferrer">
                                                    {{ $order_details->product->name ?? '-' }}
                                                </a>
                                            </div>
                                            <div class="mt_4"><span class="fw-6">Variant :</span> @foreach (json_decode($order_details->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach</div>
                                            @if($order_details->order_type == 'Subscribe')
                                            <div class="mt_4"><span class="fw-6">Per Day Cost:</span> {{ price($order_details->per_day_rent ?? 0) }}</div>
                                            @else
                                            <div class="mt_4"><span class="fw-6">Price:</span> {{ price($order_details->sale_price ?? 0) }} x {{ $order_details->qty ?? 0 }}</div>
                                            @endif
                                        </div>
                                        @if ($order_details->order_type == 'Subscribe')
                                            <div class="subscribe-details border rounded p-2 ms-4 bg-light">
                                                <div class="mt_2"><span class="fw-6 text-muted">Subscribe for:</span> {{ $order_details->rent_days ?? 0 }} Days</div>
                                                <div class="mt_2"><span class="fw-6 text-muted">Quantity:</span> {{ $order_details->qty ?? 0 }}</div>
                                                <div class="mt_2"><span class="fw-6 text-muted">Total Rent:</span> ${{ ($order_details->per_day_rent ?? 0) }} x {{ $order_details->rent_days ?? 0 }} Days {{ ($order_details->extended_days ?? 0) ? ' + '.$order_details->extended_days.' Days' : '' }} x {{ $order_details->qty ?? 0 }} = <b>{{ price(($order_details->total_amount ?? 0)) }}</b></div>
                                            </div>
                                        @endif
                                        <div class="mt_4 ms-auto"><span class="fw-6">{{ price($order_details->total_amount ?? 0) }}</span> </div>
                                    </div>
                                    @endforeach
                                    <ul>
                                        <li class="d-flex justify-content-between text-2">
                                            <span>Sub Total</span>
                                            <span class="fw-6">{{ price($order->sub_total ?? 0) }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between text-2">
                                            <span>Discount {!! $order->coupon_code ? '<small class="text-muted">('.$order->coupon_code.')</small>' : '' !!}</span>
                                            <span class="fw-6"> -{{ price($order->discount ?? 0) }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between text-2">
                                            <span>Tax <small class="text-muted">(15% Included)</small></span>
                                            <span class="fw-6"> {{ price($order->tax_amount ?? 0) }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between text-2 mt_4 pb_8 line-bt">
                                            <span>Shipping</span>
                                            <span class="fw-6">{{ ($order->shipping_cost ?? 0) == 0 ? 'Free' : price($order->shipping_cost ?? 0) }}</span>

                                        </li>
                                        <li class="d-flex justify-content-between text-2 mt_8">
                                            <span>Order Total</span>
                                            <span class="fw-6">{{ price($order->grand_total ?? 0) }} NZD</span>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="widget-content-inner">
                                    <p>Our courier service is dedicated to providing fast, reliable, and secure delivery solutions tailored to meet your needs. Whether you're sending documents, parcels, or larger shipments, our team ensures that your items are handled with the utmost care and delivered on time. With a commitment to customer satisfaction, real-time tracking, and a wide network of routes, we make it easy for you to send and receive packages both locally and internationally. Choose our service for a seamless and efficient delivery experience.</p>
                                </div>
                                <div class="widget-content-inner">
                                    <p class="text-2 text-success">Thank you Your order has been received</p>
                                    <ul class="mt_20">
                                        <li>Order Number : <span class="fw-7">#17493</span></li>
                                        <li>Date : <span class="fw-7"> 17/07/2024, 02:34pm</span></li>
                                        <li>Total : <span class="fw-7">$18.95</span></li>
                                        <li>Payment Methods : <span class="fw-7">Cash on Delivery</span></li>

                                    </ul>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
