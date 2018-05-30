<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>

<?php 

include("menuduplicate.php");

?>

</head>


<style>
div.gallery {
    margin: 5px;
    border: 5px double #CCCCCC;
    float: left;
    width: 180px;
	
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>

<body style="background-color:#FF6;"> 

<?php

include("connect.php");

$i=1;
$qr="select*from gd";

$qs=mysql_query($qr,$sn);


 while($qd=mysql_fetch_array($qs))
 {
	 
?>
	<div class="gallery">
   <img src="GellaryImage/<?php echo $qd[1] ?>"  width="1000px" height="1000px">
  	<div class="desc"><?php echo $qd[2] ?></div>
</div>
	   
<?php
 }
?>
</body>
</html>