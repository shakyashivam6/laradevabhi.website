<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Verification Code</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
    <div style="max-width: 500px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h2 style="color: #5d8b82; margin-top: 0;">Abhishek Kumar | Portfolio</h2>
        <p>Hello,</p>
        <p>Thank you for reaching out. Please use the verification code below to confirm your inquiry:</p>
        <div style="background: #f7f9f9; border: 2px dashed #5d8b82; padding: 15px; text-align: center; margin: 20px 0; border-radius: 6px;">
            <span style="font-size: 28px; font-weight: bold; letter-spacing: 6px; color: #333;">{{ $otp }}</span>
        </div>
        <p style="font-size: 13px; color: #777;">This code is valid for 10 minutes. If you did not request this, please ignore this email.</p>
        <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
        <p style="font-size: 12px; color: #999; margin-bottom: 0;">&copy; {{ date('Y') }} Abhishek Kumar. All rights reserved.</p>
    </div>
</body>
</html>

