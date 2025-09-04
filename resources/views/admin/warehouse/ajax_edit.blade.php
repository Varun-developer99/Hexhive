<form class="modal-content" action="{{ route('admin.warehouse.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $warehouse->id ?? 0 }}">
    <input type="hidden" name="status" value="{{ $warehouse->status ?? 1 }}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{ ($warehouse->id ?? 0) != 0 ? 'Edit':'Add' }} Warehouse </h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <fieldset class="border py-2 px-3 mb-3">
            <legend class="float-none w-auto">Owner & Login Details</legend>
            <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <h6>Owner Name <span>*</span></h6>
                    <input type="text" class="form-control" name="owner_name" id="" value="{{ $warehouse->owner_name ?? '' }}" required>
                </div>
                 <div class="col-md-6 form-group mb-3">
                    <h6>Phone Number <span>*</span></h6>
                    <input type="text" class="form-control" name="phone" id="" value="{{ $warehouse->phone ?? '' }}" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <h6>Email <span>*</span></h6>
                    <input type="email" class="form-control" name="email" id="" value="{{ $warehouse->email ?? '' }}" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <h6>Password <span>*</span></h6>
                    <input type="text" class="form-control" name="password" id="" value="">
                    <small>Current Password: {{ $warehouse->show_password ?? '' }}</small>
                </div>
            </div>
        </fieldset>
        <fieldset class="border py-2 px-3 mb-3">
            <legend class="float-none w-auto">Warehouse Details</legend>
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                    <h6>Warehouse Name <span>*</span></h6>
                    <input type="text" class="form-control" name="name" id="" value="{{ $warehouse->name ?? '' }}" required>
                </div>
                <div class="col-md-12 form-group mb-3">
                    <h6>Full Address <span>*</span></h6>
                    <input type="text" class="form-control" name="address" id="" value="{{ $warehouse->address ?? '' }}" required>
                </div>
                <div class="col-md-4 form-group mb-3">
                    <h6>City <span>*</span></h6>
                    <input type="text" class="form-control" name="city" id="" value="{{ $warehouse->city ?? '' }}" required>
                </div>
                <div class="col-md-4 form-group mb-3">
                    <h6>State <span>*</span></h6>
                    <input type="text" class="form-control" name="state" id="" value="{{ $warehouse->state ?? '' }}" required>
                </div>
                <div class="col-md-4 form-group mb-3">
                    <h6>Pincode <span>*</span></h6>
                    <input type="text" class="form-control" name="pincode" id="" value="{{ $warehouse->pincode ?? '' }}" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="border py-2 px-3 mb-3">
            <legend class="float-none w-auto">License & Tax Information</legend>
            <div class="row">
                 <div class="col-md-6 form-group mb-3">
                    <h6>Drug License Number <span>*</span></h6>
                    <input type="text" class="form-control" name="license_number" id="" value="{{ $warehouse->license_number ?? '' }}" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <h6>GST Number <span>*</span></h6>
                    <input type="text" class="form-control" name="gst_number" id="" value="{{ $warehouse->gst_number ?? '' }}" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <h6>Drug License Document</h6>
                    <input type="file" class="form-control" name="drug_license" id="">
                    @if(isset($warehouse->drug_license))
                        <a href="{{ $warehouse->drug_license }}" target="_blank"><i class="fa fa-file"></i> View Document</a>
                    @endif
                </div>
                <div class="col-md-6 form-group mb-3">
                    <h6>GST Certificate</h6>
                    <input type="file" class="form-control" name="gst_certificate" id="">
                    @if(isset($warehouse->gst_certificate))
                        <a href="{{ $warehouse->gst_certificate }}" target="_blank"><i class="fa fa-file"></i> View Document</a>
                    @endif
                </div>
            </div>
        </fieldset>

    </div>
    <div class="modal-footer text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<script>
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
</script>