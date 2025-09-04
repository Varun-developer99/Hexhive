<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Vendor OTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .otp-code {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            letter-spacing: 5px;
            color: #007bff;
            margin: 30px 0;
            padding: 10px;
            background-color: #e9f5ff;
            border-radius: 5px;
        }
        .footer {
            font-size: 12px;
            color: #777;
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Customer Registration OTP</h2>
        </div>
        
        <p>Hello,</p>

        <p>Thank you for registering as a customer. To complete your registration, please use the following One-Time Password (OTP):</p>
        
        <div class="otp-code">{{ $otp }}</div>
        
        <p>This OTP will expire in 10 minutes. If you did not request this OTP, please ignore this email.</p>
        
        <p>Best regards,<br>The Sanatani Team</p>
        
        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
            <p>&copy; {{ date('Y') }} Sanatani. All rights reserved.</p>
        </div>
    </div>
</body>
</html>