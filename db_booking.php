<?php
$servername ="localhost";
$username="root";
$password ="";
$database="booking";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die('Could not Connect MySql Server:');
  }

// if($conn)
// {
//     print "connect";
// }
// else{
//     die("Error".mysqli_connect_error());
// }
// ?>
