@extends('layouts.admin.app')

@section('title', 'Current Stock')

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
                    <div class="card-body">
                        <div class="dt-ext ">
                            <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer mb-2" onchange="get_datatable()">
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
                                        <label>Stock Filter: </label>
                                        <select name="stock_filter" class="form-select form-select-sm ms-2" id="stock_filter">
                                            <option value="All Stock" selected>All Stock</option>
                                            <option value="Out Of Stock" {{ (request('stock_filter') == 'Out Of Stock') ? 'selected' : '' }}>Out Of Stock</option>
                                            <option value="Available Stock" {{ (request('stock_filter') == 'Available Stock') ? 'selected' : '' }}>Available Stock</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <label>Brand: </label>
                                        <select name="brand_filter" class="form-select form-select-sm ms-2" id="brand_filter">
                                            <option value="" selected>All Brands</option>
                                            @foreach (App\Models\Brand::all() as $brand)
                                                <option value="{{ $brand->id }}" {{ (request('brand_filter') == $brand->id) ? 'selected' : '' }}>{{ $brand->name }}</option>
                                            @endforeach
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
                                        <label>Search:</label>
                                        <input type="search" id="datatable_search" class="form-control form-control-sm" placeholder="" aria-controls="datatable">
                                    </div>
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
            var stock_filter = $('#stock_filter').val();
            var brand_filter = $('#brand_filter').val();
            var category_filter = $('#category_filter').val();
            var page = page ?? 1;
            $.get('{{ route("warehouse.current_stock.datatable") }}', { page:page, value:value, search:search, status:status, stock_filter:stock_filter, brand_filter:brand_filter, category_filter:category_filter }, function(data){
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
