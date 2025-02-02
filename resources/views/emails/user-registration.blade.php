<!DOCTYPE html>
<html>
<head>
    <title>User Registration Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">

    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 3px 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="padding: 20px; background-color: #001079; color: #ffffff; border-radius: 10px 10px 0 0;">
                <h1 style="font-size: 28px; margin-bottom: 20px;">Welcome, {{ $user->first_name}}!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <p style="font-size: 16px; color: #333333;">You have successfully registered as a {{ $user->name }}.</p>
                <p style="font-size: 16px; color: #333333;">Your login credentials are:</p>
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f2f2f2; border: 1px solid #dddddd; border-radius: 5px; margin-top: 10px;">
                    <tr>
                        <td style="padding: 10px; font-size: 16px; color: #333333; font-weight: bold;">Email:</td>
                        <td style="padding: 10px; font-size: 16px; color: #333333;">{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; font-size: 16px; color: #333333; font-weight: bold;">Password:</td>
                        <td style="padding: 10px; font-size: 16px; color: #333333;">{{ $password }}</td>
                    </tr>
                </table>
                <p style="font-size: 16px; color: #333333;">Thank you for joining us!</p>
                <p style="font-size: 16px; color: #333333;">If you have any questions or need assistance, feel free to contact us.</p>
                <p style="font-size: 16px; color: #333333;">Best regards,<br>Team XYZ</p>

                <!-- Login Button -->
                <table cellspacing="0" cellpadding="0" border="0" width="35%" align="center">
                    <tr>
                        <td style="padding: 20px 0 0 0;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td align="center" style="border-radius: 5px;" bgcolor="#007BFF">
                                        <a href="{{ route('login') }}" target="_blank" style="font-size: 16px; color: #ffffff; text-decoration: none; display: inline-block; padding: 15px 20px; border-radius: 5px; background-color: #007BFF;">Login to Your Dashboard</a>
                                    </td>


                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; background-color: #001079; color: #ffffff; border-radius: 0 0 10px 10px;">
                <p style="font-size: 14px; color: #ffffff;">This is an automated email. Please do not reply to this message.</p>
            </td>
        </tr>
    </table>

</body>
</html>
