
<?php
include_once "connection.php";
// include_once "auth.php";





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div class="login-wrapper">
    <div class="wrap">

    <form action="" id="form">
    <h1>Log in</h1>

    <label for="username" >
        <input type="text" placeholder="Username" name="username" id="username" class="username" required>
    </label>

    <br>

    <label for="password" >
        <input type="password" placeholder="Password" name="password" id="password" class="password">
    </label>
    
    <br>

    <label for="submit">
        <input name="submit" type="submit" value="Login">
    </label>
    <br>
    <br>
    <a href="#">Forgot password? </a> <br>
    <p>No account yet? <a href="#">Register here</a></p>

    </form>
    </div>
    </div>
</body>
</html>