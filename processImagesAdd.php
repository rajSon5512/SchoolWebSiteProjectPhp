<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<?php

include("connect.php");

$name=$_FILES["img"]["name"];

$details=$_REQUEST["dtxt"];

$size=$_FILES["img"]["size"];

$size=$size/1024;

$pth=$_FILES["img"]["tmp_name"];


$qr="INSERT INTO `gd`(`File_Name`, `Description`) VALUES ('$name','$details')";

	
	if(file_exists("GellaryImage\\".$name))
	{
		header("location:addimages.php?message=3");
		
	}
	else
	{
		if(mysql_query($qr,$sn))
		{
			move_uploaded_file($pth,"GellaryImage\\".$name);
		
			header("location:addimages.php?message=2");
		}
		
	}
	
	
?>

<body>
</body>
</html>