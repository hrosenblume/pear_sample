
<?php
//phpinfo();
//Create connection
//should be globally created now
//require_once('defineConnection.php');
$con=//REMOVED FOR SECURITY REASONS

// Check connection
if (mysqli_connect_errno($con))
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = //REMOVED FOR SECURITY 
$id = //REMOVED FOR SECURITY 
$result = //REMOVED FOR SECURITY 

$returnArray = array();
while($row = mysqli_fetch_array($result))
{
	$returnArray = array(
		"id" => $id,
		"name" => //REMOVED FOR SECURITY 
		"sex" => //REMOVED FOR SECURITY 
		"date" => //REMOVED FOR SECURITY 
		"location" => //REMOVED FOR SECURITY 
		"description" => //REMOVED FOR SECURITY 
		"tags" => //REMOVED FOR SECURITY 
		"infotype" => //REMOVED FOR SECURITY 
		"info" => //REMOVED FOR SECURITY 
	);
}
  
echo json_encode($returnArray);
mysqli_close($con);
?>