<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include_once 'connection.php';

$conn = openConnection();

if(isset($_GET['user'])){;
$id = $_GET['user'];
}

$sql = "SELECT * FROM hopper_2 WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);




closeConnection($conn);

?>

<div class="wrapper">
    <div class="allData">

        <div class="pr">
            <h1>Profile</h1>
        </div>
        <div class="avatar">
             <?=  "<img height='300px' width='400px' src = '".$row['avatar']."'>" ?>
        </div>
        <div class="first_name">
            <p>First name: <?= $row['first_name'] ?> </p>
        </div>
        <div class="last_name">
            <p>Last name: <?= $row['last_name'] ?></p>
        </div>
        <div class="username">
            <p>Username: <?= $row['username'] ?></p>
        </div>
        <div class="linkedin">
            <p> <?= "<a href=" . $row['linkedin'] .  "> LinkedIn </a>" ?></p>
        </div>
        <div class="github">
            <p> <?= "<a href=" . $row['github'] .  "> GitHub </a>" ?></p>
        </div>
        <div class="email">
            <p>E-mail: <?= $row['email'] ?></p>
        </div>
        <div class="preferred_language">
             <?="Language:" . "<img height=\"30px\" width=\"30px\" src='img/" . $row['preferred_language'] . ".svg'>" ?>
        </div>
        <div class="video">
            <p>Video: <?= "<a href=" . $row['video'] .  "> Link to a video </a>" ?></p>
        </div>
        <div class="quote">
            <p>Quote: <?= $row['quote'] ?></p>
        </div>
        <div class="quote_author">
            <p>Author: <?= $row['quote_author'] ?></p>
        </div>

        <div class="bill">


        <?php
        
       echo '<img src="https://belikebill.ga/billgen-API.php?default=1&name=' . $row['first_name'] . '&sex=m"/>' 

        ?>

        </div>
        
    
    </div>
</div>
</body>
</html>