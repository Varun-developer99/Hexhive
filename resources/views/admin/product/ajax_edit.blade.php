<form class="modal-content" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($product->id ?? 0) != 0 ? 'Edit':'Add' }} Product </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-4 form-group mb-3">
                <h6>Product Name <span>*</span></h6>
                <input type="text" class="form-control" name="name" id="" value="{{ $product->name ?? '' }}" required>
            </div>
            
            <div class="col-md-2 form-group mb-3">
                <h6>Category <span>*</span></h6>
                <select name="category_id" class="js-example-basic-single" id="" required>
                    <option value="" disabled selected>Select Category...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ ($product->category_id ?? 0) == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>MRP Price <span>*</span></h6>
                <input type="number" class="form-control" name="mrp_price" id="" value="{{ $product->mrp_price ?? '' }}" required>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Sale Price <span>*</span></h6>
                <input type="number" class="form-control" name="sale_price" id="" value="{{ $product->sale_price ?? '' }}" required>
            </div>
          
            <div class="col-md-2 form-group mb-3">
                <h6>HSN Code <span>*</span></h6>
                <input type="number" class="form-control" name="hsn_code" id="" value="{{ $product->hsn_code ?? '' }}" required>
            </div>
            
            <div class="col-md-2 form-group mb-3">
                <h6>GST Rate <small class="text-muted">(Included)</small> <span>*</span></h6>
                <select name="gst_rate" id="" class="form-select" required>
                    <option value="5" {{ ($product->gst_rate ?? 0) == 5 ? 'selected':'' }}>5%</option>
                    <option value="18" {{ ($product->gst_rate ?? 0) == 18 ? 'selected':'' }}>18%</option>
                </select>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Product Weight</h6>
                <input type="text" class="form-control" name="product_weight" id="product_weight" placeholder="Enter product weight" value="{{ $product->product_weight ?? '' }}"/>
            </div>
            
            <div class="col-md-2 form-group mb-3">
                <h6>Length</h6>
                <input type="text" class="form-control" name="length" id="length" placeholder="Enter product length" value="{{ $product->length ?? '' }}"/>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Width</h6>
                <input type="text" class="form-control" name="width" id="width" placeholder="Enter product width" value="{{ $product->width ?? '' }}"/>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Height</h6>
                <input type="text" class="form-control" name="height" id="height" placeholder="Enter product height" value="{{ $product->height ?? '' }}"/>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Product Shelf Life</h6>
                <input type="text" class="form-control" name="product_shelf_life" id="product_shelf_life" placeholder="Enter product shelf life" value="{{ $product->product_shelf_life ?? '' }}"/>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Ingredients</h6>
                <input type="text" class="form-control" name="ingredients" id="ingredients" placeholder="Enter ingredients" value="{{ $product->ingredients ?? '' }}"/>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Allergent Info</h6>
                <input type="text" class="form-control" name="allergent_info" id="allergent_info" placeholder="Enter allergent info" value="{{ $product->allergent_info ?? '' }}"/>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Manufacturer</h6>
                <select name="brand_id" class="js-example-basic-single" id="">
                    <option value="" disabled selected>Select Manufacturer...</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ ($product->brand_id ?? 0) == $brand->id ? 'selected':'' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Bottel Type</h6>
                <select name="bottel_type" class="js-example-basic-single" id="">
                    <option value="" disabled selected>Select Bottel Type...</option>
                    @foreach (App\Models\Botteltypes::where('status', 1)->get() as $botteltype)
                        <option value="{{ $botteltype->name }}" {{ ($product->bottel_type ?? 0) == $botteltype->name ? 'selected':'' }}>{{ $botteltype->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2 form-group mb-3">
                <h6>Case Pack <span>*</span></h6>
                <input type="text" class="form-control" name="casepack" id="" value="{{ $product->casepack ?? '' }}" placeholder="KG, PCs, MG, ML, etc." required>
            </div>
            <div class="col-md-2 form-group mb-3">
                <h6>Quantity <span>*</span></h6>
                <input type="text" class="form-control" name="quantity" id="" value="{{ $product->quantity ?? '' }}" placeholder="10 Tables." required>
            </div>

            <div class="col-md-2 form-group">
                <h6>Top Product <span>*</span></h6>
                <label class="switch">
                    <input type="checkbox"  name="is_featured" value="1" {{ ($product->is_featured ?? 0) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div>

            <div class="col-md-2 form-group">
                <h6>Is Trending <span>*</span></h6>
                <label class="switch">
                    <input type="checkbox"  name="is_trending" value="1" {{ ($product->is_trending ?? 0) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div>

            <div class="col-md-2 form-group">
                <h6>Status <small class="text-muted">(Active/Inactive)</small> <span>*</span></h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($product->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div>
            <div class="col-md-3 form-group mb-3">
                <h6>Main Image <small class="text-muted">(Single)</small> <span>*</span></h6>
                <input type="file" class="form-control" name="main_img" id="" accept="image/*">
                @if (($product ?? '') != '')
                    @foreach (($product->getMedia('main_img') ?? []) as $file)
                    <div class="img-box media_id_{{ $file->id }}">
                        <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-3 form-group mb-3">
                <h6>Gallery Images <small class="text-muted">(Multiple)</small> <span>*</span></h6>
                <input type="file" class="form-control" name="gallery_imgs[]" id="gallery_imgs" accept="image/*" multiple>
                 @if (($product ?? '') != '')
                    @foreach (($product->getMedia('gallery_imgs') ?? []) as $file)
                    <div class="img-box media_id_{{ $file->id }}">
                        <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                        <a href="javascript:void({{ $file->id }})" class="f-18 text-danger" onclick="delete_media({{ $file->id }})"><i class="fa fa-trash-o"></i></a>
                    </div>
                    @endforeach
                @endif
            </div>

            <div class="col-md-12 form-group mb-3">
                <h6>Short Description <span>*</span></h6>
                <textarea class="form-control" name="short_description" id="" cols="30" rows="5">{!! $product->short_description ?? '' !!}</textarea>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Description <span>*</span></h6>
                <textarea class="form-control" name="description" id="editor1" cols="30" rows="5">{!! $product->description ?? '' !!}</textarea>
            </div>

            {{-- ---------------------------------------------- Product Benefits START ---------------------------------------------- --}}
            <div class="accordion-item border-primary">
                <h2 class="accordion-header border-primary">
                    <button class="accordion-button accordion-light-primary text-primary border-primary border-bottom f-w-500 {{ ($product->enable_product_benefits ?? 1) == 1 ? 'active':'' }}" type="button">
                        Product Benefits
                        <label class="switch mb-0 ms-2" data-bs-toggle="collapse" data-bs-target="#product_benefits" aria-expanded="true" aria-controls="product_benefits">
                            <input type="checkbox"  name="enable_product_benefits" value="1" {{ ($product->enable_product_benefits ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                        </label>
                    </button>
                </h2>
                <div class="accordion-collapse collapse {{ ($product->enable_product_benefits ?? 1) == 1 ? 'show':'' }}" id="product_benefits">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="">Upload Product Benefits Banner <small class="text-muted">(Multiple)</small> <span>*</span></label>
                                <input type="file" class="form-control" name="product_benefits_img[]" multiple id="" accept="image/*">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                @if (($product ?? '') != '')
                                    @foreach (($product->getMedia('product_benefits_img') ?? []) as $file)
                                    <div class="img-box media_id_{{ $file->id }}">
                                        <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL() ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: cover"></a>
                                        <a href="javascript:void({{ $file->id }})" class="f-18 text-danger" onclick="delete_media({{ $file->id }})"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ---------------------------------------------- Product Benefits END ---------------------------------------------- --}}
            {{-- ---------------------------------------------- Product Features START ---------------------------------------------- --}}
            <div class="accordion-item border-primary">
                <h2 class="accordion-header border-primary">
                    <button class="accordion-button accordion-light-primary text-primary border-primary border-bottom f-w-500 {{ ($product->enable_product_features ?? 1) == 1 ? 'active':'' }}" type="button" data-bs-toggle="collapse" data-bs-target="#product_features" aria-expanded="true" aria-controls="product_features">
                        Product Features
                        <label class="switch mb-0 ms-2">
                            <input type="checkbox"  name="enable_product_features" value="1" {{ ($product->enable_product_features ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                        </label>
                    </button>
                </h2>
                <div class="accordion-collapse collapse {{ ($product->enable_product_features ?? 1) == 1 ? 'show':'' }}" id="product_features">
                    <div class="accordion-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th><button class="btn btn-success btn-xs" type="button" onclick="add_product_features_row()">+</button></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ((old('product_features') ?? $product_features ?? []) as $key => $product_features)
                                    <tr class="table_tr" data-id="{{ $key }}">
                                        <td>{{ $key+1 }} <input type="hidden" name="product_features[{{ $key }}][id]" value="{{ $product_features->id ?? 0 }}"></td>
                                        <td>
                                            <input type="text" class="form-control" name="product_features[{{ $key }}][title]" value="{{ $product_features->title ?? '' }}" placeholder="Enter Title" required>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="product_features[{{ $key }}][description]" placeholder="Enter Description" required>{{ $product_features->description ?? '' }}</textarea>
                                        </td>
                                        <td>
                                            @if (file_exists(public_path($product_features->img ?? '#')))
                                            <div class="img-box product_features_img_box_{{ $key }}">
                                                <a href="{{ asset($product_features->img ?? '#') }}" target="_blank"><img src="{{ asset($product_features->img ?? '#') }}" alt="" style="width: 60px; height: 60px; object-fit: cover"></a>
                                                <a href="javascript:void({{ $product_features->id }})" class="f-18 text-danger" onclick="delete_product_features_img({{ $key }})"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            @else
                                            <input type="file" class="form-control" name="product_features[{{ $key }}][image]">
                                            @endif
                                            @if (($product_features ?? '') != '')
                                                @foreach (($product_features->getMedia('image') ?? []) as $file)
                                                <div class="img-box media_id_{{ $file->id }}">
                                                    <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                                                </div>
                                                @endforeach
                                            @endif
                                            <input type="hidden" name="product_features[{{ $key }}][old_img]" value="{{ $product_features->img ?? '' }}">
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button" onclick="$(this).parent().parent().remove();">-</button>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ---------------------------------------------- Product Features END ---------------------------------------------- --}}
        </div>
    </div>
    <div class="modal-footer text-end">
        <button type="submit" class="btn" style="background-color: #dca72e;">Save</button>
    </div>
</form>

<script>
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();

    function add_product_features_row(){
        var numRows = Number($('#product_features .table_tr:last').data('id') ?? -1) + 1;
        var html = `
        <tr class="table_tr" data-id="${numRows}">
            <td>${numRows+1} <input type="hidden" name="product_features[${numRows}][id]" value="0"></td>
            <td>
                <input type="text" class="form-control" name="product_features[${numRows}][title]" value="" placeholder="Enter Title" required>
            </td>
            <td>
                <textarea class="form-control" name="product_features[${numRows}][description]" placeholder="Enter Description" required></textarea>
            </td>
            <td>
                <input type="file" class="form-control" name="product_features[${numRows}][image]" value="" required>
                <input type="hidden" name="product_features[${numRows}][old_img]" value="">
            </td>
            <td>
                <button class="btn btn-danger btn-xs" type="button" onclick="$(this).parent().parent().remove();">-</button>
            </td>
        </tr>`;
        $('#product_features tbody').append(html);
    }

    function delete_product_features_img(key){
        $('.product_features_img_box_'+key).removeClass('img-box');
        $('.product_features_img_box_'+key).html('<input type="file" class="form-control" name="product_features['+key+'][img]" required>');
    }

</script>
<script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
