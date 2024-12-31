<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email Address</title>
</head>
<body>
    <h1>Verify Your Email Address</h1>
    <p>Hi {{ $user->name }},</p>
    <p>Thank you for registering. Please click the link below to verify your email address:</p>
    <a href="{{ route('verification.verify', $user->token_user) }}">Verify Email</a>
    <p>If you did not create an account, no further action is required.</p>
    <p>Regards,<br>{{ config('app.name') }}</p>
</body>
</html>
