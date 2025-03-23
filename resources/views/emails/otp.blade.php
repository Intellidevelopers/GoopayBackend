<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            background: #f6f6f6;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            text-align: left;
        }
        h2 {
            font-size: 18px;
            font-weight: bold;
            color: #000;
            margin-bottom: 15px;
        }
        p {
            font-size: 14px;
            color: #333;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background: #4b47ff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        .footer {
            font-size: 12px;
            color: #666;
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background: #f1f1f1;
            border-radius: 4px;
        }
        .footer a {
            color: #4b47ff;
            text-decoration: none;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons img {
            width: 20px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Verify Your Email</h2>
        <p>Hey <strong>{{ $first_name }}</strong>,</p>
        <p>Thank you for signing up on Goopay! To get started, please verify your email address by entering the OTP code below:</p>
        
        <h3 style="text-align: center; font-size: 20px; background: #f3f3f3; padding: 10px; border-radius: 5px;">
            {{ $otp }}
        </h3>

        <p>This code expires in <strong>5 minutes</strong>. If you did not request this, please ignore this email.</p>
        
        <p>Need help? <a href="https://wa.me/2348087112167">Contact our support team</a></p>
        
        <div class="footer">
            <p>Best regards,<br><strong>Goopay Team</strong></p>
        </div>
    </div>
</body>
</html>
