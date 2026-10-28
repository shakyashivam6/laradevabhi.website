<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Reaching Out</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
    <div style="max-width: 550px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h2 style="color: #5d8b82; margin-top: 0;">Thank You for Reaching Out!</h2>
        <p>Dear <strong>{{ $contact->name }}</strong>,</p>
        <p>Thank you for getting in touch through my portfolio website.</p>
        <div style="background: #f7f9f9; border-left: 4px solid #5d8b82; padding: 15px; margin: 20px 0; border-radius: 4px;">
            <p style="margin: 0; font-size: 15px; color: #2c3e50;">
                <em>"I have received your message regarding your inquiry. <strong>I will contact you soon.</strong>"</em>
            </p>
        </div>
        <p><strong>Your Inquiry Details:</strong></p>
        <ul style="color: #555; font-size: 14px; line-height: 1.6;">
            <li><strong>Email:</strong> {{ $contact->email }}</li>
            @if($contact->mobile)
                <li><strong>Phone:</strong> {{ $contact->mobile }}</li>
            @endif
            <li><strong>Message:</strong> {{ $contact->message }}</li>
        </ul>
        <hr style="border: none; border-top: 1px solid #eee; margin: 25px 0;">
        <p style="margin-bottom: 5px;">Best regards,</p>
        <p style="margin: 0; font-weight: bold; color: #333;">Abhishek Kumar</p>
        <p style="margin: 0; font-size: 13px; color: #777;">Laravel & PHP Web Developer</p>
        <p style="margin: 0; font-size: 13px; color: #777;">Lucknow, Uttar Pradesh, India</p>
    </div>
</body>
</html>

