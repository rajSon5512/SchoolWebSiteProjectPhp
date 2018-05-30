<center>

<?php


include("connect.php");

$sr=$_REQUEST["sr_no"];

$name=$_REQUEST["name"];


$qr="update register_info set STATUS='Rejected' WHERE Sr_no=$sr";

$rec=mysql_query($qr,$sn);

if($rec<>"")
{
	echo "Mr.$name Application of Addmission is Rejected.";
	
}


?>

<br /><br />

<a href="AdminStudentApproval.php">Back To List</a>

</center>