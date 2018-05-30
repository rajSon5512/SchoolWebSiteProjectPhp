<?php 

echo "Hello world";

include("connect.php");


$sid=$_REQUEST["sid"];
$sf1=$_REQUEST["sftxt"];
$sf2=$_REQUEST["sstxt"];
$sf3=$_REQUEST["sltxt"];

$sf=$sf1." ".$sf2." ".$sf3;

$gen=$_REQUEST["gd"];

$bdate=$_REQUEST["dtxt"];

$Dep=$_REQUEST["Dep"];

$jDate=$_REQUEST["jdate"];

$salary=$_REQUEST["snum"];

$mnum=$_REQUEST["mtxt"];

$Email=$_REQUEST["etxt"];

echo $Email;

$CA=$_REQUEST["ctxt"];

$wt1=$_REQUEST["ftime"];

$wt2=$_REQUEST["stime"];

$wt=$wt1."to".$wt2;

$Fi=$_FILES["Ftxt"]["name"];

$simg=$_FILES["simg"]["name"];

	
$sz = $_FILES["Ftxt"]["size"];
$sz = $sz/1024;
	
$sd = $_FILES["simg"]["size"];
$sd = $sz/1024;

	
$typ = $_FILES["Ftxt"]["type"];
$pth = $_FILES["Ftxt"]["tmp_name"];

$tyd = $_FILES["simg"]["type"];
$ptd = $_FILES["simg"]["tmp_name"];
	




?>

<br />

<?php

$qury="INSERT INTO `staff_info`(`Staff_id`, `Staff_name`, `Gender`, `BirthDate`, `Department`, `JoinDate`, `Salary`, `Phone_No`, `Email_id`, `Current_address`, `Working_time`, `Resume`, `simage`) VALUES ('$sid','$sf','$gen','$bdate','$Dep','$jDate','$salary','$mnum','$Email','$CA','$wt','$Fi','$simg')";

echo $qury;



if(mysql_query($qury,$sn))
{
	if(file_exists("Resume\\".$Fi))
	{
		echo "Already exist";
	
	}
	else
	{
		move_uploaded_file($pth,"Resume\\".$Fi);
		
		echo "<br/>File uploaded!";	
	}

	if(file_exists("StaffImage\\".$simg))
	{
		echo "Already exist";
	
	}
	else
	{
		move_uploaded_file($ptd,"StaffImage\\".$simg);
		
		echo "<br/>File uploaded!";	
	}	

	header("location:RegisterStaff.php?sno=$sr_no");
	
}
else
{
	echo "Please Check Your Details ";
}

?>
