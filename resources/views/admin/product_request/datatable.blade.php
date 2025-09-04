<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Request Code</th>
                <th>Requested By</th>
                <th>Name</th>
                <th>Image</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Price</th>
                <th>Prescription</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product_request as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $product_request->firstItem() + $loop->index }}</td>
                @include('admin.product_request.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$product_request->links()}}
</div>
