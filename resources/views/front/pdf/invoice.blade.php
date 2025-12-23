<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body { font-family: 'Arial', sans-serif; margin: 0px; padding: 0px; background: #f4f4f4; }
        .invoice-box { width: 91%; max-width: 800px; margin: auto; padding: 30px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .header h2 { font-size: 24px; color: #333; margin: 0; }
        .header h3 { font-size: 18px; color: #666; margin: 0; }
        .company-info { text-align: right; }
        .company-info p { margin: 2px 0; font-size: 14px; color: #555; }
        .section { margin-top: 20px; padding: 10px; }
        .section p { margin: 5px 0; font-size: 14px; color: #555; }
        .bold { font-weight: bold; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table th { background: #f4f4f4; padding: 12px; border: 1px solid #ddd; text-align: left; }
        table td { padding: 10px; border: 1px solid #ddd; font-size: 14px;}
        .total-row { background: #f9f9f9; font-weight: bold; }
        .order-summary { margin-top: 20px; }
        .billing-info, .shipping-info, .order-date { display: inline-block; width: 29%; vertical-align: top; padding: 10px; border: 1px solid #ddd; border-radius: 5px; background: #f9f9f9; }
        .billing-info { width: 62%; }
        .footer { text-align: center; margin-top: 20px; font-size: 14px; color: #555; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header">
            <div>
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('front_assets/images/logo/fidelityblack.png'))) }}" style="max-width:150px;">
                <h2>Invoice</h2>
                <h3>Order #{{ $order->order_no }}</h3>
            </div>
            <div class="company-info">
                <p class="bold">Fidelity Health Care</p>
                <p>70 Tatariki Street, Rosehill, Auckland 2113, NewZealand</p>
                <p>Phone: (+64) 0273 999 911 | Email: sales@fidelityhealthcare.co.nz</p>
            </div>
        </div>
        
        <div class="section">
            <div class="billing-info">
                <p class="bold">Customer Details:</p>
                <p>Name: {{ $order->name }}</p>
                <p>Email: {{ $order->email }}</p>
                <p>Phone: {{ $order->phone }}</p>
                <p>Address: {{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->postcode }}, {{ $order->country }}</p>
            </div>
            {{-- <div class="shipping-info">
                <p class="bold">Shipped To:</p>
                <p>Jane Smith</p>
                <p>1234 Main</p>
                <p>Apt. 4B</p>
                <p>Springfield, ST 54321</p>
            </div> --}}
            <div class="order-date">
                <p class="bold">Order Date:</p>
                <p>{{ ($order->created_at ?? '') ? date('d M, Y h:i A', strtotime($order->created_at)) : '' }}</p>
                <p class="bold">Order Note:</p>
                <p>{{ $order->note ?? '-' }}</p>
            </div>
        </div>
        
        <div class="section">
            <p><span class="bold">Payment Method: </span> Card</p>
            <p><span class="bold">Transaction ID: </span> DBASJD66464FSFB</p>
        </div>

        <div class="order-summary">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Totals</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->order_details as $order_details)
                    <tr>
                        <td>
                            {{ $order_details->product->name ?? '-' }}
                            <small class="mb-0 f-light">(@foreach (json_decode($order_details->attribute_value_ids ?? '[]') as $attribute_value_id){{ attribute_value_data($attribute_value_id)->name ?? 'N/A' }}{{ $loop->last ? '' : '/' }}@endforeach)</small>
                        </td>
                        @if ($order_details->order_type == 'Subscribe')
                        <td>{{ price($order_details->per_day_rent ?? 0) }} x {{ $order_details->rent_days ?? '-' }} Days {{ ($order_details->extended_days ?? 0) ? ' + '.$order_details->extended_days.' Days' : '' }} = <b>{{ price($order_details->total_amount ?? 0) }}</b></td>
                        @else
                        <td>{{ price($order_details->sale_price ?? 0) }}</td>
                        @endif
                        <td>{{ $order_details->qty ?? 0 }}</td>
                        <td>{{ price($order_details->total_amount ?? 0) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <table>
                <tr class="total-row">
                    <td class="total">Subtotal</td>
                    <td>{{ price($order->sub_total ?? 0) }}</td>
                </tr>
                <tr class="total-row">
                    <td class="total">Discount</td>
                    <td>-{{ price($order->discount ?? 0) }} </td>
                </tr>
                <tr class="total-row">
                    <td class="total">Tax <small style="color: rgba(33, 37, 41, 0.75)">(15% Included)</small></td>
                    <td>{{ price($order->tax_amount ?? 0) }} </td>
                </tr>
                <tr class="total-row">
                    <td class="total">Shipping</td>
                    <td>{{ ($order->shipping_cost ?? 0) == 0 ? 'Free' : price($order->shipping_cost ?? 0) }}</td>
                </tr>
                <tr class="total-row">
                    <td class="total">Total</td>
                    <td>{{ price($order->grand_total ?? 0) }} NZD</td>
                </tr>
            </table>
        </div>
        
        <div class="footer">
            <p>Thank you for your business!</p>
        </div>
    </div>
</body>
</html>
