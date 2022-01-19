<?php
$servername ="localhost";
$username="root";
$password ="";
$database="booking";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die('Could not Connect MySql Server:');
  }

 ?>
