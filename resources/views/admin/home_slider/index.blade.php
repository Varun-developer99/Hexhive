@extends('layouts.admin.app')

@section('title', 'Home Slider')

@section('css')
   
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Master Fields</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form class="row align-items-end" action="{{ route('admin.home_slider.insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="0">
                            <input type="hidden" name="status" value="1">
                            <div class="col-md-5 form-group">
                                <h6>Name <span>*</span></h6>
                                <input type="text" class="form-control" name="name" id="" value="" required>
                            </div>
                            <div class="col-md-5 form-group">
                                <h6>Link <span>*</span></h6>
                                <input type="url" class="form-control" name="link" id="" value="" required>
                            </div>
                            <div class="col-md-5 form-group">
                                <h6>Upload Image <small>(Desktop Banner)</small> <span>*</span></h6>
                                <input type="file" class="form-control" name="img" id="" accept="image/*">
                                <input type="hidden" name="old_img" value="no-img.jpg">
                            </div>
                            <div class="col-md-5 form-group">
                                <h6>Upload Image <small>(Mobile Banner)</small> <span>*</span></h6>
                                <input type="file" class="form-control" name="mobile_img" id="" accept="image/*">
                                <input type="hidden" name="old_mobile_img" value="no-img.jpg">
                            </div>
                            <div class="col-md-2 form-group">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        {{-- <h4 class="card-title">All Shop By Daily Support</h4>
                        <a href="#" class="btn btn-primary ms-auto col-auto" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal(0)">Add Shop By Daily Support</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="dt-ext ">
                            <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" onchange="get_datatable()">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <div class="dataTables_length" id="datatable_length">
                                            <label>Show 
                                                <select name="datatable_length" class="form-select" id="datatable_page_show">
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="150">150</option>
                                                    <option value="200">200</option>
                                                    <option value="300  ">300</option>
                                                </select> entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-auto">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" id="datatable_search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label>
                                        </div>
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
            var page = page ?? 1;
            $.get('{{ route("admin.home_slider.datatable") }}', { page:page, value:value, search:search, status:status }, function(data){
                $('#get_datatable').html(data);
                feather.replace();
            });
        }

        function edit_modal(id){
            $('#ajax_html').html('<div class="loader-box"><div class="loader-37"></div></div>');
            $.get('{{ route('admin.home_slider.edit') }}', { id:id }, function(data){
                $('#ajax_html').removeClass();
                $('#ajax_html').addClass('modal-dialog');
                $('#ajax_html').html(data);
            });
        }

        $(document).on('submit','form',function(event){
            event.preventDefault();
            var form = event.target;
            var form_data = new FormData(form);
            $.ajax({
                url: $(event.target).attr('action'),
                type: 'POST',
                data: form_data,
                processData: false,
                contentType: false,
                success: function(data){
                    if((data.id ?? '') != ''){
                        console.log(data);
                        $.notify({ title:'Success', message:data.message }, { type:'success', });
                        if($('#tr_'+data.id).length){
                            var sr = $('#tr_'+data.id+' .sr').text();
                            $('#tr_'+data.id).html('<td class="sr">'+sr+'</td>');
                            $('#tr_'+data.id).append(data.html);
                        }else{
                            get_datatable();
                            $('.form-control').val('');
                        }
                        $('#edit_modal').modal('hide');
                    }else{
                        $.notify({ title:'Error', message:data }, { type:'danger', });
                        $('form button[type="submit"]').html('Save');
                        $('form button[type="submit"]').removeClass('disabled');
                    }
                }
            });
        });

    </script>
@endsection
