@extends('layouts.admin.app')

@section('title', 'All Stock Details')

@section('css')
   <style>
    .select2-container .select2-selection--single{
        padding: 5px;
        height: 33px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow{
        top: 2px !important;
    }
   </style>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Stock Management</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form class="row align-items-end justify-content-between" action="{{ route('warehouse.stock_details.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="0">
                            {{-- <div class="col-md-3 form-group">
                                <h6>Warehouse <span>*</span></h6>
                                @if (Auth::user()->role_as == 'Warehouse')
                                    <select class="js-example-basic-single" name="warehouse_id" id="" required>
                                        <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->name }}</option>
                                    </select>
                                @else
                                    <select class="js-example-basic-single" name="warehouse_id" id="" required>
                                        <option value="" disabled>Select Warehouse...</option>
                                        @foreach (App\Models\User::where('role_as','Warehouse')->get() as $warehouse)
                                            <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div> --}}
                            <div class="col-md-4 form-group">
                                <h6>Product <span>*</span></h6>
                                <select class="js-example-basic-single" name="product_id" id="" required>
                                    <option value="" disabled>Select Product...</option>
                                    @foreach (App\Models\Product::all() as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-auto form-group">
                                <h6>In/Out <span>*</span></h6>
                                <div class="form-check-size rtl-input">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input me-2" id="add_stock_in" type="radio" name="in_out" value="In" checked="">
                                        <label class="form-check-label" for="add_stock_in">In</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input me-2" id="add_stock_out" type="radio" name="in_out" value="Out">
                                        <label class="form-check-label" for="add_stock_out">Out</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <h6>QTY <span>*</span></h6>
                                <input type="number" class="form-control" name="qty" id="" value="{{ $stock_details->qty ?? '' }}" required>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        {{-- <h4 class="card-title">All Shop By Body Part</h4>
                        <a href="#" class="btn btn-primary ms-auto col-auto" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal(0)">Add Shop By Body Part</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="dt-ext ">
                            <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" onchange="get_datatable()">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <label>Show entries:</label>
                                        <select name="datatable_length" class="form-select form-select-sm" id="datatable_page_show">
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="150">150</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <label>Filter: </label>
                                        <select name="in_out_filter" class="form-select form-select-sm ms-2" id="in_out_filter">
                                            <option value="">All In/Out</option>
                                            <option value="In" {{ (request('in_out_filter') == 'In') ? 'selected' : '' }}>In</option>
                                            <option value="Out" {{ (request('in_out_filter') == 'Out') ? 'selected' : '' }}>Out</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <label>Category: </label>
                                        <select name="category_filter" class="form-select form-select-sm ms-2" id="category_filter">
                                            <option value="" selected>All Categories</option>
                                            @foreach (App\Models\Category::all() as $category)
                                                <option value="{{ $category->id }}" {{ (request('category_filter') == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <label>Product: </label>
                                        <select name="product_filter" class="js-example-basic-single" id="product_filter">
                                            <option value="" selected>All Products</option>
                                            @foreach (App\Models\Product::all() as $product)
                                                <option value="{{ $product->id }}" {{ (request('product_filter') == $product->id) ? 'selected' : '' }}>{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <label>Search:</label>
                                        <input type="search" id="datatable_search" class="form-control form-control-sm" placeholder="" aria-controls="datatable">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" id="get_datatable"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->
    </div>


    <div class="modal fade" id="edit_modal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="ajax_html">
            
        </div>
    </div>
    
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            get_datatable();
        });

        $(document).on('click','.pages a',function(n){
            n.preventDefault();
            var page = $(this).attr('href').split("page=")[1];
            get_datatable(page);
        });

        function get_datatable(page){

            $('#get_datatable').html('<div class="loader-box"><div class="loader-37"></div></div>');
            var value = $('#datatable_page_show').val();
            var search = $('#datatable_search').val();
            var status = $('#status').val();
            var warehouse_filter = $('#warehouse_filter').val();
            var in_out_filter = $('#in_out_filter').val();
            var brand_filter = $('#brand_filter').val();
            var category_filter = $('#category_filter').val();
            var product_filter = $('#product_filter').val();
            var page = page ?? 1;
            $.get('{{ route("warehouse.stock_details.datatable") }}', { page:page, value:value, search:search, status:status, warehouse_filter:warehouse_filter, in_out_filter:in_out_filter, brand_filter:brand_filter, category_filter:category_filter, product_filter:product_filter }, function(data){
                $('#get_datatable').html(data);
                feather.replace();
            });
        }

        function edit_modal(id){
            $('#ajax_html').html('<div class="loader-box"><div class="loader-37"></div></div>');
            $.get('{{ route('warehouse.stock_details.edit') }}', { id:id }, function(data){
                $('#ajax_html').removeClass();
                $('#ajax_html').addClass('modal-dialog');
                $('#ajax_html').html(data);
            });
        }

        function change_status(id){
            $('#status_'+id).html('<div class="spinner-border spinner-border-sm text-light"></div>');
            $.get('{{ url('warehouse/stock_details/status') }}/'+id, function(data){
                $.notify({ title:'Success', message:'Status Changed Successfully' }, { type:'success', });
                if(data == 1){
                    $('#status_'+id).addClass('badge-success');
                    $('#status_'+id).removeClass('badge-danger');
                    $('#status_'+id).text('Active');
                }else{
                    $('#status_'+id).addClass('badge-danger');
                    $('#status_'+id).removeClass('badge-success');
                    $('#status_'+id).text('Inactive');
                }
            });
        }

    </script>
    <script src="{{ asset('custom_files/form_save.js') }}"></script>
@endsection
