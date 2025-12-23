@extends('layouts.front.app')

@section('title', 'My Orders')

@section('css')
    <style>
        .account-orders table thead, .account-orders table td, .account-orders table th{
            padding: 5px 10px;
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
                <div class="account-orders">
                    <div class="wrap-account-order">
                        <table>
                            <thead>
                                <tr>
                                    <th class="fw-6">Order</th>
                                    <th class="fw-6">Order Date</th>
                                    <th class="fw-6">Orders Status</th>
                                    <th class="fw-6">Payment Status</th>
                                    <th class="fw-6">Total Amount</th>
                                    {{-- <th class="fw-6">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                <tr class="tf-order-item">
                                    <td><a href="{{ route('customer.order.show', $item->id) }}" style="color: #007bff; font-weight: 500;">#{{ $item->order_no ?? '#' }}</a></td>
                                    <td>{{ ($item->created_at ?? '') != '' ? date('M d, Y', strtotime($item->created_at)) : '-' }}</td>
                                    <td><span class="badge rounded-pill badge-b-{{ ($item->order_status ?? '') == 'Delivered' ? 'success':'primary' }}">{{ $item->order_status ?? '-' }}</span></td>
                                    <td><span class="badge rounded-pill badge-b-{{ ($item->payment_status ?? '') == 'Paid' ? 'success':'danger' }}">{{ $item->payment_status ?? '-' }}</span></td>
                                    <td>{{ price($item->grand_total ?? 0) }}</td>
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
    </div>
</section>
@endsection
