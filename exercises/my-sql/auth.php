<?php


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
$password = $conn->real_escape_string($_REQUEST['password']);
$cpassword = $conn->real_escape_string($_REQUEST['c-password']);
$hash = password_hash($password, PASSWORD_DEFAULT);





//validations
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if(!$uppercase || !$lowercase || !$number || strlen($password) < 6) {
    $error = 'Password should be at least 6 characters' . "<br>" . 
    'in length and should include at least' . "<br>" . 'one upper case letter and one number.'; 
}elseif($password !== $cpassword){
    $passError = "Password doesnt match !";
}elseif(!preg_match("/^[a-zA-Z'-]+$/",$fname)){
    $fnameError = "No numbers or special characters" . "<br>" .  "allowed in first name";
}elseif(!preg_match("/^[a-zA-Z'-]+$/",$lname)){
    $lnameError = "No numbers or special characters" . "<br>" .  "allowed in last name ";
}elseif(!preg_match("/^[a-zA-Z0-9]+$/",$username)){
    $usernameError = "Only numbers and letters" . "<br>" .  "allowed in username ";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $notValidEmail = "$email is not a valid email address";
}else{
    $data = "INSERT INTO hopper_2 ( first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, password) 
    VALUES ('$fname', '$lname', '$username', '$linkedin', '$github', '$email', '$preferred_language', '$avatar', '$video', '$quote', '$quote_author', '$hash')";
}

// check if data is pushed to the database
if($conn->query($data) === true){
    echo "Records inserted correctly";
    }else {
    echo "error . $data" . $conn->error;
    }
?>