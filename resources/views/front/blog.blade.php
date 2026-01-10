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
        <div class="page-title" style="background: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('front_assets/images/section/6215.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            
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
                                <img class="lazyload" data-src="{{ asset( $blog->image_url ?? '#') }}" src="{{ asset( $blog->image_url ?? '#') }}" alt="">
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
                                            <p class="text-caption-1">by <a class="link" href="javascript:void(0)">{{ $blog->created_by->name ?? 'Admin' }}</a></p>
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
                        
                        {{ $blogs->links() }}
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar maxw-360">
                            <div class="sidebar-item sidebar-relatest-post">
                                <h5 class="sidebar-heading">Relatest Post</h5>
                                <div>
                                    <div class="relatest-post-item hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="{{ asset($latest_blog->image_url ?? '#') }}" src="{{ asset($latest_blog->image_url ?? '#') }}" alt="">
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
                                                    <p class="text-caption-1">by <a class="link" href="javascript:void(0)">{{ $latest_blog->created_by->name ?? 'Admin' }}</a></p>
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
                                            <img class="lazyload" data-src="{{ asset($old_blog->image_url ?? '#') }}" src="{{ asset($old_blog->image_url ?? '#') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <p class="text-caption-1">{{ date('F j, Y', strtotime($old_blog->created_at)) }}</p>
                                                </div>
                                                <div class="meta-item gap-8">
                                                    <p class="text-caption-1">by <a class="link" href="javascript:void(0)">{{ $old_blog->created_by->name ?? 'Admin' }}</a></p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /blog-list -->

@endsection
