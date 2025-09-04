<td>{{ $item->name ?? '-' }}</td>
<td>
    {{ $item->email ?? '-' }}
</td>
<td>{{ $item->subject ?? '-' }}</td>
<td>
    @php
        $maxLength = 50;
        $message = $item->message ?? '-';
    @endphp
    @php
        $chunks = str_split($message, $maxLength);
    @endphp
    @foreach($chunks as $chunk)
        {{ $chunk }}<br>
    @endforeach
</td>
<td>
    <span class="badge badge-{{ $item->status == 'Completed' ? 'success':'warning' }} pointer" id="status_{{ $item->id }}" onclick="change_status({{ $item->id }})">{{ $item->status == 'Completed' ? 'Completed':'Pending' }}</span>
</td>
<td>
    <a onclick="delete_entry('{{ route('admin.contact.delete',$item->id)}}', {{ $item->id }})" class="text-danger pointer p-1 f-22" data-toggle="tooltip" title="Delete">
        <i class="fa fa-trash-o"></i>
    </a>
</td>