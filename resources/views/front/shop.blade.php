@extends('layouts.front.app')

@section('title', 'Shop')

@section('css')

@endsection

@section('content')

<!-- page-title -->
        <div class="page-title" style="background-image: url('{{ asset('front_assets/images/section/page-title.jpg') }}');">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Women</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="{{ url('/') }}">Homepage</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Women
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">
                <div class="tf-shop-control">
                    <div class="tf-control-filter">
                        <button id="filterShop" class="filterShop tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filters</span></button>
                        <div class="d-none d-lg-flex shop-sale-text">
                            <i class="icon icon-checkCircle"></i>
                            <p class="text-caption-1">Shop sale items only</p>
                        </div>
                    </div>
                    <ul class="tf-control-layout">
                        {{-- <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                    <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818"></rect>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                    <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818"></rect>
                                </svg>     
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="14" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="6" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="14" cy="14" r="2.5" stroke="#181818"></circle>
                                </svg>   
                            </div>
                        </li> --}}
                        <li class="tf-view-layout-switch sw-layout-3 active" data-value-layout="tf-col-3">
                            <div class="item">
                                <svg class="icon" width="22" height="20" viewbox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"></circle>
                                </svg>                                    
                            </div>
                        </li>
                        {{-- <li class="tf-view-layout-switch sw-layout-4" data-value-layout="tf-col-4">
                            <div class="item">
                                <svg class="icon" width="30" height="20" viewbox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818"></circle>
                                </svg>
                            </div> --}}
                        </li>
                    </ul>
                    <div class="tf-control-sorting">
                        <p class="d-none d-lg-block text-caption-1">Sort by:</p>
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Best selling</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item" data-sort-value="best-selling">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="sidebar-filter canvas-filter left">
                                <div class="canvas-wrapper">
                                    <div class="canvas-header d-flex d-xl-none">
                                        <h5>Filters</h5>
                                        <span class="icon-close close-filter"></span>
                                    </div>
                                    <div class="canvas-body">
                                        <div class="widget-facet facet-categories">
                                            <h6 class="facet-title">Product Categories</h6>
                                            <ul class="facet-content">
                                                @foreach($category as $cat)
                                                <li><a href="#" class="categories-item">{{ $cat->name }} <span class="count-cate">({{ $cat->products->count() }})</span></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="canvas-bottom d-block d-xl-none">
                                        <button id="reset-filter" class="tf-btn btn-reset">Reset Filters</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            {{-- <div class="tf-list-layout wrapper-shop" id="listLayout">
                                <!-- card product list 1 -->
                                <div class="card-product style-list" data-availability="Out of stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Double-button trench coat</a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$219.99</span></div>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active line">
                                                    <span class="d-none text-capitalize color-filter">Green</span>
                                                    <span class="swatch-value bg-light-green"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Grey</span>
                                                    <span class="swatch-value bg-grey-2"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-8.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-8.jpg') }}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon active">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 2 -->
                                <div class="card-product style-list" data-availability="Out of stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-31.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-31.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                        <span class="price current-price">$59.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Orange</span>
                                                    <span class="swatch-value bg-light-orange"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Orange</span>
                                                    <span class="swatch-value bg-orange"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-43.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-43.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Pink</span>
                                                    <span class="swatch-value bg-dark-pink"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-47.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-47.jpg') }}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 3 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-63.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-63.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-64.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-64.jpg') }}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <div class="price"><span class="old-price">$98.00</span><span class="current-price">$219.95</span></div>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-63.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-63.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Grey</span>
                                                    <span class="swatch-value bg-grey-2"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-69.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-69.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Black</span>
                                                    <span class="swatch-value bg-main"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-70.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-70.jpg') }}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 4 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="gucci">   
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-37.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-37.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-38.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-38.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-37.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-37.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-41.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-41.jpg') }}" alt="image-product">
                                                </li>
                                                
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 5 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="hermes">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-133.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-133.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-131.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-131.jpg') }}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Green</span>
                                                    <span class="swatch-value bg-light-green"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-133.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-133.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Black</span>
                                                    <span class="swatch-value bg-main"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-124.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-124.jpg') }}" alt="image-product">
                                                </li>
                                                
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card product list 6 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-167.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-167.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-168.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-168.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Cotton shopper bag</a>
                                        <span class="price current-price">$199.25</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-167.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-167.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Beige</span>
                                                    <span class="swatch-value bg-beige"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-162.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-162.jpg') }}" alt="image-product">
                                                </li>
                                                
                                            </ul>
                                    
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card product list 7 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-84.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-84.jpg') }}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Belt wrap dress</a>
                                        <span class="price current-price">$129.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Green</span>
                                                    <span class="swatch-value bg-light-green"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-83.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Grey</span>
                                                    <span class="swatch-value bg-grey"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-94.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-94.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-87.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-87.jpg') }}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">2XL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card product list 8 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-12.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-12.jpg') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-13.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-13.jpg') }}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$69.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Red</span>
                                                    <span class="swatch-value bg-red"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-12.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-12.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Black</span>
                                                    <span class="swatch-value bg-main"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-13.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-13.jpg') }}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-14.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-14.jpg') }}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">2XL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- pagination -->
                                <ul class="wg-pagination">
                                    <li><a href="#" class="pagination-item text-button">1</a></li>
                                    <li class="active"><div class="pagination-item text-button">2</div></li>
                                    <li><a href="#" class="pagination-item text-button">3</a></li>
                                    <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                                </ul>
                            </div> --}}
                            <div class="tf-grid-layout wrapper-shop tf-col-3" id="gridLayout">
                                <!-- card product 1 -->
                                @foreach ($products as $product)
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="#" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset($product->image_url) }}" src="{{ asset($product->image_url) }}" alt="image-product">{{-- Changed from asset('front_assets/images/products/womens/women-29.jpg') to asset($product->image) --}}
                                            <img class="lazyload img-hover" data-src="{{ asset($product->image_url) }}" src="{{ asset($product->image_url) }}" alt="image-product">{{-- Changed from asset('front_assets/images/products/womens/women-30.jpg') to asset($product->image) --}}
                                        </a>
                                        {{-- <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div> --}}
                                        {{-- <div class="variant-wrap countdown-wrap">
                                            <div class="variant-box">
                                                <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"></div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div> --}}
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="#" class="title link">{{ $product->name }}</a>
                                        <div class="price"><span class="old-price">{{ $product->sale_price }}</span> <span class="current-price">{{ $product->mrp_price }}</span></div>
                                        {{-- <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-light-grey"></span>
                                                <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}" alt="image-product">
                                            </li>
                                            
                                        </ul> --}}
                                    </div>
                                </div>
                                @endforeach
                                <!-- pagination -->
                                @if ($products->hasPages())
<ul class="wg-pagination justify-content-center">
    {{-- Previous --}}
    @if (!$products->onFirstPage())
        <li>
            <a href="{{ $products->previousPageUrl() }}" class="pagination-item text-button">
                <i class="icon-arrLeft"></i>
            </a>
        </li>
    @endif

    {{-- Page Numbers --}}
    @for ($i = 1; $i <= $products->lastPage(); $i++)
        @if ($i == $products->currentPage())
            <li class="active">
                <div class="pagination-item text-button">{{ $i }}</div>
            </li>
        @else
            <li>
                <a href="{{ $products->url($i) }}" class="pagination-item text-button">{{ $i }}</a>
            </li>
        @endif
    @endfor

    {{-- Next --}}
    @if ($products->hasMorePages())
        <li>
            <a href="{{ $products->nextPageUrl() }}" class="pagination-item text-button">
                <i class="icon-arrRight"></i>
            </a>
        </li>
    @endif
</ul>
@endif

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- /Section product -->
     

@endsection
