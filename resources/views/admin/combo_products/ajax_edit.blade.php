<form class="modal-content" action="{{ route('admin.comboproducts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $comboproducts->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($comboproducts->id ?? 0) != 0 ? 'Edit':'Add' }} Combo Products </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-12 form-group mb-3">
                <h6>Name <span>*</span></h6>
                <input type="text" class="form-control" name="name" id="" value="{{ $comboproducts->name ?? '' }}" required>
            </div>
            <div class="col-md-12 form-group  mb-3">
                <h6>Products</h6>
                <select class="form-control js-example-basic-single" name="products[]" id="comboproducts" multiple>
                    <option value="" disabled>--Select--</option>
                    @php
                        $selectedProducts = [];
                        if (!empty($comboproducts->products)) {
                            $selectedProducts = is_array($comboproducts->products) ? $comboproducts->products : json_decode($comboproducts->products, true);
                        }
                    @endphp
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ in_array($product->id, $selectedProducts ?? []) ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 form-group">
                <h6>Image</h6>
                <input type="file" class="form-control" name="main_img" id="" value="{{ $comboproducts->main_img ?? '' }}">
            </div>

            <div class="col-md-6 form-group">
                <h6>Status</h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($comboproducts->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
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