<td>{{ $item->code ?? '-' }}</td>
<td>{{ $item->created_by->name ?? '-' }}</td>
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
<td>
    <span class="badge badge-light-{{ $item->prescription_required == 'Yes' ? 'success':'danger' }}">{{ $item->prescription_required }}</span>
</td>
<td>
    @if (Auth::user()->role_as == 'Admin')
        <span class="badge badge-{{ $item->status == 'Pending' ? 'primary' : ($item->status == 'Approved' ? 'success' : 'danger') }} pointer" data-bs-toggle="modal" data-bs-target="#edit_modal"  onclick="change_status({{ $item->id }})">{{ $item->status }}</span>
    @else
        <span class="badge badge-light-{{ $item->status == 'Pending' ? 'primary' : ($item->status == 'Approved' ? 'success' : 'danger') }}">{{ $item->status }}</span>
    @endif
    {!! $item->status_remarks ? '<br><small class="text-muted">' . $item->status_remarks . '</small>' : '' !!}
</td>
<td>
    {{-- <a href="{{ route('product_request.show',$item->id) }}" class="text-primary p-1 f-22">
        <i class="fa fa-eye"></i>
    </a> --}}
    @if ($item->status != 'Approved')
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    @endif
    <a onclick="delete_entry('{{ route('warehouse.product_request.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>