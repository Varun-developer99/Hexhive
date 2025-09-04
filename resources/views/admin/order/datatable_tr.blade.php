<td>{{ $item->order_no ?? '-' }}</td>
<td>{{ $item->name ?? '-' }}</td>
<td>{{ $item->email ?? '-' }}</td>
<td>{{ $item->phone ?? '-' }}</td>
<td>{{ $item->address_1 ?? '-' }} {{ $item->address_2 ?? '-' }}, {{ $item->city ?? '-' }}, {{ $item->state ?? '-' }} {{ $item->country ?? '-' }}</td>
<td>{{ $item->pincode ?? '-' }}</td>
<td>{{ $item->note ?? '-' }}</td>
<td>{{ $item->payment_method ?? '-' }}</td>
<td>{{ price_format($item->sub_total ?? 0) }}</td>
<td>{{ price_format($item->shipping_cost ?? 0) }}</td>
<td>{{ price_format($item->total_tax_amount ?? 0) }}</td>
<td>{{ price_format($item->discount ?? 0) }}</td>
<td>{{ price_format($item->grand_total ?? 0) }}</td>


{{-- <td>
    <div class="img-box">
        <a href="{{ $item->image_url ?? asset('no_image.jpg') }}" target="_blank"><img src="{{ $item->thumb_url ?? asset('no_image.jpg') }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
    </div>
</td> --}}
{{-- <td>
    <span class="badge badge-{{ $item->order_status == '1' ? 'success':'danger' }} pointer" id="status_{{ $item->id }}" onclick="change_status({{ $item->id }})">{{ $item->order_status == '1' ? 'Active':'Inactive' }}</span>
</td> --}}
<td>
    <span class="badge badge-light-{{ $item->order_status == 'Delivered' ? 'success':'primary' }}">{{ $item->order_status }}</span>
</td>
<td>
    <span class="badge badge-light-{{ $item->payment_status == 'Paid' ? 'success':'primary' }}">{{ $item->payment_status }}</span>
</td>
<td>
    <a href="{{ route('warehouse.orders.show',$item->id) }}" class="text-primary p-1 f-22">
        <i class="fa fa-eye"></i>
    </a>
    {{-- <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('warehouse.orders.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a> --}}
</td>