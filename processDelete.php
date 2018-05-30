<?php 

include("connect.php");

$d=$_REQUEST["d"];

echo $d;

$sr_no=$_REQUEST["sr_no"];

if($d==2)
{
$del="DELETE FROM staff_info WHERE sr_no = $sr_no";

}
else
{

$del="DELETE FROM register_info WHERE Sr_no = $sr_no";
}

echo $del;

if(mysql_query($del,$sn))
{
	header("Location:Search.php?sr_no=$sr_no");
}


?>