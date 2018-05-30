<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update image</title>
</head>

<?php

include("ProcessLoginDuplicate.php");

?>

<?php
include("connect.php");

$sno=$_REQUEST["sno"];

$q="SELECT `sno`, `File_Name`, `Description` FROM `gd` WHERE sno=$sno";

//echo $q;

$sa=mysql_query($q,$sn);

$sd=mysql_fetch_array($sa);


?>
<body style="margin-top:100px;">
<center>
	
    <form name="frms" method="post" action="processupldateImage.php" enctype="multipart/form-data">
	
    <input type="text" name="srno" value="<?php echo $sd[0] ?>" hidden="true" />
    
    <table style="margin-top:100px">
    
    <tr>

	<td>YOUR OLD IMAGE :</td><td> <img src="GellaryImage/<?php echo $sd[1] ?>"  width="300px" height="200px" /></td>
    
    </tr>

	<td>UPDATE IMAGE:</td><td> <input type="file" name="utxt"  /></td>
    
    </tr>
    
    <tr>
    
    <td>UPDATE Details:</td> <td><textarea cols="10" rows="5" name="dtxt"><?php echo $sd[2] ?></textarea></td>

	</tr>
   	
   	<tr>
    <td></td>
    <td>
	<input type="submit" name="stxt" value="UPDATE"  /></td>	

	</tr>
</center>
</body>
</html>