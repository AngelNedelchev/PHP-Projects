<?php

include_once 'connection.php';
if(isset($_POST['submit'])){

$conn = openConnection();

$fname = $conn->real_escape_string($_REQUEST['fname']);
$lname = $conn->real_escape_string($_REQUEST['lname']);
$username = $conn->real_escape_string($_REQUEST['username']);
$linkedin = $conn->real_escape_string($_REQUEST['linkedin']);
$github = $conn->real_escape_string($_REQUEST['github']);
$email = $conn->real_escape_string($_REQUEST['email']);
$preferred_language = $conn->real_escape_string($_REQUEST['preferred_language']);
$avatar = $conn->real_escape_string($_REQUEST['avatar']);
$video = $conn->real_escape_string($_REQUEST['video']);
$quote = $conn->real_escape_string($_REQUEST['quote']);
$quote_author = $conn->real_escape_string($_REQUEST['quote_author']);

$data = "INSERT INTO hopper_2 ( first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES ('$fname', '$lname', '$username', '$linkedin', '$github', '$email', '$preferred_language', '$avatar', '$video', '$quote', '$quote_author')";
// check if data is pushed to the database
if($conn->query($data) === true){
    echo "Records inserted correctly";
}else {
    echo "error . $data" . $conn->error;
}
// validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../index.php?error=ivalidmail&username=".$username);
    exit();
}

closeConnection($conn);
}

?>