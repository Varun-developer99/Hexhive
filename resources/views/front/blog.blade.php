@extends('layouts.front.app')

@section('title', 'Blogs')

@section('css')
    <style>
        .wg-blog.style-row.hover-image .image img {
            max-width: 100%;
        }
    </style>
@endsection

@section('content')

        <!-- page-title -->
        <div class="page-title" style="background-image: url({{ asset('front_assets/images/section/page-title.jpg') }})">
            
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center" style="color:#fff;">Blogs</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="{{ url('/') }}" style="color:#fff;">Home</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Blogs
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- blog-list -->
        <div class="main-content-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-lg-30">
                        @forelse ( $blogs as $blog)
                        <div class="wg-blog style-row hover-image mb_40">
                            <div class="image">
                                <img class="lazyload" data-src="{{ asset( $blog->img ?? '#') }}" src="{{ asset( $blog->img ?? '#') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-10">
                                    <div class="meta">
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-calendar"></i>
                                            </div>
                                            <p class="text-caption-1">{{ date('F j, Y', strtotime($blog->created_at)) }}</p>
                                        </div>
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>
                                            <p class="text-caption-1">by <a class="link" href="javascript:void(0)">{{ $blog->created_by->name ?? 'N/A' }}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="title">
                                    <a class="link" href="{{ route('front.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h5>
                                <p>{!! Str::limit($blog->description, 100) !!}</p>
                                <a href="{{ route('front.blog.show', $blog->slug) }}" class="link text-button bot-button">Read More</a>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse
                        
                        {{$blogs->links('vendor.pagination.modav-theme')}}
                        {{-- <div class="pages">
                            <ul class="wg-pagination">
                                <li>
                                    <a href="#" class="pagination-item text-button">1</a>
                                </li>
                                <li class="active">
                                    <div class="pagination
                        {{-- <ul class="wg-pagination">
                            <li>
                                <a href="#" class="pagination-item text-button">1</a>
                            </li>
                            <li class="active">
                                <div class="pagination-item text-button">2</div>
                            </li>
                            <li>
                                <a href="#" class="pagination-item text-button">3</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar maxw-360">
                            {{-- <div class="sidebar-item sidebar-search">
                                <form class="form-search">
                                    <fieldset class="text">
                                        <input type="email" placeholder="Your email address" class="" name="email" tabindex="0" value="" aria-required="true" required="">
                                    </fieldset>
                                    <button class="" type="submit">
                                        <svg class="icon" width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div> --}}
                            <div class="sidebar-item sidebar-relatest-post">
                                <h5 class="sidebar-heading">Relatest Post</h5>
                                <div>
                                    <div class="relatest-post-item hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset($latest_blog->img ?? '#') }}" src="{{ asset($latest_blog->img ?? '#') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <p class="text-caption-1">{{ date('F j, Y', strtotime($latest_blog->created_at)) }}</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <p class="text-caption-1">by <a class="link" href="javascript:void(0)">{{ $latest_blog->created_by->name ?? 'N/A' }}</a></p>
                                                </div>
                                            </div>
                                            <h6 class="title fw-5">
                                                <a class="link" href="{{ route('front.blog.show', $latest_blog->slug) }}">{{ $latest_blog->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                    @forelse ( $old_blogs as $old_blog)
                                    <div class="relatest-post-item style-row hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset($old_blog->img ?? '#') }}" src="{{ asset($old_blog->img ?? '#') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <p class="text-caption-1">{{ date('F j, Y', strtotime($old_blog->created_at)) }}</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <p class="text-caption-1">by <a class="link" href="javascript:void(0)">{{ $old_blog->created_by->name ?? 'N/A' }}</a></p>
                                                </div>
                                            </div>
                                            <div class="title text-title">
                                                <a class="link" href="{{ route('front.blog.show', $old_blog->slug) }}">{{ $old_blog->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        
                                    @endforelse
                                </div>
                            </div>
                            {{-- <div class="sidebar-item sidebar-categories">
                                <h5 class="sidebar-heading">Categories</h5>
                                <ul>
                                    <li>
                                        <a class="text-button link" href="#">Trending</a>
                                    </li>
                                    <li>
                                        <a class="text-button link" href="#">Fashion</a>
                                    </li>
                                    <li>
                                        <a class="text-button link" href="#">Outfit</a>
                                    </li>
                                    <li>
                                        <a class="text-button link" href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a class="text-button link" href="#">Beauty</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item sidebar-tag">
                                <h5 class="sidebar-heading">Popular Tag</h5>
                                <ul class="list-tags">
                                    <li>
                                        <a href="#" class="text-caption-1 link">Fashion Trends</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Sustainable Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Street Style</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Beauty Tips</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Street Style</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Vintage Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Eco Friendly</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-caption-1 link">Tips</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /blog-list -->

@endsection
