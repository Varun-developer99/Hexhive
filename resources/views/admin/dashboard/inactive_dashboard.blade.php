@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('css')
   
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Dashboard</li> --}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 shadow-sm border-0">
                <div class="card-body text-center">
                    <h3 class="mb-4" style="color:#2d3748;">Account Status Notification</h3>
                    <div style="background:#ffeaea;border-left:5px solid #f44336;padding:18px 20px 12px 20px;border-radius:6px;text-align:left;">
                        <p style="margin-bottom:8px;"><strong>Status:</strong>
                            @if (Auth::user()->status == '1')
                                <span style="color:#388e3c;font-weight:600;">Active</span>
                            @elseif (Auth::user()->status == '0')
                                <span style="color:#1976d2;font-weight:600;">Pending</span>
                            @else
                                <span style="color:#d32f2f;font-weight:600;">Rejected</span>
                            @endif
                        </p>
                        <p style="margin-bottom:0;"><strong>Reason:</strong> {{ Auth::user()->status_remarks ?? 'N/A' }}</p>
                    </div>
                    <p class="mt-4" style="font-size:16px;">If you have any questions or need further clarification about your account status, feel free to contact us:</p>
                    <div style="font-size:16px;text-align:left;display:inline-block;">
                        <strong>Phone:</strong> {{ env('COMPANY_PHONE', '9876543210') }}<br>
                        <strong>Email:</strong> {{ env('COMPANY_EMAIL', 'admin@gmail.com') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection