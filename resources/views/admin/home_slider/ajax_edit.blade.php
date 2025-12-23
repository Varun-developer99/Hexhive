<form class="modal-content" action="{{ route('admin.home_slider.insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $home_slider->id ?? 0 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($home_slider->id ?? 0) != 0 ? 'Edit':'Add' }} Home Slider </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-12 form-group mb-3">
                <h6>Name <span>*</span></h6>
                <input type="text" class="form-control" name="name" id="" value="{{ $home_slider->name ?? '' }}" required>
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Link <span>*</span></h6>
                <input type="url" class="form-control" name="link" value="{{ $home_slider->link ?? '' }}">
            </div>
            <div class="col-md-12 form-group mb-3">
                <h6>Upload Image <small>(Desktop Banner)</small> <span>*</span></h6>
                <input type="file" class="form-control" name="img" id="" accept="image/*">
                <input type="hidden" name="old_img" value="{{ $home_slider->img ?? 'no-img.jpg' }}">
                <a href="{{ asset($home_slider->img ?? 'no-img.jpg') }}" target="_blank"><img src="{{ asset($home_slider->img ?? 'no-img.jpg') }}" width="50px" alt=""></a>
            </div>
            <div class="col-md-12 form-group">
                <h6>Upload Image <small>(Mobile Banner)</small> <span>*</span></h6>
                <input type="file" class="form-control" name="mobile_img" id="" accept="image/*">
                <input type="hidden" name="old_mobile_img" value="{{ $home_slider->mobile_img ?? 'no-img.jpg' }}">
                <a href="{{ asset($home_slider->mobile_img ?? 'no-img.jpg') }}" target="_blank"><img src="{{ asset($home_slider->mobile_img ?? 'no-img.jpg') }}" width="50px" alt=""></a>
            </div>
            <div class="col-md-6 form-group">
                <h6>Status</h6>
                <label class="switch">
                    <input type="checkbox"  name="status" value="1" {{ ($home_slider->status ?? 1) == 1 ? 'checked':'' }}><span class="switch-state"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<script>
    function get_sales_person(sales_coordinator_id){
        $('#select_sales_person_id').prop('disabled',true);
        $.get('{{ url('get_sales_person') }}', { sales_coordinator_id:sales_coordinator_id }, function(data){
            $('#select_sales_person_id').html(data);
            $('#select_sales_person_id').prop('disabled',false);
            $('.js-example-basic-single').select2();
        });
    }
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
</script>