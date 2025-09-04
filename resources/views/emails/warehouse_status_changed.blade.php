<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Status Changed</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 32px 24px;
        }
        .header {
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 24px;
            padding-bottom: 12px;
        }
        .header h2 {
            margin: 0;
            color: #2d3748;
        }
        .status-box {
            background: #f1f8e9;
            border-left: 5px solid #4caf50;
            padding: 16px;
            margin: 24px 0;
            border-radius: 4px;
        }
        .status-label {
            font-weight: bold;
            color: #333;
        }
        .footer {
            margin-top: 32px;
            font-size: 13px;
            color: #888;
            text-align: center;
        }
        .contact-info {
            margin-top: 16px;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>Account Status Notification</h2>
        </div>
        <p>Dear {{ $user->name ?? 'User' }},</p>
        <p>We want to inform you that your account status has been updated. Please find the details below:</p>
        @php
            if($user->status == '1') {
                $status = 'Active';
                $statusColor = '#4caf50'; // Green for active
                $statusBackground = '#e8f5e9'; // Light green background for active
            } elseif ($user->status == '0') {
                $status = 'Pending';
                $statusColor = '#2196f3'; // Blue for pending
                $statusBackground = '#e3f2fd'; // Light blue background for pending
            } else {
                $status = 'Rejected';
                $statusColor = '#f44336'; // Red for rejected
                $statusBackground = '#ffebee'; // Light red background for rejected
            }
        @endphp
        <div class="status-box" style="border-left-color: {{ $statusColor }}; background: {{ $statusBackground }};">
            <div><span class="status-label">Status:</span> {{ $status ?? 'N/A' }}</div>
            <div><span class="status-label">Reason:</span> {{ $user->status_remarks ?? 'N/A' }}</div>
        </div>
        <p>If you have any questions or need further clarification about your account status, feel free to contact us:</p>
        <div class="contact-info">
            <strong>Phone:</strong> {{ env('COMPANY_PHONE', '9876543210') }}<br>
            <strong>Email:</strong> {{ env('COMPANY_EMAIL', 'admin@gmail.com') }}
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ env('COMPANY_NAME', 'Quick Life') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
