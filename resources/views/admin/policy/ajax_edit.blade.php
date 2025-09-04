<form class="modal-content" action="{{ route('admin.policy.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $policy->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($policy->id ?? 0) != 0 ? 'Edit':'Add' }} Policy </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-12 form-group mb-3">
                <h6>Title <span>*</span></h6>
                <input type="text" class="form-control" name="title" id="" value="{{ $policy->title ?? '' }}" {{ ($policy->id ?? 0) != 0 ? 'readonly' : '' }} required>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Description <span>*</span></h6>
                <textarea class="form-control" name="description" id="editor1" rows="5" required>{{ $policy->description ?? '' }}</textarea>
            </div>
            {{-- <div class="col-md-6 form-group">
                <h6>Is Featured</h6>
                <label class="switch">
                    <input type="checkbox"  name="is_featured" value="1" {{ ($policy->is_featured ?? 0) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div> --}}
            <div class="col-md-6 form-group">
                <h6>Status</h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($policy->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
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
<script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>