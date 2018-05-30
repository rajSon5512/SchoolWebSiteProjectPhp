<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php

include("connect.php");

$name=$_FILES["utxt"]["name"];

$dts=$_REQUEST["dtxt"];

$no=$_REQUEST["srno"];

$q="UPDATE `gd` SET `File_Name`='$name',`Description`='$dts' WHERE sno=$no";

if(mysql_query($q,$sn))
{
		header("location:addimages.php?message=4");
	
}

?>
<body>
</body>
</html>