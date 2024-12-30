<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f9f9f9; padding: 20px;">
        <tr>
            <td align="center">
                <table width="600px" cellpadding="0" cellspacing="0"
                    style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                    <tr>
                        <td style="background-color: #007bff; padding: 20px; text-align: center; color: #ffffff;">
                            <h2 style="margin: 0;">{{ $bootSettings['app_name'] }}</h2>
                            <p style="margin: 0;">Thanks for Email verification request!</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px; text-align: center;">
                            <h3 style="margin: 0; color: #333;">Hello, {{ $userName }}</h3>
                            <p style="color: #555;">Please click the link below to verify your email address:</p>
                            <a href="{{ $verificationUrl }}"
                                style="display: inline-block; background-color: #007bff; color: #ffffff; text-decoration: none; padding: 10px 20px; border-radius: 5px; margin-top: 20px; font-size: 16px;">Verify
                                Email</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px; text-align: center;">
                            <p>If the button above does not work, please copy and paste the following link into your
                                browser:</p>
                            <p style="word-break: break-word; text-align: center; color: #007bff;">
                                {{ $verificationUrl }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style=" text-align: center; font-size: 12px; color: #777;">
                            <p style="margin: 0;">If you did not request this, please ignore this email.</p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="background-color: #f1f1f1; padding: 20px; text-align: center; font-size: 12px; color: #777;">
                            <p style="margin: 0;">&copy;
                                {{ $bootSettings['developer_app_starting_year'] }}-<?php echo date('Y'); ?>
                                <strong>{{ $bootSettings['app_name'] }}</strong> All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
