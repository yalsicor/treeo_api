<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>Reset password</h3>
<div>
    Hi,

    We’ve received a request to reset your password. You can reset your password using this link:

    <a href="{{$reseturl}}?email={{$email}}&token={{$token}}">Click here to reset your password</a>

    If you didn’t make the request, just ignore this email.

    Thanks,
    The TreeO Team
</div>
</body>
</html>
