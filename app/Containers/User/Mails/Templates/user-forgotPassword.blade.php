<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>Reset password</h3>
<div>
    Hi,<br>
    <br>
    We’ve received a request to reset your password. You can reset your password using this link:<br>
    <br>
    <a href="{{$reseturl}}?email={{$email}}&token={{$token}}">Click here to reset your password</a><br>
    <br>
    If you didn’t make the request, just ignore this email.<br>
    <br>
    Thanks,<br>
    The TreeO Team<br>
    <br>
    <br>
    Hai,<br>
    <br>
    Kami telah menerima<br>
    permintaan untuk mengatur ulang kata sandi Anda. Anda dapat mengatur ulang kata<br>
    sandi menggunakan tautan ini: <a href="{{$reseturl}}?email={{$email}}&token={{$token}}">Klik di sini untuk</a><br>
    <br>
    mengatur ulang kata sandi Anda<br>
    Jika Anda tidak<br>
    pernah mengajukan permintaan perubahan sandi, silahkan abaikan email ini.<br>
    Terima kasih,<br>
    Tim TREEO<br>
</div>
</body>
</html>
