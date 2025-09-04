<div class="dt-ext table-responsive">
    <table class="table dataTable nowrap table-bordered" id="basic-test">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Current Stock</th>
                {{-- <th>Options</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $item)
            <tr class="{{ ($item->current_stock ?? 0) <= 0 ? 'bg-light-danger':'' }}">
                <td>{{ $product->firstItem() + $loop->index }}</td>
                <td>
                    <div class="product-box">
                        @if (count($item->getMedia('main_img') ?? []) != 0)
                            @foreach (($item->getMedia('main_img') ?? []) as $file)
                            <div class="img-box media_id_{{ $file->id }}">
                                <a href="{{ $file->getURL() ?? '#' }}" target="_blank"><img src="{{ $file->getURL('thumb') ?? '#' }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                            </div>
                            @endforeach
                        @else   
                            <div class="img-box">
                                <a href="{{ asset('no_image.jpg') }}" target="_blank"><img src="{{ asset('no_image.jpg') }}" alt="" style="width: 60px; height: 60px; object-fit: contain"></a>
                            </div>
                        @endif
                        {{ $item->name ?? '-' }}
                    </div>
                </td>
                <td>{{ $item->brand->name ?? '-' }}</td>
                <td>{{ $item->category->name ?? '-' }}</td>
                <td>{{ ($item->current_stock ?? 0) }}</td>
                {{-- <td>
                    <a href="{{ route('product.show',$item->id) }}" class="text-primary p-1 f-22">
                        <i class="fa fa-eye"></i>
                    </a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <input type="submit" value="Delete Selected" class="btn btn-danger btn-sm" name="submit" id="submit" onclick="return confirm('Are you sure?')"> --}}
</div>

<div>
    {{$product->links()}}
</div>
