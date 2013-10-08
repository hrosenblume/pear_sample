<?php
//phpinfo();
// Create connection
$con = //REMOVED FOR SECURITY 

// Check connection
if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$tags =//REMOVED FOR SECURITY 
$location = //REMOVED FOR SECURITY 
$mahIDS = array();
$locationIDS = array();

if (sizeof($tags) > 0) {
	for ($i = 0; $i < sizeof($tags); $i++) {
		$tags[$i] = //REMOVED FOR SECURITY 
		$str = //REMOVED FOR SECURITY 
		$result = mysqli_query($con, $str);
		while ($row = mysqli_fetch_array($result)) {
			array_push($mahIDS, //REMOVED FOR SECURITY );
		}
	}
} else {	
	$str = //REMOVED FOR SECURITY 
	$result = //REMOVED FOR SECURITY 
	while ($row = mysqli_fetch_array($result)) {
		array_push($mahIDS, $row['post_id']);
	}
}

if (strlen($location) > 1) {
	$location = //REMOVED FOR SECURITY 
	$str = //REMOVED FOR SECURITY 
	$result = mysqli_query($con, $str);
	while ($row = mysqli_fetch_array($result)) {
		array_push($locationIDS, //REMOVED FOR SECURITY 
	}
	$pairedIDS = array_intersect($mahIDS, $locationIDS);
} else {
	$pairedIDS = $mahIDS;
}

sort($pairedIDS, SORT_NUMERIC);
$resultArray = array_unique($pairedIDS, SORT_NUMERIC);
//array unique doesn't like comparing strings when the array is full of numbers
echo json_encode($resultArray);
mysqli_close($con);
?>