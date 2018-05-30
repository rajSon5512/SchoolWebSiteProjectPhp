<?php 


	error_reporting(0);

	$sn=mysql_connect("localhost","root","");

	mysql_select_db("minproject",$sn) or die("Connection Problem");

	session_start();
 
?>