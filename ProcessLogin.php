<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Admin.</title>
</head>

<body style="background-color:#666;">

<center>

<link rel="stylesheet" href="menustyle.css"  />

<h2 style="text-align:end;color:#00F">
<?php

error_reporting(0);

session_start();

if($_SESSION['username']<>"")
{

 echo "Welcome ".$_SESSION['username'].".";


?>
</h2>

</center>
<ul>


<li><a href="ProcessLogin.php" class="active"><label id="pd" style="color:#FFF;">HOME</label></a></li>
<li><a href="RegisterStaff.php" target="_blank"><label id="pd" style="color:#FFF;">ADD NEW STAFF</label></a></li>
<li><a href="Search.php" target="_blank" ><label id="pd" style="color:#FFF;">SEARCH</label></a></li>
<li><a href="AdminStudentApproval.php" target="_blank"><label id="pd" style="color:#FFF;">ADMISSION</label></a></li>
<li><a href="addimages.php" target="_blank"><label id="pd" style="color:#FFF;">ADD IMAGE</label></a></li>
<li><a href="Distroy.php"><label id="pds" style="color:#FFF;">LOGOUT</label></a></li>

</ul>

<?php
}
else
{
?>
<center>

<script>

alert("please Go To Login page.");

window.location="menu.php";

</script>	

</center>
<?php	
}
?>

<div id="graphs">


<?php

include("GraphFirst.php");

?>


</div>
</body>
</html>