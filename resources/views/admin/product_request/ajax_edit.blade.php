<form class="modal-content" action="{{ route('warehouse.product_request.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $product_request->id ?? 0 }}">
    <input type="hidden" name="status" value="{{ $product_request->status ?? 'Pending' }}">
    <input type="hidden" name="product_id" value="{{ $product_request->product_id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($product_request->id ?? 0) != 0 ? 'Edit':'Add' }} Product </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <h6>Product Name <span>*</span></h6>
                <input type="text" class="form-control" name="name" id="" value="{{ $product_request->name ?? '' }}" required>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Brand/Manufacturer <span>*</span></h6>
                <select name="brand_id" class="js-example-basic-single" id="" required>
                    <option value="" disabled selected>Select Brand...</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ ($product_request->brand_id ?? 0) == $brand->id ? 'selected':'' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Category <span>*</span></h6>
                <select name="category_id" class="js-example-basic-single" id="" onchange="get_sub_category()" required>
                    <option value="" disabled selected>Select Category...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ ($product_request->category_id ?? 0) == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Sub Category <span>*</span></h6>
                <select name="sub_category_id" class="js-example-basic-single" id="sub_category_id" required>
                    <option value="" disabled selected>Select Sub Category...</option>
                    @foreach ($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}" {{ ($product_request->sub_category_id ?? 0) == $sub_category->id ? 'selected':'' }}>{{ $sub_category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Unit <span>*</span></h6>
                <input type="text" class="form-control" name="unit" id="" value="{{ $product_request->unit ?? '' }}" required>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Quantity <span>*</span></h6>
                <input type="text" class="form-control" name="qty" id="" value="{{ $product_request->qty ?? '' }}" required>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Prescription Required <span>*</span></h6>
                <div class="form-check-size rtl-input">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input me-2" id="prescription_required_no" type="radio" name="prescription_required" value="No" checked="">
                        <label class="form-check-label" for="prescription_required_no">No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input me-2" id="prescription_required_yes" type="radio" name="prescription_required" value="Yes" {{ ($product_request->prescription_required ?? 'No') == 'Yes' ? 'checked':'' }}>
                        <label class="form-check-label" for="prescription_required_yes">Yes</label>
                    </div>
                </div>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>MRP Price <span>*</span></h6>
                <input type="number" class="form-control" name="mrp_price" id="" value="{{ $product_request->mrp_price ?? '' }}" required>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Sale Price <span>*</span></h6>
                <input type="number" class="form-control" name="sale_price" id="" value="{{ $product_request->sale_price ?? '' }}" required>
            </div>
            {{-- <div class="col-md-2 form-group">
                <h6>Status <small class="text-muted">(Active/Inactive)</small> <span>*</span></h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($product_request->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div> --}}
            <div class="col-md-6 form-group mb-3">
                <h6>Main Image <small class="text-muted">(Single)</small> <span>*</span></h6>
                <input type="file" class="form-control" name="main_img" id="" accept="image/*">
                @if (($product_request ?? '') != '')
                    @foreach (($product_request->getMedia('main_img') ?? []) as $file)
                    <div class="img-box media_id_{{ $file->id }}">
                        <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Gallery Images <small class="text-muted">(Multiple)</small> <span>*</span></h6>
                <input type="file" class="form-control" name="gallery_imgs[]" id="gallery_imgs" accept="image/*" multiple>
                 @if (($product_request ?? '') != '')
                    @foreach (($product_request->getMedia('gallery_imgs') ?? []) as $file)
                    <div class="img-box media_id_{{ $file->id }}">
                        <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                        <a href="javascript:void({{ $file->id }})" class="f-18 text-danger" onclick="delete_media({{ $file->id }})"><i class="fa fa-trash-o"></i></a>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Use-case <span>*</span></h6>
                <textarea class="form-control" name="use_case" id="" cols="30" rows="5">{!! $product_request->use_case ?? '' !!}</textarea>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Description <span>*</span></h6>
                <textarea class="form-control" name="description" id="editor1" cols="30" rows="5">{!! $product_request->description ?? '' !!}</textarea>
            </div>
            
            
        </div>
    </div>
    <div class="modal-footer text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<script>
    function get_sub_category(){
        var category_id = $('select[name="category_id"]').val();
        $('#sub_category_id').prop('disabled',true);
        $.get('{{ url('get_sub_category') }}', { category_id:category_id }, function(data){
            $('#sub_category_id').html(data);
            $('#sub_category_id').prop('disabled',false);
            $('.js-example-basic-single').select2();
        });
    }
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
</script>
<script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
