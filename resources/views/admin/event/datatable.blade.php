<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Video URL</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $event->firstItem() + $loop->index }}</td>
                @include('admin.event.datatable_tr')
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$event->links()}}
</div>
<script>
    $('#basic-test').DataTable({
    dom: 'Brt',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ],
    pageLength: -1,
    lengthMenu: [[-1], ['All']]
});
</script>