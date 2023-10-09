<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{ url('home.com') }}">Home</a>
    <a href="{{ url('about.com') }}">About</a>
    <a href="{{ url('login.com') }}">Login</a>

    <h1>LOGIN</h1>
    <table>
        <tr>
            <td><input type="text" placeholder="Username"></td>
        </tr>

        <tr>
            <td><input type="password" placeholder="Password"></td>
        </tr>

        <tr>
            <td><button>Masuk</button></td>
        </tr>
    </table>
</body>
</html>