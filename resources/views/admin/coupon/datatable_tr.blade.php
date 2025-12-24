<td>{{ $item->code ?? '-' }}</td>
<td>{{ $item->discount ?? '-' }}</td>
<td>
    <span class="badge badge-{{ $item->status == '1' ? 'success':'danger' }}">{{ $item->status == '1' ? 'Active':'Inactive' }}</span>
</td>
<td>
    {{-- <a href="{{ route('front.policy_page.show',$item->slug) }}" class="text-primary p-1 f-22">
        <i class="fa fa-eye"></i>
    </a> --}}
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('admin.coupon.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>