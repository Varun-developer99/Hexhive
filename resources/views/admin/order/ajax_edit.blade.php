<form class="modal-content" action="{{ route('admin.sub_category.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $sub_category->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($sub_category->id ?? 0) != 0 ? 'Edit':'Add' }} Sub Category </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-12 form-group mb-3">
                <h6>Name <span>*</span></h6>
                <input type="text" class="form-control" name="name" id="" value="{{ $sub_category->name ?? '' }}" required>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Category <span>*</span></h6>
                <select name="category_id" id="" class="form-control js-example-basic-single" required>
                    <option value="" disabled selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ ($sub_category->category_id ?? 0) == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
             <div class="col-md-12 form-group mb-3">
                <h6>Image <small>(Optional)</small></h6>
                <input type="file" class="form-control" name="main_img" id="" accept="image/*">
                <div class="img-box">
                    <a href="{{ $sub_category->image_url ?? asset('no_image.jpg') }}" target="_blank"><img src="{{ $sub_category->thumb_url ?? asset('no_image.jpg') }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <h6>Status</h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($sub_category->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<script>
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
</script>