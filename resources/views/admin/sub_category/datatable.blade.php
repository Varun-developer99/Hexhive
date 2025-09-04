<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                {{-- <th>Image</th> --}}
                <th>Is Featured</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sub_category as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $sub_category->firstItem() + $loop->index }}</td>
                @include('admin.sub_category.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$sub_category->links()}}
</div>
