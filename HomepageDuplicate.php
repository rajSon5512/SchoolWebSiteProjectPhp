<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Golden School.</title>
</head>

<style>

ul{

	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:#060;
	
}

li{
	
	float:left;
	padding:1px;
	font-size:20px;
		
}

li a{
	
	display:block;
	text-align:center;
	color:white;
	padding:14px 16px;
	text-decoration: none;
	
	
}

ul li a:hover{

	background-color:#0F6;
	
}

li a:hover(.active){
	background-color:red;
}

.active{
	background-color:red;
}
	
ms{

	float:left;
	
}
	


</style>





<body>		
		
   
  <!-- <br /><br /><br /><br /><br />-->


    <ul>
  <li><a class="active" href="menu.php">HOME</a></li>
  <li class="dropdown" onclick="xyz()" ><a href="#">ABOUT US</a>
  
  	<ul id="myDropdown" class="dropdown-content" style="display:none;width:10%;position:absolute;">
  		
        <a href="about.php">Vision</a>
        <a href="history.php">History</a>
  	
    
  	</ul>
  </li>
  <li><a href="#">STAFF</a></li>
  <li><a href="#">GALLARY</a></li>
  <li><a href="contact.php">CONTACT US</a></li>
</ul>   
         
          
</body>

<script type="text/javascript">

function xyz()
{
	document.getElementById("myDropdown").style.display="block";
}
</script>




</html>