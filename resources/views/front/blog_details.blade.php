@extends('layouts.front.app')

@section('title', $blog->title)

@section('css')
    <style>
        
    </style>
@endsection

@section('content')

        <!-- blog-detail -->
        <div class="blog-detail-wrap">
            <div class="image" style="background-image: url({{ asset($blog->img ?? '#') }})"></div>
            <div class="inner">
                <div class="heading">
                    <ul class="list-tags has-bg justify-content-center">
                        <li>
                            <a href="javascript:void(0);" class="link">Fidelity</a>
                        </li>
                    </ul>
                    <h3 class="fw-5">{{ $blog->title }}</h3>
                    <div class="meta justify-content-center">
                        <div class="meta-item gap-8">
                            <div class="icon">
                                <i class="icon-calendar"></i>
                            </div>
                            <p class="body-text-1">{{ $blog->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="meta-item gap-8">
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                            <p class="body-text-1">by <a class="link" href="#">{{ $blog->created_by->name }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    {!! $blog->description !!}
                </div>
            </div>
        </div>
        <!-- /blog-detail -->

        <!-- Related Articles -->
        {{-- <section class="flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center">
                            <h3>Related Articles</h3>
                            <p class="body-text-1">Discover the Hottest Fashion News and Trends Straight from the Runway</p>
                        </div>
                        <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wg-blog style-1 hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset('front_assets/images/blog/blog-grid-1.jpg') }}" src="{{ asset('front_assets/images/blog/blog-grid-1.jpg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <p class="text-caption-1">February 28, 2024</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <p class="text-caption-1">by <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="title fw-5">
                                                    <a class="link" href="blog-detail.html">How Technology is Transforming the Industry</a>
                                                </h6>
                                                <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wg-blog style-1 hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset('front_assets/images/blog/blog-grid-2.jpg') }}" src="{{ asset('front_assets/images/blog/blog-grid-2.jpg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <p class="text-caption-1">February 28, 2024</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <p class="text-caption-1">by <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="title fw-5">
                                                    <a class="link" href="blog-detail.html">The Future of Fashion How Technology Transforms the Industry</a>
                                                </h6>
                                                <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wg-blog style-1 hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset('front_assets/images/blog/blog-grid-3.jpg') }}" src="{{ asset('front_assets/images/blog/blog-grid-3.jpg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <p class="text-caption-1">February 28, 2024</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <p class="text-caption-1">by <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="title fw-5">
                                                    <a class="link" href="blog-detail.html">From Concept to Closet The Journey of Sustainable Fashion</a>
                                                </h6>
                                                <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wg-blog style-1 hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset('front_assets/images/blog/blog-grid-2.jpg') }}" src="{{ asset('front_assets/images/blog/blog-grid-2.jpg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <p class="text-caption-1">February 28, 2024</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <p class="text-caption-1">by <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="title fw-5">
                                                    <a class="link" href="blog-detail.html">The Future of Fashion How Technology Transforms the Industry</a>
                                                </h6>
                                                <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wg-blog style-1 hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset('front_assets/images/blog/blog-grid-3.jpg') }}" src="{{ asset('front_assets/images/blog/blog-grid-3.jpg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <p class="text-caption-1">February 28, 2024</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <p class="text-caption-1">by <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="title fw-5">
                                                    <a class="link" href="blog-detail.html">From Concept to Closet The Journey of Sustainable Fashion</a>
                                                </h6>
                                                <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-recent sw-dots type-circle d-flex justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- /Related Articles -->

@endsection
