<div class="dt-ext table-responsive">
    <table class="table dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Date</th>
                <th>Category</th>
                <th>QTY</th>
                <th>In/Out</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stock_details as $key => $item)
            <tr id="tr_{{ $item->id }}" class="{{ $item->in_out == 'In' ? 'bg-light-success' : 'bg-light-danger' }}">
                <td class="sr">{{ $stock_details->firstItem() + $loop->index }}</td>
                @include('admin.stock_details.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$stock_details->links()}}
</div>
