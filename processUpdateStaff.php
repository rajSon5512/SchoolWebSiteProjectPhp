<?php 

include("connect.php");

$sid=$_REQUEST["stxt"];

$sname=$_REQUEST["gtxt"];

$gen=$_REQUEST["gender"];

$bdate=$_REQUEST["btxt"];

$dep=$_REQUEST["departments"];

$jdate=$_REQUEST["jdate"];

$salary=$_REQUEST["salary"];

$mobile_No=$_REQUEST["mtxt"];

$email=$_REQUEST["etxt"];

$ca=$_REQUEST["ctxt"];

$wrk=$_REQUEST["wtxt"];

$qr="UPDATE `staff_info` SET `Staff_name`= '$sname',`Gender`='$gen',`BirthDate`='$bdate',`Department`='$dep',`JoinDate`='$jdate',`Salary`='$salary',`Phone_No`='$mobile_No',`Email_id`='$email',`Current_address`='$ca',`Working_time`='$wrk' WHERE Staff_id = $sid";

//echo $qr;

if(mysql_query($qr,$sn))
{
	header("location:Search.php?sno=1");
			
}
else
{
	echo "not update";
}



?>

<a href="Search.php">Back To Seach</a>