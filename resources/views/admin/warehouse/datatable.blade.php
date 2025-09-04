<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Owner Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Warehouse Name</th>
                <th>Warehouse Address</th>
                <th>Warehouse City</th>
                <th>Warehouse State</th>
                <th>Warehouse Pincode</th>
                <th>Drug License Number</th>
                <th>GST Number</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warehouse as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $warehouse->firstItem() + $loop->index }}</td>
                @include('admin.warehouse.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$warehouse->links()}}
</div>
