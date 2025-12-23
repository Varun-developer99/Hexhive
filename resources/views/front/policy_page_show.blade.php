@extends('layouts.front.app')

@section('title', $policy_page->title)

@section('css')
    <style>
        .clear_css *{
            margin: revert;
            padding: revert;
        }
    </style>
@endsection

@section('content')

        <!-- page-title -->
        <div class="page-title" style="background-image: url({{ asset('front_assets/images/section/page-title.jpg')}})">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color: #fff;">{{ $policy_page->title }}</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" style="color: #fff;" href="/">Home</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                {{ $policy_page->title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <section class="flat-spacing">
            <div class="container">
                <div class="terms-of-use-wrap">
                    <div class="col-md-12 clear_css">
                        <h4 class="heading">Terms of use</h4>
                        <div class="terms-of-use-item item-scroll-target" data-scroll="terms">
                            {!! $policy_page->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
