<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>

<style>

input[type=text]{


margin:10px;
border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	width: 15%;
	
}

input[type=text]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}


input[type=password]{
	
border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	width: 15%;
	
}

input[type=password]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

td{

	font-size:24px;
	font-stretch:expanded;
	font-style:normal;	
	
	color:#000;	
	
}


</style>

<script type="text/javascript">

function check(x,y)
{
	name=x.value.length;
	pass=y.value.length;
	
	if(name==0)
	{
	 	alert("please Enter Username.");
		
	}
	else if(pass==0)
	{
		alert("Please Enter password.");
	}
	
}


</script>

</head>

<body style="background-color:#CCC">

<center>

<h1 style="text-align:center;color:#000;margin-top:15%">ADMIN LOGIN</h1>

<form name="AdminLogin" method="post" action="" >

<td>Username :</td> <input type="text" name="utxt"  /><br /><br />

<td>Password :</td> <input type="password" name="ptxt"  /><br /><br /><br/>


<input type="submit" name="Submit" value="Login" onclick="check(utxt,ptxt)" style="width:10%;color:#666;"/><br />

</form>



<?php 

	include("connect.php");
	
		if(isset($_REQUEST["Submit"])<>"")
		{
	
			$username=$_REQUEST["utxt"];
			$password=$_REQUEST["ptxt"];
			
		
		
		$qr="SELECT username,pass from admin_register WHERE username='".$username."'";
		
		$response=mysql_query($qr,$sn);
		
		$coumt= mysql_num_rows($response);
		
		if($coumt>0)
		{
			$result= mysql_fetch_array($response);
			
			if($result['pass'] == $password)
			{
				
				$_SESSION["username"]=$username;
				header("location:ProcessLogin.php");
			}
			else
			{
				echo "Invalid Password";
			}
			
			
		}
		else
		{
			echo "Invalid Username.";	
			
		}
		

		}
	?>	
		
	

</center>
</body>
</html>