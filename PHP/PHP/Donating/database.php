<?php
$con = mysqli_connect("localhost","ctcorphy_donating","donating@1234","ctcorphy_donating");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>