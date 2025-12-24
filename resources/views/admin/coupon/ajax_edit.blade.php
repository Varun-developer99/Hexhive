<form class="modal-content" action="{{ route('admin.coupon.insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $coupon->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($coupon->id ?? 0) != 0 ? 'Edit':'Add' }} Coupon </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-12 form-group mb-3">
                <h6>Coupon Code <span>*</span></h6>
                <input type="text" class="form-control" name="code" id="" value="{{ $coupon->code  ?? '' }}" required>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Discount <span>*</span></h6>
                <div class="input-group">
                    <input type="number" class="form-control" name="discount" id="" value="{{ $coupon->discount  ?? '' }}" required>
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <h6>Status</h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($coupon->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<script>
    $('.js-example-basic-multiple').select2();
</script>