@extends('layouts.front.app')

@section('title', 'Product Details')

@section('css')
    <style>
        .wg-pagination {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
            padding: 10px 0;
        }

        .wg-pagination li {
            list-style: none;
        }

        .wg-pagination a,
        .wg-pagination span {
            display: block;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            text-align: center;
            transition: 0.3s ease-in-out;
        }

        /* Default Pagination Button */
        .wg-pagination a {
            background: #0a3030;
            color: white;
        }

        .wg-pagination a:hover {
            background: #ff7550;
        }

        /* Active Page */
        .wg-pagination .active span {
            background: #ff7550;
            color: white;
        }

        /* Disabled Buttons */
        .wg-pagination .disabled span {
            background: #ddd;
            color: #888;
            cursor: not-allowed;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            .wg-pagination a,
            .wg-pagination span {
                padding: 6px 10px;
                font-size: 14px;
            }

            .tf-grid-layout.tf-col-3 {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }

        @media (max-width: 480px) {
            .wg-pagination {
                gap: 3px;
            }

            .wg-pagination a,
            .wg-pagination span {
                padding: 5px 8px;
                font-size: 12px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Section product -->
    <section class="flat-spacing">
        <div class="container">
            <div class="tf-shop-control d-flex justify-content-between align-items-center">
                <div class="tf-control-filter">
                    <button id="filterShop" class="filterShop tf-btn-filter"><span class="icon icon-filter"></span><span
                            class="text">Filters</span></button>
                    {{-- <div class="d-none d-lg-flex shop-sale-text">
                        <i class="icon icon-checkCircle"></i>
                        <p class="text-caption-1">Shop sale items only</p>
                    </div> --}}
                </div>
                <ul class="tf-control-layout">
                    {{-- <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                        <div class="item">
                            <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818"></rect>
                                <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818"></rect>
                            </svg>
                        </div>
                    </li> --}}
                    <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                        <div class="item">
                            <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="14" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="6" cy="14" r="2.5" stroke="#181818"></circle>
                                <circle cx="14" cy="14" r="2.5" stroke="#181818"></circle>
                            </svg>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                        <div class="item">
                            <svg class="icon" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="11" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="19" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                <circle cx="11" cy="14" r="2.5" stroke="#181818"></circle>
                                <circle cx="19" cy="14" r="2.5" stroke="#181818"></circle>
                            </svg>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                        <div class="item">
                            <svg class="icon" width="30" height="20" viewBox="0 0 30 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="11" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="19" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="27" cy="6" r="2.5" stroke="#181818"></circle>
                                <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                <circle cx="11" cy="14" r="2.5" stroke="#181818"></circle>
                                <circle cx="19" cy="14" r="2.5" stroke="#181818"></circle>
                                <circle cx="27" cy="14" r="2.5" stroke="#181818"></circle>
                            </svg>
                        </div>
                    </li>
                </ul>
                <div class="tf-control-sorting">
                    <p class="d-none d-lg-block text-caption-1" style="width: 80px">Sort by:</p>
                    <select class="form-select" name="" id="short_by" onchange="product_filter()">
                        <option value="Best selling">Best selling</option>
                        <option value="Alphabetically, A-Z">Alphabetically, A-Z</option>
                        <option value="Alphabetically, Z-A">Alphabetically, Z-A</option>
                        <option value="Price, low to high">Price, low to high</option>
                        <option value="Price, high to low">Price, high to low</option>
                    </select>
                    {{-- <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
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
                    </div> --}}
                </div>
            </div>
            <div class="wrapper-control-shop gridLayout-wrapper">
                <div class="meta-filter-shop d-flex">
                    <div id="total-product-count" class="count-text"><span class="count">0</span> Products Found</div>
                    {{-- <div id="product-count-list" class="count-text"><span class="count">8</span> Products Found</div> --}}
                    <div id="applied-filters"></div>
                    <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="sidebar-filter canvas-filter left">
                            <div class="canvas-wrapper" onchange="product_filter()">
                                <div class="canvas-header d-flex d-xl-none">
                                    <h5>Filters</h5>
                                    <span class="icon-close close-filter"></span>
                                </div>
                                <div class="canvas-body">
                                    
                                    <div class="widget-facet facet-price">
                                        <h6 class="facet-title">Price</h6>
                                        <div class="price-val-range noUi-target noUi-ltr noUi-horizontal"
                                            id="price-value-range" data-min="0" data-max="500">
                                            
                                        </div>
                                        <div class="box-price-product">
                                            <div class="box-price-item">
                                                <span class="title-price">Min price</span>
                                                <div class="price-val" id="price-min-value" data-currency="$">0</div>
                                            </div>
                                            <div class="box-price-item">
                                                <span class="title-price">Max price</span>
                                                <div class="price-val" id="price-max-value" data-currency="$">500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-facet facet-categories">
                                        <h6 class="facet-title">Shop By Body Parts</h6>
                                        <ul class="facet-content" style="max-height: 300px; overflow-y: scroll">
                                            @foreach ($shop_by_body_parts as $key => $item)
                                            <li>
                                                <div class="tf-cart-checkbox">
                                                    <div class="tf-checkbox-wrapp">
                                                        <input class="shop_by_body_part_ids" type="radio" data-name="{{ $item->name }}" id="shop_by_body_part_ids-{{ $item->id }}" name="shop_by_body_part_ids[]" value="{{ $item->id }}">
                                                        <div><i class="icon-check"></i></div>
                                                    </div>
                                                    <label for="shop_by_body_part_ids-{{ $item->id }}">
                                                        {{ $item->name }} 
                                                        ({{ shop_by_body_parts_products($item->id)->count() }})
                                                        {{-- ({{ count(shop_by_body_parts_products($item->id)) }}) --}}
                                                    </label>
                                                </div>
                                                {{-- <input type="checkbox" name="shop_by_body_part_ids[]" id="shop_by_body_part_ids">
                                                <label class="categories-item"> <span class="count-cate">(32)</span> </label> --}}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    {{-- <div class="widget-facet facet-categories">
                                        <h6 class="facet-title">Shop By Activity</h6>
                                        <ul class="facet-content" style="max-height: 300px; overflow-y: scroll">
                                            @foreach ($shop_by_activity as $key => $item)
                                            <li>
                                                <div class="tf-cart-checkbox">
                                                    <div class="tf-checkbox-wrapp">
                                                        <input class="shop_by_activity_ids" type="radio" id="shop_by_activity_ids-{{ $item->id }}" name="shop_by_activity_ids[]" value="{{ $item->id }}">
                                                        <div><i class="icon-check"></i></div>
                                                    </div>
                                                    <label for="shop_by_activity_ids-{{ $item->id }}">
                                                        {{ $item->name }} 
                                                        ({{ shop_by_activity_products($item->id)->count() }})
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div> --}}
                                    <div class="widget-facet facet-fieldset">
                                        <h6 class="facet-title">Shop By Activity</h6>
                                        <div class="box-fieldset-item" >
                                            @foreach ($shop_by_activity as $key => $item)
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="shop_by_activity_ids" class="tf-check" id="shop_by_activity_ids-{{ $item->id }}">
                                                <label for="shop_by_activity_ids-{{ $item->id }}">{{ $item->name }} <span class="count-brand">({{ shop_by_activity_products($item->id)->count() }})</span></label>
                                            </fieldset>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="widget-facet facet-size">
                                        <h6 class="facet-title">Size</h6>
                                        <div class="facet-size-box size-box">
                                            @forelse ($sizes as $item)
                                                <span class="size-item size-check free-size {{ request()->size == $item->name ? 'active':'' }}">{{ $item->name }}</span>
                                            @empty
                                                <span class="size-item size-check free-size">No Sizes Available</span>
                                            @endforelse

                                        </div>
                                    </div>
                                    <div class="widget-facet facet-color">
                                        <h6 class="facet-title">Colors</h6>
                                        <div class="facet-color-box">
                                            @forelse ($colors as $item)
                                                <div class="color-item color-check"><span class="color"
                                                        style="background-color: {{ $item->color_code }}"></span>{{ $item->name }}
                                                </div>
                                            @empty
                                                <div class="color-item color-check"><span class="color bg-light-pink-2"></span>No Color Available</div>
                                            @endforelse
                                        </div>
                                    </div>
                                    {{-- <div class="widget-facet facet-fieldset">
                                        <h6 class="facet-title">Availability</h6>
                                        <div class="box-fieldset-item">
                                            <fieldset class="fieldset-item">
                                                <input type="radio" name="availability" class="tf-check"
                                                    id="inStock">
                                                <label for="inStock">In stock <span
                                                        class="count-stock">(32)</span></label>
                                            </fieldset>
                                            <fieldset class="fieldset-item">
                                                <input type="radio" name="availability" class="tf-check"
                                                    id="outStock">
                                                <label for="outStock">Out of stock <span
                                                        class="count-stock">(2)</span></label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="widget-facet facet-fieldset">
                                        <h6 class="facet-title">Brands</h6>
                                        <div class="box-fieldset-item">
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="brand" class="tf-check" id="nike">
                                                <label for="nike">Nike <span class="count-brand">(112)</span></label>
                                            </fieldset>
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="brand" class="tf-check" id="LV">
                                                <label for="LV">Louis Vuitton <span
                                                        class="cou  nt-brand">(2)</span></label>
                                            </fieldset>
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="brand" class="tf-check" id="hermes">
                                                <label for="hermes">Hermes <span class="count-brand">(42)</span></label>
                                            </fieldset>
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="brand" class="tf-check" id="gucci">
                                                <label for="gucci">Gucci <span class="count-brand">(13)</span></label>
                                            </fieldset>
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="brand" class="tf-check" id="zalando">
                                                <label for="zalando">Zalando <span
                                                        class="count-brand">(54)</span></label>
                                            </fieldset>
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="brand" class="tf-check" id="adidas">
                                                <label for="adidas">Adidas <span class="count-brand">(93)</span></label>
                                            </fieldset>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="canvas-bottom d-block d-xl-none">
                                    <button id="reset-filter" class="tf-btn btn-reset">Reset Filters</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="wrapper-shop tf-grid-layout tf-col-4" id="gridLayout">

                        </div>

                        <div class="text-center pt-5" id="load_more_btn">
                            <a href="javascript:void(0)" class="tf-btn btn-fill" onclick="get_product_filter(2)">
                                <span class="text text-button">Load More</span>
                            </a>
                        </div>

                        <div class="text-center p-5" id="shop_loader" style="display: none;"><div class="spinner-border"></div></div>

                        <!-- Responsive Pagination -->
                        {{-- @if ($products->hasPages())
                            <ul class="wg-pagination flex flex-wrap justify-center items-center gap-2 mt-6 px-4">
                                <!-- Previous Button -->
                                @if ($products->onFirstPage())
                                    <li class="pagination-item disabled">
                                        <span
                                            class="px-3 py-2 bg-gray-300 text-gray-500 rounded cursor-not-allowed">&laquo;</span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $products->previousPageUrl() }}"
                                            class="px-3 py-2 bg-[#0a3030] text-white rounded hover:bg-[#ff7550] transition">&laquo;</a>
                                    </li>
                                @endif

                                <!-- Page Numbers -->
                                @foreach ($products->links()->elements[0] as $page => $url)
                                    @if ($page == $products->currentPage())
                                        <li class="pagination-item active">
                                            <span
                                                class="px-4 py-2 bg-[#ff7550] text-white font-semibold rounded">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $url }}"
                                                class="px-4 py-2 bg-[#0a3030] text-white rounded hover:bg-[#ff7550] transition">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                <!-- Next Button -->
                                @if ($products->hasMorePages())
                                    <li>
                                        <a href="{{ $products->nextPageUrl() }}"
                                            class="px-3 py-2 bg-[#0a3030] text-white rounded hover:bg-[#ff7550] transition">&raquo;</a>
                                    </li>
                                @else
                                    <li class="pagination-item disabled">
                                        <span
                                            class="px-3 py-2 bg-gray-300 text-gray-500 rounded cursor-not-allowed">&raquo;</span>
                                    </li>
                                @endif
                            </ul>
                        @endif --}}

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Section product -->

@endsection
{{-- $productslinks() --}}

@section('scripts')
<script type="text/javascript" src="{{ asset('front_assets/js/nouislider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_assets/js/shop.js') }}"></script>

<script>
    get_product_filter(1);

    function product_filter() {
        $('#gridLayout').html('');
        get_product_filter(1);
    }
    function get_product_filter(page) {
        $('#shop_loader').show();
        $('#load_more_btn').hide();
        $('#applied_shop_by_body_part_ids').remove();
        var short_by = $('#short_by').val();
        var shop_by_body_part_ids = $('.shop_by_body_part_ids:checked').val();
        
        if(shop_by_body_part_ids){
            var shop_by_body_part_data = $('.shop_by_body_part_ids:checked').data('name');
            $('#applied-filters').append('<span class="filter-tag" id="applied_shop_by_body_part_ids">'+shop_by_body_part_data+'</span>');
            $("#remove-all").show();
        }
        var shop_by_activity_ids = $('.shop_by_activity_ids:checked').val();
        
        $.get('{{ route('ajax.get_product_filter') }}', { page:page, short_by:short_by, shop_by_body_part_ids: shop_by_body_part_ids, shop_by_activity_ids: shop_by_activity_ids }, function(data){
            $('#shop_loader').hide();
            $('#gridLayout').append(data.html);
            $('#total-product-count .count').text(data.total_products);
        });
    }
</script>
@endsection
