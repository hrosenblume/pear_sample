<?php
$con=//REMOVED FOR SECURITY

if (mysqli_connect_errno($con))
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = //REMOVED FOR SECURITY 
$row = mysqli_fetch_array($result);
echo $row['post_id'];
mysqli_close($con);
?>