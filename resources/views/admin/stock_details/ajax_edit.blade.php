<form class="modal-content" action="{{ route('warehouse.stock_details.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $stock_details->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($stock_details->id ?? 0) != 0 ? 'Edit':'Add' }} Brand </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-12 form-group mb-3">
                <h6>Product <span>*</span></h6>
                <select class="js-example-basic-single" name="product_id" id="">
                    <option value="">Select Product</option>
                    @foreach (App\Models\Product::all() as $product)
                        <option value="{{ $product->id }}" {{ ($stock_details->product_id ?? '') == $product->id ? 'selected':'' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>In/Out <span>*</span></h6>
                <div class="form-check-size rtl-input">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input me-2" id="stock_in" type="radio" name="in_out" value="In" checked="">
                        <label class="form-check-label" for="stock_in">In</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input me-2" id="stock_out" type="radio" name="in_out" value="Out" {{ ($stock_details->in_out ?? 'In') == 'Out' ? 'checked':'' }}>
                        <label class="form-check-label" for="stock_out">Out</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>QTY <span>*</span></h6>
                <input type="number" class="form-control" name="qty" id="" value="{{ $stock_details->qty ?? '' }}" required>
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