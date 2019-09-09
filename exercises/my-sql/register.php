<?php
include_once 'insert.php';
include_once 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style-register.css">
</head>
<body>
        



<!-- <div class="wrapperr"> -->

<div class="wrap">

<form method="POST" id="form">
<h1>Registration</h1>
        <label for="fname" >
        <input type="text" placeholder="First Name" name="fname" id="fname" class="fname" required>
        </label>

        <br>

        <label for="lname">
        <input type="text" placeholder="Last Name" name="lname" id="lname" class="lname" required>
        </label>

        <br>

        <label for="username" >
        <input type="text" placeholder="Username" name="username" id="username" class="username" required>
        </label>

        <br>

        <label for="linkedin" >
        <input type="url" placeholder="linkedin" name="linkedin" id="linkedin" class="linkedin" required>
        </label>

        <br>

        <label for="github" >
        <input type="url" placeholder="github" name="github" id="github" class="github" required>
        </label>

        <br>

        <label for="email" >
        <input type="text" placeholder="email" name="email" id="email" class="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        </label>

        <br>
<div class="wrap-pl">
        <label for="preferred_language" >
        <select name="preferred_language" id="preferred_language" required>
        
        <option value="be">Dutch</option>
        <option value="de">Deutsch</option>
        <option value="en">English</option>
        </select>
        </label>
</div>
        <br>

        <label for="password" >
        <input type="password" placeholder="password" name="password" id="password" class="password">
        </label>

        <br>

        <label for="c-password" >
        <input type="password" placeholder="Confirm password" name="c-password" id="c-password" class="c-password">
        </label>

        <br>


        <label for="avatar" >
        <input type="url" placeholder="avatar" name="avatar" id="avatar" class="avatar">
        </label>

        <br>

        <label for="video" >
        <input type="url" placeholder="video" name="video" id="video" class="video" required>
        </label>

        <br>

        <label for="quote" >
        <input type="text" placeholder="quote" name="quote" id="quote" class="quote" required>
        </label>

        <br>

        <label for="quote_author" >
        <input type="text" placeholder="quote_author" name="quote_author" id="quote_author" class="quote_author" required>
        </label>

        <br>

        <!-- <label for="created_at" >
        <input type="text" placeholder="created_at" name="created_at" id="created_at" class="created_at" required>
        </label> -->

        <br>
<div class="wrap-sub">
        <label for="submit">
        <input name="submit" type="submit">
        </label>
</div>

</form>
</div>
<!-- </div> -->

</body>
</html>