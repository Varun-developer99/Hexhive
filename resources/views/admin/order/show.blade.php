@extends('layouts.admin.app')

@section('title', $order->order_no.' - Order')

@section('css')
   <style>
        .card .card-body {
        padding: 20px;
        background-color: transparent;
        }
        .card-body {
        flex: 1 1 auto;
        padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
        color: var(--bs-card-color);
        }
        .track-order-details h6 {
        position: relative;
        }
        .track-order-details #order-status-timeline .status-bar {
        background-color: var(--recent-dashed-border);
        width: 80%;
        height: 3px;
        position: absolute;
        top: 18px;
        transform: translateX(-50%);
        left: 50%;
        }
        .progress, .progress-stacked {
        --bs-progress-height: 1rem;
        --bs-progress-font-size: 0.75rem;
        --bs-progress-bg: var(--bs-secondary-bg);
        --bs-progress-border-radius: var(--bs-border-radius);
        --bs-progress-box-shadow: var(--bs-box-shadow-inset);
        --bs-progress-bar-color: #fff;
        --bs-progress-bar-bg: #0d6efd;
        --bs-progress-bar-transition: width 0.6s ease;
        display: flex;
        height: var(--bs-progress-height);
        overflow: hidden;
        font-size: var(--bs-progress-font-size);
        background-color: var(--bs-progress-bg);
        border-radius: var(--bs-progress-border-radius);
        }
        .track-order-details #order-status-timeline .status-bar.progress.step-processing:after {
        width: 25%;
        }
        .track-order-details #order-status-timeline .status-bar.progress.step-packed:after {
        width: 50%;
        }
        .track-order-details #order-status-timeline .status-bar.progress.step-shipped:after {
        width: 75%;
        }
        .track-order-details #order-status-timeline .status-bar.progress.step-delivered:after {
        width: 100%;
        }
        .track-order-details #order-status-timeline .status-bar.progress:after {
        content: "";
        position: absolute;
        background-color: #06a9b2;
        height: 100%;
        }
        .track-order-details #order-status-timeline .main-status-line ul {
        position: relative;
        display: flex;
        }
        .track-order-details #order-status-timeline .main-status-line ul li {
        text-align: center;
        width: 22%;
        }
        .track-order-details #order-status-timeline .main-status-line ul li .order-process.active {
        border-color: #06a9b2;
        background-color: #06a9b2;
        color: #fff;
        }
        .track-order-details #order-status-timeline .main-status-line ul li .order-process {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        width: 38px;
        height: 38px;
        font-size: 16px;
        border-radius: 50%;
        color: var(--recent-dashed-border);
        border: 1px solid var(--recent-dashed-border);
        background-color: var(--white);
        }
        .track-order-details #order-status-timeline .main-status-line ul li .order-process span {
        line-height: 0;
        }

        .track-order-details #order-status-timeline .main-status-line ul li h6 {
            margin: 10px 0 0;
            color: #52526c;
            display: -webkit-box;
            max-width: 100%;
            -webkit-line-clamp: 2;
            height: auto;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tracking-total li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 12px;
        gap: 8px;
        }
        .tracking-total li:last-child {
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px solid rgba(82, 82, 108, 0.1);
        padding-bottom: 0;
        }
   </style>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Order Management</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-9 col-xl-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5>Order Status</h5>
                            @if ($order->order_status != 'Delivered')
                                <a class="btn btn-primary ms-auto" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#order_status">Change Status</a>
                                <!-- The Modal -->
                                <div class="modal fade" id="order_status">
                                    <div class="modal-dialog">
                                        <form action="{{ route('warehouse.order.change_status', $order->id) }}" method="post"
                                            id="updateForm" class="modal-content" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="mySmallModalLabel">Change Order Status</h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close" data-bs-original-title=""
                                                    title=""></button>
                                            </div>
                                            <div class="modal-body dark-modal">
                                                <div class="row">
                                                    <div class="col-md-12 form-group mb-3">
                                                        <h6>Order Status</h6>
                                                        <select class="form-select" name="order_status" id=""
                                                            required>
                                                            <option value="Order Placed" selected disabled>Order
                                                                Placed</option>
                                                            <option value="Processing"
                                                                {{ $order->order_status == 'Order Placed' ? 'selected' : '' }}
                                                                {{ $order->order_status == 'Processing' || $order->order_status == 'Order Packed' || $order->order_status == 'Shipped' || $order->order_status == 'Delivered' ? 'disabled' : '' }}>
                                                                Processing</option>
                                                            <option value="Packed"
                                                                {{ $order->order_status == 'Processing' ? 'selected' : '' }}
                                                                {{ $order->order_status == 'Packed' || $order->order_status == 'Shipped' || $order->order_status == 'Delivered' ? 'disabled' : '' }}>
                                                                Packed</option>
                                                            <option value="Shipped"
                                                                {{ $order->order_status == 'Packed' ? 'selected' : '' }}
                                                                {{ $order->order_status == 'Shipped' || $order->order_status == 'Delivered' ? 'disabled' : '' }}>
                                                                Shipped</option>
                                                            <option value="Delivered"
                                                                {{ $order->order_status == 'Shipped' ? 'selected' : '' }}
                                                                {{ $order->order_status == 'Delivered' ? 'disabled' : '' }}>
                                                                Delivered</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 form-group mb-3">
                                                        <h6>Remarks</h6>
                                                        <textarea class="form-control" name="remarks" id="" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer text-end">
                                                <button type="submit" id="update"
                                                    class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="card-body track-order-details">
                            <h6 id="order-status-timeline">
                                <div class="status-bar progress step-{{ Str::slug($order->order_status) }}"></div>
                                <div class="main-status-line">
                                    <ul>
                                        <li>
                                            <div class="order-process active"><span>1</span></div>
                                            <h6>Order Placed</h6>
                                            <small
                                                class="text-muted f-w-400">{{ date('d M, Y h:i A', strtotime($order->created_at)) }}</small>
                                        </li>
                                        <li>
                                            <div
                                                class="order-process {{ $order->order_status == 'Processing' || $order->order_status == 'Packed' || $order->order_status == 'Shipped' || $order->order_status == 'Delivered' ? 'active' : '' }}">
                                                <span>2</span></div>
                                            <h6>Processing</h6>
                                            @if ($order_history = App\Models\OrderHistory::where('order_id', $order->id)->where('order_status', 'Processing')->first())
                                                <small
                                                    class="text-muted f-w-400">{{ date('d M, Y h:i A', strtotime($order_history->date)) }}</small>
                                                <br>
                                                <small class="text-muted">{{ $order_history->remarks }}</small>
                                            @endif
                                        </li>
                                        <li>
                                            <div
                                                class="order-process {{ $order->order_status == 'Packed' || $order->order_status == 'Shipped' || $order->order_status == 'Delivered' ? 'active' : '' }}">
                                                <span>3</span></div>
                                            <h6>Order Packed</h6>
                                            @if ($order_history = App\Models\OrderHistory::where('order_id', $order->id)->where('order_status', 'Packed')->first())
                                                <small
                                                    class="text-muted f-w-400">{{ date('d M, Y h:i A', strtotime($order_history->date)) }}</small>
                                                <br>
                                                <small class="text-muted">{{ $order_history->remarks }}</small>
                                            @endif
                                        </li>
                                        <li>
                                            <div
                                                class="order-process {{ $order->order_status == 'Shipped' || $order->order_status == 'Delivered' ? 'active' : '' }}">
                                                <span>4</span></div>
                                            <h6>Shipped</h6>
                                            @if ($order_history = App\Models\OrderHistory::where('order_id', $order->id)->where('order_status', 'Shipped')->first())
                                                <small
                                                    class="text-muted f-w-400">{{ date('d M, Y h:i A', strtotime($order_history->date)) }}</small>
                                                <br>
                                                <small class="text-muted">{{ $order_history->remarks }}</small>
                                            @endif
                                        </li>
                                        <li>
                                            <div
                                                class="order-process {{ $order->order_status == 'Delivered' ? 'active' : '' }}">
                                                <span>5</span></div>
                                            <h6>Delivered</h6>
                                            @if ($order_history = App\Models\OrderHistory::where('order_id', $order->id)->where('order_status', 'Delivered')->first())
                                                <small
                                                    class="text-muted f-w-400">{{ date('d M, Y h:i A', strtotime($order_history->date)) }}</small>
                                                <br>
                                                <small class="text-muted">{{ $order_history->remarks }}</small>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h5>Invoice No.: #{{ $order->order_no }}</h5>
                            </div>
                        </div>
                        <div class="card-body order-details-product pt-0">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Product Info</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($order->order_details as $key => $order_details)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    @foreach (($order_details->product->getMedia('main_img') ?? []) as $file)
                                                        <img class="img-fluid img-40 me-2" src="{{ $file->getURL() ?? '#' }}" alt="user">
                                                    @endforeach
                                                    <div class="img-content-box">
                                                        {{-- <a class="f-w-500" href="{{ route('front.product', $order_details->product->slug ?? '#') }}" target="_blank">{{ $order_details->product->name ?? '-' }}</a> --}}
                                                        {{ $order_details->product->name ?? '-' }}
                                                      {{-- <p class="mb-0 f-light">@foreach (json_decode($order_details->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach</p> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td>{{ price_format($order_details->price ?? 0) }}</td>
                                            <td>{{ $order_details->qty ?? '-' }}</td>
                                            <td>{{ price_format($order_details->total_amount ?? 0) }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No data found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-no-border">
                            <div class="header-top summary-header">
                                <h5>Summary</h5>
                                <div class="card-header-right-icon">
                                    <a class="btn btn-primary" href="{{ route('warehouse.orders.invoice', $order->id) }}" target="_blank">
                                        {{-- <i class="fa fa-file-pdf-o"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16"> <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/> <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/> </svg>
                                        Invoice
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <ul class="tracking-total">
                                <li>
                                    <h6>Subtotal </h6><span> {{ price_format($order->sub_total ?? 0) }}</span>
                                </li>
                                {{-- @if (($order->discount_price ?? 0) != 0)
                                    <li>
                                        <h6>Coupon Discount <small>({{ $order->coupon_code ?? 'N/A' }})</small></h6>
                                        <span>(-)${{ $order->discount_price ?? 0 }}</span>
                                    </li>
                                @endif --}}
                                <li>
                                    <h6>Shipping </h6>{{ ($order->shipping_cost ?? 0) == 0 ? 'Free' : price_format($order->shipping_cost) }}</span>
                                </li>
                                <li>
                                    <h6>Total</h6><span>{{ price_format($order->grand_total ?? 0) }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h5>Customer Details</h5>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <ul class="customer-details">
                                <li>
                                    <h6>Name </h6><span>{{ $order->name }}</span>
                                </li>
                                <li>
                                    <h6>Email Address:</h6><span>{{ $order->email ?? '-' }}</span>
                                </li>
                                <li>
                                    <h6>Phone Number:</h6><span>{{ $order->phone ?? '-' }}</span>
                                </li>
                                <li>
                                    <h6>Address:</h6><span>{{ $order->address_1 }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }} - {{ $order->pincode }}</span>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12"> </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')
    
@endsection
