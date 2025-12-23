<div class="table-responsive custom-scrollbar">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Info</th>
                <th scope="col">Subscription Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="wd-form-order border-0">
                    <div class="order-head mb-0 p-0">
                        @foreach (($order_details->product->getMedia('main_img') ?? []) as $file)
                        <figure class="img-product">
                            <img src="{{ $file->getURL() ?? '#' }}" alt="product">
                        </figure>
                        @endforeach
                        <div class="content">
                            <div class="text-2 fw-6"> 
                                <a href="{{ route('front.product', $order_details->product->slug ?? '#') }}" target="_blank" rel="noopener noreferrer">
                                    {{ $order_details->product->name ?? '-' }}
                                </a>
                            </div>
                            <div class="mt_4"><span class="fw-6"></span> @foreach (json_decode($order_details->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach</div>
                        </div>
                    </div>
                </td>
                 <td>
                    <ul class="subscribe-details" style="font-size: 14px;">
                        <li><span class="fw-6 text-muted">Per Day Cost:</span> {{ price($order_details->per_day_rent ?? 0) }}</li>
                        <li><span class="fw-6 text-muted">Subscribe for:</span> {{ $order_details->rent_days ?? 0 }} Days {{ ($order_details->extended_days ?? 0) ? ' + '.$order_details->extended_days.' Days' : '' }}</li>
                        <li><span class="fw-6 text-muted">Quantity:</span> {{ $order_details->qty ?? 0 }}</li>
                        <li><span class="fw-6 text-muted">Total Rent:</span> ${{ ($order_details->per_day_rent ?? 0) }} x {{ $order_details->rent_days ?? 0 }} Days {{ ($order_details->extended_days ?? 0) ? ' + '.$order_details->extended_days.' Days' : '' }} x {{ $order_details->qty ?? 0 }} = {{ price(($order_details->per_day_rent ?? 0) * ($order_details->rent_days ?? 0) * ($order_details->qty ?? 0)) }}</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<hr>
<p class="mb-2 text-center">Current Rental Period: <b class="text-muted">{{ $order_details->rental_start_date ? date('d M, Y', strtotime($order_details->rental_start_date)) : 'N/A' }} - {{ $order_details->rental_end_date ? date('d M, Y', strtotime($order_details->rental_end_date)) : 'N/A' }}</b></p>
<form action="{{ route('customer.rental_order.extend') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $order_details->id ?? '' }}">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="extended_days" class="form-label fw-6">Extend Days <span class="text-danger">*</span></label>
            <input type="number" id="extended_days" name="extended_days" min="1" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="reason" class="form-label fw-6">Reason <span class="text-danger">*</span></label>
            <input type="text" id="reason" name="remarks" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>