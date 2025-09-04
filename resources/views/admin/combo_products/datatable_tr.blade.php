<td>
    <img src="{{ $item->thumb_url ?? asset('no_image.jpg') }}" alt="" style="width: 40px; height: 40px; object-fit: contain">
</td>
<td>{{ $item->name ?? '-' }}</td>
<td>
    @php
        $productIds = array_keys($item->getProducts() ?? []);
        $products = [];
        if (!empty($productIds)) {
            $products = \App\Models\Product::whereIn('id', $productIds)->get();
        }
    @endphp
    @if(!empty($products) && count($products))
        <div class="row g-2">
            @foreach($products as $product)
                <div class="col-auto d-flex align-items-center" style="min-width:180px; padding:5px 0;">
                    <div class="img-box me-2">
                        <a href="{{ $product->image_url ?? asset('no_image.jpg') }}" target="_blank">
                            <img src="{{ $product->thumb_url ?? asset('no_image.jpg') }}" alt="" style="width: 40px; height: 40px; object-fit: contain">
                        </a>
                    </div>
                    <div style="text-align: left;">
                        <div style="font-size: 13px; font-weight: 500;">{{ $product->name }}</div>
                        <div style="font-size: 12px; color: #28a745;">₹{{ $product->sale_price }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        -
    @endif
</td>
<td>
    <span class="badge badge-{{ $item->status == '1' ? 'success':'danger' }} pointer" id="status_{{ $item->id }}" onclick="change_status({{ $item->id }})">{{ $item->status == '1' ? 'Active':'Inactive' }}</span>
</td>
<td>
    <a href="#" class="text-warning p-1 f-22" data-toggle="tooltip" title="Edit" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="edit_modal({{ $item->id }})">
        <i class="fa fa-edit"></i>
    </a>
    <a onclick="delete_entry('{{ route('admin.comboproducts.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>