<?php
include_once 'connection.php';

$conn = openConnection();

$sql = "SELECT * FROM hopper_2;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<table cellspacing = "0" cellpadding = "0"  border = "1px solid black">
<tbody>
<?php
if($resultCheck > 0){
         while ($row = mysqli_fetch_assoc($result)){
                 echo  "<tr>" . 
                 "<td>" . $row['id'] . " " . "</td> " .
                 "<td>" . "<a href='profile.php?user=" . $row['id'] . "'>" . $row['first_name'] . " " . $row['last_name'] . "</a>" . "</td> " .
                 "<td>" . $row['email'] . " " . "</td> " .
                 "<td>" . "<img height=\"50px\" src='img/" . $row['preferred_language'] . ".svg'>" . " " . "</td> " .
                 "<td>" . "<img height='50px' src = '".$row['avatar']."'>" . " " . "</td> " 
                . "</tr>" ;
         }
 }

 closeConnection($conn);
 ?>
 </tbody>
 </table>


