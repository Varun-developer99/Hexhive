@extends('layouts.front.app')

@section('title', 'Dashboard')

@section('css')

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
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="tf-icon-box style-2 justify-content-start">
                                    <div class="icon-box">
                                        <svg class="icon" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5078 10.8734V6.36686C16.5078 5.17166 16.033 4.02541 15.1879 3.18028C14.3428 2.33514 13.1965 1.86035 12.0013 1.86035C10.8061 1.86035 9.65985 2.33514 8.81472 3.18028C7.96958 4.02541 7.49479 5.17166 7.49479 6.36686V10.8734M4.11491 8.62012H19.8877L21.0143 22.1396H2.98828L4.11491 8.62012Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h6>Total Orders</h6>
                                        <p class="text-secondary">{{ $total_orders }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="tf-icon-box style-2 justify-content-start">
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="34" height="34"><path d="M7,18c-1.1,0-1.99,0.9-1.99,2S5.9,22,7,22s2-0.9,2-2S8.1,18,7,18z M17,18c-1.1,0-1.99,0.9-1.99,2s0.89,2,1.99,2s2-0.9,2-2 S18.1,18,17,18z M8.1,13h7.45c0.75,0,1.41-0.41,1.75-1.03L21,4.96L19.25,4l-3.7,7H8.53L4.27,2H1v2h2l3.6,7.59l-1.35,2.44 C4.52,15.37,5.48,17,7,17h12v-2H7L8.1,13z M12,2l4,4l-4,4l-1.41-1.41L12.17,7L8,7l0-2l4.17,0l-1.59-1.59L12,2z" stroke-width="0.5"   /></svg>
                                    </div>
                                    <div class="content">
                                        <h6>Processing Orders</h6>
                                        <p class="text-secondary">{{ $processing_orders }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="tf-icon-box style-2 justify-content-start">
                                    <div class="icon-box"><span class="icon icon-shipping"></span></div>
                                    <div class="content">
                                        <h6>Shipped Orders</h6>
                                        <p class="text-secondary">{{ $shipped_orders }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="tf-icon-box style-2 justify-content-start">
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/> </svg>
                                    </div>
                                    <div class="content">
                                        <h6>Delivered Orders</h6>
                                        <p class="text-secondary">{{ $delivered_orders }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
