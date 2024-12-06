<?php
$conn=mysqli_connect("35.247.132.105","root","Tdc@12345","bansach");
// Check connection
if ($conn->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $conn->set_charset("utf8")
?>
