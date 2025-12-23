<style>
    .notification {
        max-height: 400px;
        overflow-y: auto;
        padding: 10px;
    }
    .notification ul {
        position: relative;
    }
    .notification ul.dashed-line::before {
        position: absolute;
        content: "";
        border: 1px dashed #52526c;
        opacity: 0.3;
        top: 12px;
        left: 2px;
        height: calc(100% - 12px);
    }
    .notification li {
        padding-bottom: 22px;
    }
    .notification div[class*=activity-dot-] {
        margin-top: 12px;
        animation: round 1.3s ease-in-out infinite;
    }
    .notification .card .d-flex .w-100 p .badge {
        color: #fff;
        margin-left: 10px;
        font-weight: 500;
    }
    .notification .card .d-flex .w-100 h6 {
        margin-bottom: 5px;
        position: relative;
    }
    .notification .card .d-flex .w-100 h6 ~ p {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        text-emphasis: inherit;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        width: 260px;
    }
    @media (max-width: 767px) {
        .notification .card .d-flex .w-100 h6 ~ p {
            -webkit-line-clamp: unset;
            text-emphasis: unset;
            white-space: unset;
            text-overflow: unset;
            display: block;
            width: unset;
            overflow: visible;
        }
    }
    @keyframes round {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
    .notification .card .d-flex .w-100 span {
        color: #52526c;
    }
    .notification .card .d-flex:nth-child(2) .media-body h6 .dot-notification {
        background-color: #FFAA05;
        border: 5px solid #ffde9e;
    }
    .notification .card .d-flex:last-child {
        margin-bottom: 0 !important;
    }
    .notification .date-content {
        padding: 4px 8px;
        border-radius: 5px;
    }

    .notification ul li {
        padding-bottom: 25px;
    }

    @media (max-width: 1416px) {
        .notification ul li {
            padding-bottom: 16px;
        }
    }

    .notification ul li h6 {
        margin-bottom: 5px;
        font-size: 14px;
        font-weight: 500;
        line-height: 18.69px;
    }

    .notification ul li p {
        font-size: 12px;
        font-weight: 400;
    }

    @media (max-width: 1477px) {
        .notification ul li p:last-child {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            max-width: 126px;
        }
    }
    .activity-dot-primary {
        min-width: 6px;
        height: 6px;
        background-color: #7366FF;
        border-radius: 100%;
        outline: 5px solid rgba(115, 102, 255, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-secondary {
        min-width: 6px;
        height: 6px;
        background-color: #FF3364;
        border-radius: 100%;
        outline: 5px solid rgba(255, 51, 100, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-success {
        min-width: 6px;
        height: 6px;
        background-color: #54BA4A;
        border-radius: 100%;
        outline: 5px solid rgba(84, 186, 74, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-danger {
        min-width: 6px;
        height: 6px;
        background-color: #FC4438;
        border-radius: 100%;
        outline: 5px solid rgba(252, 68, 56, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-info {
        min-width: 6px;
        height: 6px;
        background-color: #16C7F9;
        border-radius: 100%;
        outline: 5px solid rgba(22, 199, 249, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-light {
        min-width: 6px;
        height: 6px;
        background-color: #f4f4f4;
        border-radius: 100%;
        outline: 5px solid rgba(244, 244, 244, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-dark {
        min-width: 6px;
        height: 6px;
        background-color: #2c323f;
        border-radius: 100%;
        outline: 5px solid rgba(44, 50, 63, 0.25);
        position: relative;
        z-index: 2;
    }

    .activity-dot-warning {
        min-width: 6px;
        height: 6px;
        background-color: #FFAA05;
        border-radius: 100%;
        outline: 5px solid rgba(255, 170, 5, 0.25);
        position: relative;
        z-index: 2;
    }
    .light-background {
        background-color: #f1f1f1;
    }
    .notification .badge{
        font-size: 10px;
        font-weight: 500;
        padding: 5px 8px;
        text-transform: none;
    }
    .notification .bg-primary {
        background-color: #7366FF !important;
    }
    .notification .bg-secondary {
        background-color: #FF3364 !important;
    }
    .notification .bg-success {
        background-color: #54BA4A !important;
    }
    .notification .bg-danger {
        background-color: #FC4438 !important;
    }
    .notification .bg-info {
        background-color: #16C7F9 !important;
    }
    .notification .bg-light {
        background-color: #f4f4f4 !important;
        color: #000 !important;
    }
    .notification .bg-dark {
        background-color: #2c323f !important;
    }
    .notification .bg-warning {
        background-color: #FFAA05 !important;
    }
    .extended-details li{
        font-size: 13px;
        padding-bottom: 0 !important;
    }
</style>
<h6>Rental Activity History</h6>
<hr>
<div class="notification">
    <ul class="dashed-line"> 
        @forelse (($order_details->rental_order_histories ?? []) as $history)
            @php
                $color = 'primary';
                if($history->rental_status == 'Delivered') $color = 'warning';
                else if($history->rental_status == 'Returned') $color = 'success';
                else if($history->rental_status == 'Extended') $color = 'warning';
            @endphp
            <li class="d-flex">
                <div class="activity-dot-{{ $color }}"></div>
                <div class="ms-3">
                    <p class="mb-2"><span class="date-content light-background">{{ date('d M, Y h:i A', strtotime($history->created_at)) }}</span> <span class="badge bg-{{ $color }}">{{ $history->rental_status }}</span></p>
                    <h6>{{ $history->remarks ?? 'No remarks...' }}<span class="dot-notification"></span></h6>
                    <p class="f-light">{{ $history->created_by->name }} / {{ $history->created_at->diffForHumans() }}</p>
                    @if ($history->extended_details ?? false)
                    <div class="bg-light extended-details p-2 rounded">
                        {!! $history->extended_details !!}
                    </div>
                    @endif
                </div>
            </li>
        @empty
            <li class="d-flex align-items-center" style="height: 100%;">
                <div class="activity-dot-primary"></div>
                <div class="ms-3">
                    <h6>No history found!</h6>
                </div>
            </li>
        @endforelse
    </ul>
</div>