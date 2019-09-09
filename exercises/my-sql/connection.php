<?php

function openConnection() {
    
    // MY HOST
    $dbServername    = "localhost";
    $dbUsername    = "angel";
    $dbPassword    = "password";
    $dbName        = "becode_genk";


    // BECODE HOST
    // $dbServername    = "136.144.221.129";
    // $dbUsername    = "genk";
    // $dbPassword    = "{)+O^O@iw!].zmjT";
    // $dbName        = "becode_genk";

    // Try to understand what happens here 
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn->error);
    // $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    // if(!$conn){
    //     die("Connection failed: " . mysqli_connect_error());
    //     echo "Connection error";
    // }
    
    // Why we do this here
    return $conn;
   }

   // And why would we do this here ?
   function closeConnection($conn) {
   $conn->close();
   }
?>
