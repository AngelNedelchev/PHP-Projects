<?php
include_once 'insert.php';
include_once 'connection.php';
// include_once 'auth.php';
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

<div class="wrap">
<form method="POST" id="form">
<h1>Registration</h1>
        <label for="fname" >
        <input type="text" placeholder="First Name" name="fname" id="fname" class="fname" required
        value="<?php  
        if(isset($_POST['fname'])){echo $_POST['fname'];}
        ?>"
        >
        <?php if($fnameError !== ""){echo "<div id='FNE'>" . $fnameError . "</div>";} ?>
        </label>

        <br>

        <label for="lname">
        <input type="text" placeholder="Last Name" name="lname" id="lname" class="lname" required
        value="<?php  
        if(isset($_POST['lname'])){echo $_POST['lname'];}
        ?>"
        >
        <?php if($lnameError !== ""){echo "<div id='LNE'>" . $lnameError . "</div>";} ?>
        </label>

        <br>

        <label for="username" >
        <input type="text" placeholder="Username" name="username" id="username" class="username" required
        value="<?php  
        if(isset($_POST['username'])){echo $_POST['username'];}
        ?>">
        <?php if($usernameError !== ""){echo "<div id='UNE'>" . $usernameError . "</div>";} ?>
        </label>

        <br>

        <label for="linkedin" >
        <input type="url" placeholder="Linkedin" name="linkedin" id="linkedin" class="linkedin" required
        value="<?php  
        if(isset($_POST['linkedin'])){echo $_POST['linkedin'];}
        ?>">
        </label>

        <br>

        <label for="github" >
        <input type="url" placeholder="GitHub" name="github" id="github" class="github" required
        value="<?php  
        if(isset($_POST['github'])){echo $_POST['github'];}
        ?>">
        </label>

        <br>

        <label for="email" >
        <input type="text" placeholder="E-mail" name="email" id="email" class="email" required
        value="<?php  
        if(isset($_POST['email'])){echo $_POST['email'];}
        ?>">
        <?php 
        if($notValidEmail !== ""){echo "<div id='NVE'>" . $notValidEmail . "</div>";}
        if($validEmail !== ""){echo "<div id='VA'>" . $validEmail . "</div>";}
        ?>
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
        <input type="password" placeholder="Password" name="password" id="password" class="password">
        <?php 
        if($error !== ""){echo "<div id='error'>" . $error . "</div>";}
        if($passError !== ""){echo "<div id='passError'>" . $passError . "</div>";}
        
        ?>
        </label>

        <br>

        <label for="c-password" >
        <input type="password" placeholder="Confirm password" name="c-password" id="c-password" class="c-password">
        </label>

        
        <br>


        <label for="avatar" >
        <input type="url" placeholder="URL for avatar" name="avatar" id="avatar" class="avatar"
        value="<?php  
        if(isset($_POST['avatar'])){echo $_POST['avatar'];}
        ?>">
        </label>

        <br>

        <label for="video" >
        <input type="url" placeholder="Video" name="video" id="video" class="video" required
        value="<?php  
        if(isset($_POST['video'])){echo $_POST['video'];}
        ?>">
        </label>

        <br>

        <label for="quote" >
        <input type="text" placeholder="Quote" name="quote" id="quote" class="quote" required
        value="<?php  
        if(isset($_POST['quote'])){echo $_POST['quote'];}
        ?>">
        </label>

        <br>

        <label for="quote_author" >
        <input type="text" placeholder="Quote Author" name="quote_author" id="quote_author" class="quote_author" required
        value="<?php  
        if(isset($_POST['quote_author'])){echo $_POST['quote_author'];}
        ?>">
        </label>

        <br>


<div class="wrap-sub">
        <label for="submit">
        <input name="submit" type="submit" id="sub" value="Register">
        </label>
</div>

</form>
</div>
<!-- </div> -->

</body>
</html>