<td>{{ $item->code ?? '-' }}</td>
<td>{{ $item->name ?? '-' }}</td>
<td>
    <div class="img-box">
        <a href="{{ $item->image_url ?? asset('no_image.jpg') }}" target="_blank"><img src="{{ $item->thumb_url ?? asset('no_image.jpg') }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
    </div>
</td>
<td>{{ $item->brand->name ?? '-' }}</td>
<td>{{ $item->category->name ?? '-' }}</td>
<td>MRP: <b>{{ price_format($item->mrp_price ?? 0) }}</b> <br>
    Sale Price: <b>{{ price_format($item->sale_price ?? 0) }}</b>
</td>
{{-- <td>
    <span class="badge badge-light-{{ $item->prescription_required == 'Yes' ? 'success':'danger' }}">{{ $item->prescription_required }}</span>
</td> --}}
<td>
    <span class="badge badge-light-{{ $item->is_featured == '1' ? 'success':'danger' }}">{{ ($item->is_featured ?? '0') == 1 ? 'Yes' : 'No' }}</span>
</td>
<td>
    <span class="badge badge-{{ $item->status == '1' ? 'success':'danger' }} pointer" id="status_{{ $item->id }}" onclick="change_status({{ $item->id }})">{{ $item->status == '1' ? 'Active':'Inactive' }}</span>
</td>
<td>
    {{-- <a href="{{ route('product.show',$item->id) }}" class="text-primary p-1 f-22">
        <i class="fa fa-eye"></i>
    </a> --}}
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('admin.product.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>