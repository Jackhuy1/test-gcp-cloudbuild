<?php
$conn=mysqli_connect("34.143.247.201","root","Tdc@12345","bansach");
// Check connection
if ($conn->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $conn->set_charset("utf8")
?>