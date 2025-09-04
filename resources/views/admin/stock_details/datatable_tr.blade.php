<td>
    <div class="product-box">
        @if (count($item->product->getMedia('main_img') ?? []) != 0)
            @foreach (($item->product->getMedia('main_img') ?? []) as $file)
            <div class="img-box media_id_{{ $file->id }}">
                <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
            </div>
            @endforeach
        @else   
            <div class="img-box">
                <a href="{{ asset('no_image.jpg') }}" target="_blank"><img src="{{ asset('no_image.jpg') }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
            </div>
        @endif
        {{ $item->product->name ?? '-' }}
    </div>
</td>
<td>{{ date('d M,Y h:i a', strtotime($item->created_at)) }}</td>
<td>{{ $item->warehouse->name ?? '-' }}</td>
<td>{{ $item->brand->name ?? '-' }}</td>
<td>{{ $item->category->name ?? '-' }}</td>
<td>{{ $item->qty ?? '-' }}</td>
<td>{{ $item->in_out ?? '-' }}</td>
<td>
    {{-- <a href="{{ route('stock_details.show',$item->id) }}" class="text-primary p-1 f-22">
        <i class="fa fa-eye"></i>
    </a> --}}
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('warehouse.stock_details.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>