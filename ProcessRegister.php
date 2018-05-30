<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Process</title>
</head>

<style>

body{

background-color:#FF6;	
	
}

</style>


<body>

<?php


include("menuDuplicate.php");

?>

<?php 

include("connect.php");


$fname=$_REQUEST["ftxt"];;
$ltxt=$_REQUEST["ltxt"];;

$sfull=$fname." ".$ltxt;


$Date=$_REQUEST["Date"];
$Gender=$_REQUEST["gender"];
$pname=$_REQUEST["ptxt"];
$pltxt=$_REQUEST["pltxt"];

$pfull=$pname." ".$pltxt;

$class=$_REQUEST["class"];
$state=$_REQUEST["states"];
$City=$_REQUEST["cities"];
$Region=$_REQUEST["Region"];
$zcode=$_REQUEST["zcode"];
$Coutry=$_REQUEST["Count"];
$mtxt=$_REQUEST["mtxt"];
$etxt=$_REQUEST["etxt"];
$Image=$_FILES["simage"]["name"];
	
$sz = $_FILES["simage"]["size"];
$sz = $sz/1024;
	
	
$typ = $_FILES["simage"]["type"];
$pth = $_FILES["simage"]["tmp_name"];
	

$ts=$_REQUEST["ts"];

$sn=mysql_connect("localhost","root","");

mysql_select_db("minproject",$sn) or die("Connection Problem");

$ins ="INSERT into register_info VALUES(NULL,'$sfull','$Date','$Gender','$pfull',$class,'$state','$City','$Region','$zcode','$Coutry','$mtxt','$etxt','$Image','$ts','NOT ALLOWED')";  

//mysql_query($ins,$sn);


if(mysql_query($ins,$sn))
{
?>

<?php 

$cls=$class;
$to = $etxt ;
$subject = 'Golden School Application.';
$message1 = "Name : ".$sfull."\n";
$message2 = "email : ".$etxt."\n\n\n";
$message4= "mobile no :".$mtxt."\n\n\n";
$message3 = 'Your Golden School Application for class '.$cls.' is Completed. We will contact you in near time.';
$message= $message1." \n ".$message2."\n".$message4."\n".$message3;

//echo $to;

$headers = 'From:rajivsonawala@gmail.com';

if(mail($to,$subject,$message,$headers))
{

}
else
{
header("location:Form.php?smessage=1"); 
}


 ?>
<center>

	<h1 style="color:#333; size:landscape;"> You are Successfully Register for Admission in class <?php echo $class ?>.</h1>
    
    
    <h2 style="color:#333; size:landscape;">please Check your register Email Adderess.</h2>
</center>
<?php

if(file_exists("images\\".$Image))
{
	
}
else
{
	move_uploaded_file($pth,"images\\".$Image);
		
		
}




}
else
{
	
?>
<center><h1 style="color:#333; size:landscape;">Registration Process Incompleted.</h1>
</center>
<?php
}


?>


</body>
</html>