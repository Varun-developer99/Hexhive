<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Registration Successful</title>
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
        .details-box {
            background: #f1f8e9;
            border-left: 5px solid #4caf50;
            padding: 16px;
            margin: 24px 0;
            border-radius: 4px;
        }
        .details-label {
            font-weight: bold;
            color: #333;
        }
        .status-box {
            background: #d2fdff;
            border-left: 5px solid #06a9b2;
            padding: 14px;
            margin: 18px 0 0 0;
            border-radius: 4px;
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
            <h2>Warehouse Registration Successful</h2>
        </div>
        <p>Dear {{ $user->name ?? 'User' }},</p>
        <p>Congratulations! Your warehouse registration has been completed. Below are your login details and account status:</p>
        <div class="details-box">
            <div><span class="details-label">Login Email:</span> {{ $user->email ?? 'N/A' }}</div>
            <div><span class="details-label">Login Password:</span> {{ $user->show_password ?? 'N/A' }}</div>
        </div>
        <div class="status-box">
            <div><span class="details-label">Account Status:</span> Waiting For Approval</div>
            <div><span class="details-label">Status Remarks:</span> Your registration is currently under review.</div>
        </div>
        <p>If you have any questions or need further clarification about your account, feel free to contact us:</p>
        <div class="contact-info">
            <strong>Phone:</strong> {{ env('COMPANY_PHONE', '9876543210') }}<br>
            <strong>Email:</strong> {{ env('COMPANY_EMAIL', 'admin@gmail.com') }}
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Quick Life. All rights reserved.
        </div>
    </div>
</body>
</html>
