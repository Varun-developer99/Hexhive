<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                {{-- <th>Is Featured</th> --}}
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($policy as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $policy->firstItem() + $loop->index }}</td>
                @include('admin.policy.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$policy->links()}}
</div>
