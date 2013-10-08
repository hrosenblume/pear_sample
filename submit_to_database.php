<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing Encounter</title>
</head>
<?php
	error_reporting(-1);
	ini_set('error_reporting', E_ALL);
	
	//$con=mysqli_connect("host", "uname", "pass", "db")
	$con=//REMOVED FOR SECURITY 
	if(mysqli_connect_errno())
	{
		echo "Failed to connec to mySQL: " . mysqli_connect_error();
	}
	
	//REMOVED FOR SECURITY 
	
	switch($_POST["info_type"])
	{
		case "email":
			$info_type = "email";
		break;
		
		case "facebook":
			$info_type = "facebook";
		break;
		
		case "website":
			$info_type = "website";
		break;
		
		default:
			$info_type = "other";
		break;
	}
	//REMOVED FOR SECURITY 
	
	$sql = //REMOVED FOR SECURITY 
	
	if(!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	$post_id = mysqli_insert_id($con);
	
	for($c=0;$c<sizeof($tags_blasted);$c=$c+1)
	{
		//REMOVED FOR SECURITY 
		if(!mysqli_query($con,$sql2))
		{
			die('Error: ' . mysqli_error($con));
		}
	}
	mysqli_close($con);
	//and hopefully this should have added a record
?>

<!--This is where it refreshes to the success page-->
<script language="javascript">
	location.replace("http://wepear.com/livelystream.html");
</script>

<body>
</body>
</html>