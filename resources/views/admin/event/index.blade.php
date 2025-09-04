@extends('layouts.admin.app')

@section('title', 'All Event Management')

@section('css')
   
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">All Event Management</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form class="row align-items-end" action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="0">
                            <input type="hidden" name="status" value="1">
                            <div class="col-md-4 form-group">
                                <h6>Name <span>*</span></h6>
                                <input type="text" class="form-control" name="name" id="" value="" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <h6>Video URL</h6>
                                <input type="text" class="form-control" name="video_url" id="" accept="video/*">
                            </div>

                            <div class="col-md-3 form-group">
                                <h6>Sort Order</h6>
                                <input type="number" class="form-control" name="sort_order" id="" value="0" required>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        
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
                                                    <option value="300">300</option>
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
            $.get('{{ route("admin.event.datatable") }}', { page:page, value:value, search:search, status:status }, function(data){
                $('#get_datatable').html(data);
                feather.replace();
            });
        }

        function edit_modal(id){
            $('#ajax_html').html('<div class="loader-box"><div class="loader-37"></div></div>');
            $.get('{{ route('admin.event.edit') }}', { id:id }, function(data){
                $('#ajax_html').removeClass();
                $('#ajax_html').addClass('modal-dialog');
                $('#ajax_html').html(data);
            });
        }

        function change_status(id){
            $('#status_'+id).html('<div class="spinner-border spinner-border-sm text-light"></div>');
            $.get('{{ url('admin/event/status') }}/'+id, function(data){
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
