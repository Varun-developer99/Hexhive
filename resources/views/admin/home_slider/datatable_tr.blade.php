<td>{{ $item->name ?? '-' }}</td>
<td><a href="{{ asset($item->img ?? '') }}" target="_blank"><img src="{{ asset($item->img ?? '') }}" width="50px" alt=""></a></td>
<td><a href="{{ asset($item->mobile_img ?? '') }}" target="_blank"><img src="{{ asset($item->mobile_img ?? '') }}" width="50px" alt=""></a></td>
<td>
    <a href="{{ $item->link }}" target="_blank" style="font-size:14px;">Link</a>
   </td>
<td>
    <span class="badge badge-{{ $item->status == '1' ? 'success':'danger' }}">{{ $item->status == '1' ? 'Active':'Inactive' }}</span>
</td>

<td>
    {{-- <a href="{{ route('home_slider.show',$item->id) }}" class="text-primary p-1 f-22">
        <i class="fa fa-eye"></i>
    </a> --}}
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('admin.home_slider.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>
