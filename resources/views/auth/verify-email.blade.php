<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>
<body>
    <h1>Verify Your Email Address</h1>
    <p>
        Before proceeding, please check your email for a verification link.
        If you did not receive the email, <a href="{{ route('verification.resend', auth()->user()->token_user) }}">click here to request another</a>.
    </p>
</body>
</html>
