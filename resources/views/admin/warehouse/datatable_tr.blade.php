<td>{{ $item->owner_name ?? '-' }}</td>
<td>{{ $item->email ?? '-' }}</td>
<td>{{ $item->phone ?? '-' }}</td>
<td>{{ $item->name ?? '-' }}</td>
<td>{{ $item->address ?? '-' }}</td>
<td>{{ $item->city ?? '-' }}</td>
<td>{{ $item->state ?? '-' }}</td>
<td>{{ $item->pincode ?? '-' }}</td>
<td>
    {{ $item->license_number ?? '-' }}
    <a href="{{ $item->drug_license ?? '-' }}" target="_blank"><i class="fa fa-file"></i></a>
</td>
<td>
    {{ $item->gst_number ?? '-' }}
    <a href="{{ $item->gst_certificate ?? '-' }}" target="_blank"><i class="fa fa-file"></i></a>
</td>
<td>
    @if ($item->status == '1')
        <span class="badge badge-success" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="change_status({{ $item->id }})">Active</span>
    @elseif ($item->status == '-1')
        <span class="badge badge-danger" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="change_status({{ $item->id }})">Rejected</span>
    @else
        <span class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="change_status({{ $item->id }})">Pending</span>
    @endif
    @if ($item->status_remarks)
        <br>
        <small>{{ $item->status_remarks ?? '' }}</small>
    @endif
</td>
<td>
    <a href="{{ route('admin.user.login',$item->id) }}" class="text-primary p-1 f-22">
        <i class="fa fa-sign-in"></i>
    </a>
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('admin.warehouse.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>