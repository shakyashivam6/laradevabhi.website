<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Portfolio Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
    <div style="max-width: 550px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">

        <h2 style="color: #5d8b82; margin-top: 0;">📩 New Enquiry Received</h2>
        <p style="color: #555; font-size: 14px;">Someone just submitted a verified contact form on your portfolio website.</p>

        <div style="background: #f7f9f9; border-left: 4px solid #dca167; padding: 15px 20px; margin: 20px 0; border-radius: 4px;">
            <table style="width: 100%; font-size: 14px; color: #333; border-collapse: collapse;">
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; width: 90px;">Name</td>
                    <td style="padding: 6px 0;">{{ $contact->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold;">Email</td>
                    <td style="padding: 6px 0;"><a href="mailto:{{ $contact->email }}" style="color: #5d8b82;">{{ $contact->email }}</a></td>
                </tr>
                @if($contact->mobile)
                <tr>
                    <td style="padding: 6px 0; font-weight: bold;">Phone</td>
                    <td style="padding: 6px 0;">{{ $contact->mobile }}</td>
                </tr>
                @endif
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; vertical-align: top;">Message</td>
                    <td style="padding: 6px 0;">{{ $contact->message }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold;">Received</td>
                    <td style="padding: 6px 0; color: #777;">{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            </table>
        </div>

        <p style="font-size: 13px; color: #888; margin-bottom: 0;">
            This is an automated notification from your portfolio website.<br>
            Email was verified via OTP before submission.
        </p>
    </div>
</body>
</html>
