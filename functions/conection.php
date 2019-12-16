<?php
$conn = new mysqli('localhost','root','dimitrov','kelvinc');

if ($conn->connect_error){

  echo $error = $conn->connect_error;
}


 ?>