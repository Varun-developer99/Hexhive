@extends('layouts.admin.app')

@section('title', 'All Products')

@section('css')
   
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Product Management</li>
@endsection
@section('btns')
    <a href="#" class="btn" style="background-color: #dca72e;" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal(0)">Add Product</a>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
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
                                        <label>Status: </label>
                                        <select name="status_filter" class="form-select form-select-sm ms-2" id="status_filter">
                                            <option value="" selected>All Status</option>
                                            <option value="1" {{ ((request('status_filter') ?? '') == 1) ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ ((request('status_filter') ?? '') == 0) ? 'selected' : '' }}>Inactive</option>
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
            var status_filter = $('#status_filter').val();
            var brand_filter = $('#brand_filter').val();
            var category_filter = $('#category_filter').val();
            var page = page ?? 1;
            $.get('{{ route("admin.product.datatable") }}', { page:page, value:value, search:search, status_filter:status_filter, brand_filter:brand_filter, category_filter:category_filter }, function(data){
                $('#get_datatable').html(data);
                feather.replace();
            });
        }

        function edit_modal(id){
            $('#ajax_html').html('<div class="loader-box"><div class="loader-37"></div></div>');
            $.get('{{ route('admin.product.edit') }}', { id:id }, function(data){
                $('#ajax_html').removeClass();
                $('#ajax_html').addClass('modal-dialog modal-fullscreen');
                $('#ajax_html').html(data);
            });
        }

        function change_status(id){
            $('#status_'+id).html('<div class="spinner-border spinner-border-sm text-light"></div>');
            $.get('{{ url('admin/product/status') }}/'+id, function(data){
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
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}"></script>
@endsection
