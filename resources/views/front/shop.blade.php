@extends('layouts.front.app')

@section('title', 'Shop')

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
        .sidebar-filter.canvas-filter {
            position: sticky;
            top: 0;
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
            
            .sidebar-filter.canvas-filter {
                position: fixed;
                top: 0;
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
                </div>
            </div>
            <div class="wrapper-control-shop gridLayout-wrapper">
                <div class="meta-filter-shop d-flex d-none">
                    <div id="total-product-count" class="count-text"><span class="count">0</span> Products Found</div>
                    @if (request()->category ?? 0)
                    <span class="filter-tag bg-dark text-white">{{ category_data(request()->category)->name ?? 'N/A' }} <a href="{{ route('front.shop') }}" class="remove-tag icon-close text-white"></a></span>
                    @endif
                    @if (request()->search ?? 0)
                    <span class="filter-tag bg-dark text-white">{{ request()->search }} <a href="{{ route('front.shop') }}" class="remove-tag icon-close text-white"></a></span>
                    @endif
                    <div id="applied-filters"></div>
                    <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="sidebar-filter canvas-filter left" onchange="product_filter()">
                            <div class="canvas-wrapper">
                                <div class="canvas-header d-flex d-xl-none">
                                    <h5>Filters</h5>
                                    <span class="icon-close close-filter"></span>
                                </div>
                                <div class="canvas-body">
                                    <div class="widget-facet facet-fieldset">
                                        <h6 class="facet-title">Shop by Category</h6>
                                        <div class="box-fieldset-item" style="max-height: 300px; overflow-y: scroll">
                                            @foreach ($categories as $key => $item)
                                            <fieldset class="fieldset-item">
                                                <input type="checkbox" name="category" class="tf-check categories_ids" id="shop_by_category_ids-{{ $item->id }}" value="{{ $item->id }}" {{ (request()->category ?? '') == $item->slug ? 'checked' : '' }}>
                                                <label for="shop_by_category_ids-{{ $item->id }}">{{ $item->name }} </label>
                                            </fieldset>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="widget-facet facet-price">
                                        <h6 class="facet-title">Price</h6>
                                        <div class="price-val-range noUi-target noUi-ltr noUi-horizontal" id="price-value-range" data-min="0" data-max="5000">
                                        </div>
                                        <div class="box-price-product">
                                            <div class="box-price-item">
                                                <span class="title-price">Min price</span>
                                                <div class="price-val" id="price-min-value" data-currency="₹">0</div>
                                            </div>
                                            <div class="box-price-item">
                                                <span class="title-price">Max price</span>
                                                <div class="price-val" id="price-max-value" data-currency="₹">5000</div>
                                            </div>
                                        </div>
                                    </div>
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
    // Declare searchTimeout at the top of your 
    var searchTimeout;
    
    // Check if category parameter exists in URL and auto-check the checkbox
    // $(document).ready(function() {
    //     var urlCategory = "{{ request()->category ?? '' }}";
    //     if(urlCategory) {
    //         $('#shop_by_category_ids-' + urlCategory).prop('checked', true);
    //     }
        
    //     // Delay to ensure price slider and all elements are initialized
    //     setTimeout(function() {
    //         get_product_filter(1);
    //     }, 300);
    // });

    function product_filter() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function () { $('#gridLayout').html(''); get_product_filter(1); }, 500);
    }

    function get_product_filter(page) {
        $('#shop_loader').show();
        $('#load_more_btn').hide();
        var search = "{{ request()->search ?? '0' }}";
        var short_by = $('#short_by').val();
        var price_min_value = Number($('#price-min-value').text()) || 0;
        var price_max_value = Number($('#price-max-value').text()) || 5000;
        var categories_ids = $('.categories_ids:checked').map(function() {
            return $(this).val();
        }).get();

        console.log('Filters:', { categories_ids, price_min_value, price_max_value, search });

        $.get('{{ route('ajax.get_product_filter') }}', { page:page, short_by:short_by, categories_ids: categories_ids, search: search, price_min_value: price_min_value, price_max_value: price_max_value }, function(data){
            $('#shop_loader').hide();
            $('#gridLayout').append(data.html);
            $('#total-product-count .count').text(data.total_products);
            
            if(data.total_products > 0) {
                $('#load_more_btn').show();
            }
        });
    }
</script>
@endsection
