<center>

<?php 

include("connect.php");


$sr_no=$_REQUEST["sr_no"];
$name = $_REQUEST["ntxt"];
$bt=$_REQUEST["btxt"];
$gender=$_REQUEST["gender"];
$ptname=$_REQUEST["gtxt"];
$cls=$_REQUEST["cls"];



$state=$_REQUEST["states"];
$cty=$_REQUEST["city"];



$regi=$_REQUEST["rtxt"];
$zip_code=$_REQUEST["ztxt"];
$cout=$_REQUEST["ccode"];
$mno=$_REQUEST["mtxt"];
$email=$_REQUEST["etxt"];
$status=$_REQUEST["status"];

$updatequery="UPDATE `register_info` SET `Student_name`='$name',`Birthdate`='$bt',`Gender`='$gender',`parent_name`='$ptname',`Class`='$cls',`State`= '$state' ,`CIty`='$cty',`Region`='$regi',`Zip_code`=$zip_code,`coutry`='$cout',`Mobile_number`='$mno',`Email`='$email',`Status`='$status' WHERE Sr_no=$sr_no";




if(mysql_query($updatequery))
{
	header("location:Search.php?supdate=2");
}
else
{
	echo "Not update";
}


?>


<br /><br />



</center>