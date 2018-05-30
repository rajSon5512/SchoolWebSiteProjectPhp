<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<?php
include("connect.php");

$sno=$_REQUEST["sno"];

$img=$_REQUEST["img"];

$q="DELETE FROM `gd` WHERE sno=$sno";



echo $q;

if(mysql_query($q,$sn))
{
	
	unlink("GellaryImage\\".$img);

	header("location:addimages.php?message=1");
}
?>


<body>
</body>
</html>