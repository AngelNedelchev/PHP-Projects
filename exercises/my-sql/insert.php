<?php

include_once 'connection.php';
if(isset($_POST['submit'])){

$conn = openConnection();

include_once 'auth.php';

// $data = "INSERT INTO hopper_2 ( first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, password) 
//                         VALUES ('$fname', '$lname', '$username', '$linkedin', '$github', '$email', '$preferred_language', '$avatar', '$video', '$quote', '$quote_author', '$password')";
// // check if data is pushed to the database
// if($conn->query($data) === true){
//     echo "Records inserted correctly";
// }else {
//     echo "error . $data" . $conn->error;
// }


//confirm password


closeConnection($conn);
}

?>