<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Golden School.</title>
</head>


<table style="width:100%">
<div id="nam">


<tr>

<td><img src="Final Logo.PNG"     style="width: 200px;height:100px"  /></td>

<td><h1  style="text-align:right;font-family:'MS Serif', 'New York', serif;font-style:italic;color:#F00;">Golden Child International School</h1></td>

</tr>
</div>

</table>
</head>





<style>

ul{

	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:#060;
	
}

.main_menu{
	
	float:left;
	padding:1px;
	font-size:20px;
		
}

.main_menu a{
	
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
  <li class="main_menu"><a class="active" href="menu.php">HOME</a></li>
  <li class="dropdown main_menu" onclick="xyz()" ><a href="#">ABOUT US</a>
  
  	<ul id="myDropdown" class="dropdown-content" style="display:none;width:10%;position:absolute;">
  		
        <a href="about.php">Vision</a>
        <a href="history.php">History</a>
  	
    
  	</ul>
  </li>
  <li class="main_menu"><a href="Form.php">APPLY FOR ADMISSION</a></li>
  <li class="main_menu"><a href="AdminPage.php">ADMIN LOGIN</a></li>
  <li class="main_menu"><a href="StaffDetails.php">STAFF</a></li>
  <li class="main_menu"><a href="gellarypage.php">GALLARY</a></li>
  <li class="main_menu"><a href="contact.php">CONTACT US</a></li>
</ul>   
         
          
</body>

<script type="text/javascript">

function xyz()
{
	document.getElementById("myDropdown").style.display="block";
}
</script>




</html>