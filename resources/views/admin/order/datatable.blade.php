<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Order No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Note</th>
                <th>Payment Method</th>
                <th>Sub Total</th>
                <th>Shipping Cost</th>
                <th>Total Tax Amount</th>
                <th>Discount</th>
                <th>Payable Amount</th>
                <th>Order Status</th>
                <th>Payment Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $orders->firstItem() + $loop->index }}</td>
                @include('admin.order.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$orders->links()}}
</div>
