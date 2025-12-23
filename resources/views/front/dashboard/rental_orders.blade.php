@extends('layouts.front.app')

@section('title', 'Rental Order Items')

@section('css')
    <style>
        .account-orders table thead, .account-orders table td, .account-orders table th{
            padding: 5px 10px;
        }
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            vertical-align: revert !important;
        }
        .badge{
            font-family: Roboto, sans-serif;
            font-weight: 500;
            line-height: 1.1;
            padding: 6px 12px;
            font-size: 12px;
            background: transparent;
        }
        .txt-primary {
            color: #7366FF !important;
        }
         .txt-secondary {
            color: #838383 !important;
        }
        .txt-success {
            color: #28a745 !important;
        }
        .txt-danger {
            color: #dc3545 !important;
        }
        .txt-warning {
            color: #ffc107 !important;
        }
        .txt-info {
            color: #17a2b8 !important;
        }
        .badge-b-primary {
            border: 1px solid #7366FF;
            color: #7366FF
        }
        .badge-b-secondary {
            border: 1px solid #838383;
            color: #838383
        }
        .badge-b-success {
            border: 1px solid #28a745;
            color: #28a745
        }
        .badge-b-danger {
            border: 1px solid #dc3545;
            color: #dc3545
        }
        .badge-b-warning {
            border: 1px solid #ffc107;
            color: #ffc107
        }
        .badge-b-info {
            border: 1px solid #17a2b8;
            color: #17a2b8
        }
        .demo-label {
            position: revert;
            top: revert;
            right: revert;
            gap: revert;
            display: revert;
        }
        .demo-label span{
            font-size: 12px;
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

            <div class="my-account-content table-responsive">
                <div class="account-orders">
                    <table style="white-space: nowrap;">
                        <thead>
                            <tr>
                                <th class="fw-6">Product</th>
                                <th class="fw-6">Rental Details</th>
                                <th class="fw-6">Rental Status</th>
                                <th class="fw-6">Order No.</th>
                                <th class="fw-6">Order Date</th>
                                <th class="fw-6">Orders Status</th>
                                <th class="fw-6">Payment Status</th>
                                <th class="fw-6">Total Amount</th>
                                {{-- <th class="fw-6">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_details as $item)
                            <tr class="tf-order-item">
                                <td class="wd-form-order">
                                    <div class="order-head mb-0 p-0">
                                        @foreach (($item->product->getMedia('main_img') ?? []) as $file)
                                        <figure class="img-product">
                                            <img src="{{ $file->getURL() ?? '#' }}" alt="product">
                                        </figure>
                                        @endforeach
                                        <div class="content">
                                            <div class="text-2 fw-6"> 
                                                <a href="{{ route('front.product', $item->product->slug ?? '#') }}" target="_blank" rel="noopener noreferrer">
                                                    {{ $item->product->name ?? '-' }}
                                                </a>
                                            </div>
                                            <div class="mt_4"><span class="fw-6"></span> @foreach (json_decode($item->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach</div>
                                            <a href="javascript:void(0);" class="demo-label" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="get_rental_activity({{ $item->id }})">
                                                <span class="demo-hot"><i class="icon-timer me-1"></i> View Rental Activity</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <ul class="subscribe-details" style="font-size: 14px;">
                                        <li><span class="fw-6 text-muted">Per Day Cost:</span> {{ price($item->per_day_rent ?? 0) }}</li>
                                        <li><span class="fw-6 text-muted">Subscribe for:</span> {{ $item->rent_days ?? 0 }} Days {{ ($item->extended_days ?? 0) ? ' + '.$item->extended_days.' Days' : '' }}</li>
                                        <li><span class="fw-6 text-muted">Quantity:</span> {{ $item->qty ?? 0 }}</li>
                                        <li><span class="fw-6 text-muted">Total Rent:</span> ${{ ($item->per_day_rent ?? 0) }} x {{ $item->rent_days ?? 0 }} Days {{ ($item->extended_days ?? 0) ? ' + '.$item->extended_days.' Days' : '' }} x {{ $item->qty ?? 0 }} = {{ price(($item->per_day_rent ?? 0) * ($item->rent_days ?? 0) * ($item->qty ?? 0)) }}</li>
                                    </ul>
                                </td>
                                <td>
                                    @if (($item->rental_status ?? '') == 'Delivered')
                                    <span class="badge rounded-pill badge-b-primary pointer">{{ $item->rental_status }}</span>
                                    @elseif(($item->rental_status ?? '') == 'Returned')
                                    <span class="badge rounded-pill badge-b-success pointer">{{ $item->rental_status }}</span>
                                    @else
                                    <span class="badge rounded-pill badge-b-primary">{{ $item->rental_status ?? '-' }}</span>
                                    @endif
                                    @if (($item->rental_status ?? '') == 'Delivered' || ($item->rental_status ?? '') == 'Extended')
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="extend_rental_modal({{ $item->id }})">Extend Rental</a>
                                    @endif
                                    <p>{{ $item->rental_start_date ? date('d M, Y', strtotime($item->rental_start_date)) : 'N/A' }} - {{ $item->rental_end_date ? date('d M, Y', strtotime($item->rental_end_date)) : 'N/A' }}</p>
                                    @if ($item->item_received_date ?? false)
                                        <p>Item Received Date: {{ date('d M, Y', strtotime($item->item_received_date)) }}</p>
                                    @endif
                                </td>
                                <td><a href="{{ route('customer.order.show', $item->order->id) }}" style="color: #007bff; font-weight: 500;">#{{ $item->order->order_no ?? '#' }}</a></td>
                                <td>{{ ($item->order->created_at ?? '') != '' ? date('M d, Y', strtotime($item->order->created_at)) : '-' }}</td>
                                <td><span class="badge rounded-pill badge-b-{{ ($item->order->order_status ?? '') == 'Delivered' ? 'success':'primary' }}">{{ $item->order->order_status ?? '-' }}</span></td>
                                <td><span class="badge rounded-pill badge-b-{{ ($item->order->payment_status ?? '') == 'Paid' ? 'success':'danger' }}">{{ $item->order->payment_status ?? '-' }}</span></td>
                                <td>{{ price($item->order->grand_total ?? 0) }}</td>
                                {{-- <td>
                                    <a href="{{ route('customer.order.show', $item->id) }}" class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="25" height="25" fill="currentColor"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                    </a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
    function get_rental_activity(id){
        $('#global_modal_size').removeClass();
        $('#global_modal_size').addClass('modal-dialog modal-dialog-centered');
        $(`#gloab_modal_ajax_html`).html('<div class="text-center p-4"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>');
        $.get(`{{ route('ajax.get_rental_activity') }}`,{id:id}, function(data){
            $(`#gloab_modal_ajax_html`).html(data);
        });
    }
    function extend_rental_modal(id){
        $('#global_modal_size').removeClass();
        $('#global_modal_size').addClass('modal-dialog modal-dialog-centered modal-lg');
        $(`#gloab_modal_ajax_html`).html('<div class="text-center p-4"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>');
        $.get(`{{ route('ajax.extend_rental_modal') }}`,{id:id}, function(data){
            $(`#gloab_modal_ajax_html`).html(data);
        });
    }
</script>