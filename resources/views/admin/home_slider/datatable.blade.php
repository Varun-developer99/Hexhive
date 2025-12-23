<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Desktop Banner</th>
                <th>Mobile Banner</th>
                <th>link</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($home_slider as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $home_slider->firstItem() + $loop->index }}</td>
                @include('admin.home_slider.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$home_slider->links()}}
</div>
