<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous" rel = "stylesheet">
    <title><h1><b>Login</b></h1></title>
</head>
<body>
    <div class = "bg">
        @include('layout.bg')
    </div>
    <form method = "POST" action = "/auth/login" method = "GET">
        @csrf

        <div class = "login-form-group">
            <label for = "email">Email</label>
            <input type = "email" class = "login-form-control" id = "email" name = "email" required autofocus>
        </div>

        <div class = "login-form-group">
            <label for = "password">Password</label>
            <input type = "password" class = "login-form-control" id = "password" name = "password" required>
        </div>

        <div class = "login-form-group">
           <input type = "checkbox" class = "login-form-control" id = "remember-me" name = "remember-me">
           <label for = "remember-me">Remember Me</label>
        </div>

        <div>
            <button type = "submit">Login</button>
        </div>
    </form>
</body>
</html>
