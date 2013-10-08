<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing Encounter</title>
</head>
<?php
	//THERE IS THE DISTINCT POSSIBILITY THAT THIS COULD ALL BE DONE FROM JAVASCRIPT
	$tags = //REMOVED FOR SECURITY 
	$tagsformatted = str_replace(' ', '', $tags);
	$tags_blasted = explode ("#", $tagsformatted);
	//and hopefully this should have added a record
?>

<script language="javascript">
	location.replace("livestream.html");
	tagArray = <?php echo $tags ?>; 
	console.log(tagArray);
	document.write(tagArray);
	
</script>

<body>
</body>
</html>