<div class="dt-ext table-responsive">
    <table class="table table-striped table-hover dataTable nowrap  table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($contacts))
            @foreach ($contacts as $key => $item)
            <tr id="tr_{{ $item->id }}">
                <td class="sr">{{ $contacts->firstItem() + $loop->index }}</td>
                @include('admin.contact.datatable_tr')
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5" class="text-center">No Contacts Found</td>
            </tr>
            @endif
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$contacts->links()}}
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