<?php
  $conn=mysqli_connect("localhost","root","","usmchat");
  if(!$conn){
    echo "Database connection error" . mysqli_connect_error();
  }

?>
