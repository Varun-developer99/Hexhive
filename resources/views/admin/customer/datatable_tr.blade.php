<td>{{ $item->name ?? '-' }}</td>
<td>{{ $item->email ?? '-' }}</td>
<td>
    <span class="badge badge-{{ $item->status == '1' ? 'success':'danger' }} pointer" id="status_{{ $item->id }}" onclick="change_status({{ $item->id }})">{{ $item->status == '1' ? 'Active':'Inactive' }}</span>
</td>
<td>
    <a onclick="delete_entry('{{ route('admin.customer.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>