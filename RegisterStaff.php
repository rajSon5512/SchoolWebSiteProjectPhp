<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Staff</title>
</head>
<style>

input[type=text]{

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	
	margin: 2%;
	
}

input[type=text]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

label{
 
 color:#FFF;
 text-align:justify;
 
}





input[type=number]{

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	margin: 2px;
	
	
	
}

input[type=number]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

input[type=Date]{
	
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	margin: 2px;
	
}

input[type=Date]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}


select{
	
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	margin: 2px;
	
}

select:focus{
	
	border-color:dodgerBlue;
	box-shadow:0 0 8px 0 dodgerBlue;	

}



textarea{
	
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;

	margin: 2px;
		
	
}

input[type=email]{

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;

	margin: 2px;
		
	
}
input[type=email]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

input[type=time]{
	
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	margin: 2px;

	
}

input[type=time]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}




</style>

<script>
function Check(registerStaff)
{
	with(registerStaff)
	{

	if(!CheckBlack(sftxt,"Please Enter First Name."))
	{
		return false;
	}
	if(!CheckBlack(sstxt,"Please Enter Middle Name."))
	{
		return false;
	}
	if(!CheckBlack(sltxt,"Please Enter Last Name."))
	{
		return false;
	}
	if(!CheckBlack(dtxt,"Please Enter birthdate."))
	{
		return false;
	}
	if(!CheckBlack(sftxt,"Please Enter First Name."))
	{
		return false;
	}
	if(!CheckBlack(jdate,"Please Select Employee joining Date."))
	{
		return false;
	}
	if(!CheckBlack(snum,"Please Enter Salary of Employee."))
	{
		return false;
	}
	if(!CheckBlack(mtxt,"please Enter Mobile Number."))
	{
		return false;
	}
	if(!CheckMobile(mtxt,"Please Enter Correct Mobile Number."))
	{
		return false;
	}
	if(!CheckBlack(etxt,"Please Enter Email Id."))
	{
		return false;
	}
	if(!CheckBlack(ctxt,"Please Enter Address."))
	{
		return false;
	}
	if(!CheckBlack(ftime,"Please Enter Working Time."))
	{
		return false;
	}
	if(!CheckBlack(stime,"Please Enter Working Time."))
	{
		return false;
	}

	}

}


function CheckBlack(x,msg)
{
	
	name=x.value;
	len=name.length;
	
	if(len==0)
	{
		alert(msg);
		x.focus();
		return false;
	}

return true;
}

function CheckMobile(y,msg)
{
	zip=y.value;
	len=zip.length;
	
	
	if(len!=10)
	{
		
		alert(msg);
		y.focus();
		return false;		
	}
	else
	{
		return true;
	}
	
}

function CheckDep(x)
{

	val=x.value;
	
	if(val==-1)
	{
		alert("please Select Corrent Department.");
	}
		
	
}

</script>

<body style="background-color:#666;">

<?php 

	include("ProcessLoginDuplicate.php");

	$Sid=rand();


?>
<div class="hello" >	  

<h1 align="center" style="border-bottom-width:medium;color:#C06;margin-left:10%;" >REGISTER NEW STAFF</h1>

<center>

<form name="registerStaff" method="post" action="prcoessRegisterStaff.php" enctype="multipart/form-data" style="margin-top:5%">

<table>
<tr>
   
  <td><label id="rs">Staff ID</label><sup style="color:red">*</sup>:</td>
  <td><input type="text" name="sid" value="<?php echo $Sid ?>" readonly="readonly"  /></td>
  
 </tr>
  
  <tr>
  
  <td><label id="rs">Staff Name</label><sup style="color:red">*</sup>:</td>
  <td><input type="text" name="sftxt" placeholder="First" /></td>
  <td><input type="text" name="sstxt" placeholder="Middle" /></td>
  <td><input type="text" name="sltxt" placeholder="Last" /></td>
  
  </tr>
  
  <tr>
  <td><label id="rs">Gender</label><sup style="color:red">*</sup>:</td>
  <td><input type="radio" name="gd" required="required" value="1"/><label>Male</label>
 	<input type="radio" name="gd" required="required" value="2" /><label>Female</label></td>
  
  </tr>
  
  <tr>
  <td><label id="rs">BirthDate</label><sup style="color:red">*</sup>:</td>
  
  <td><input type="date" name="dtxt"/></td>

	</tr>
    
    <tr>
	
  <td><label id="rs">Department</label><sup style="color:red">*</sup>:</td>
  	<td><select name="Dep" onblur="CheckDep(this)">
  						<option value="-1" selected="selected">Select Department</option>
  											<option value="Teacher">Teacher</option>
                                            <option value="Cleaning">cleaning</option>
                                            <option value="Account">Accounts</option>
                                            <option value="Technical">Technical</option>
                                        <option value="Transpotation">Transpotation</option>
  											</select></td>
                                           
    </tr>
	<tr>
 
<td> <label id="rs">Joining Date</label><sup style="color:red">*</sup>:</td>
<td><input type="date" name="jdate"  /></td>
	
    </tr>
	
    <tr>

  <td><label id="rs">Salary</label><sup style="color:red">*</sup>:</td>
  <td><input type="number" name="snum"  /></td>
  </tr>
  
  <tr>
  
  <td><label id="rs">Mobile No</label><sup style="color:red">*</sup>:</td>
  <td><input type="number" name="mtxt"  /></td>
  
 </tr>
 <tr>
 <td><label id="rs">Email Id</label><sup style="color:red">*</sup>:</td>
 <td><input type="email" name="etxt"  /></td>
  </tr>
  
  <tr>
 <td> <label id="rs">Current Address</label><sup style="color:red">*</sup>:</td>
 </td>
 <td><textarea name="ctxt" cols="20" rows="5" placeholder="Proper Address"></textarea></td>
  </tr>
  
  <tr>
  <td><label id="rs">Working Time</label><sup style="color:red">*</sup>:</td>
  <td><input type="time" name="ftime" />TO<input type="time" name="stime" /></td>
  </tr>
  
  <tr>
  <td><label id="rs">Upload Resume File(in jpg Format)</label>:</td>
  <td><input type="File" name="Ftxt" required="required" /></td>
  
  </tr>
  
  <tr>
  
  <td><label id="rs">Upload Staff Image:</label></td>
  <td><input type="file" name="simg" required="required"/></td>
  
  </tr>
	
   <tr>
   <td></td>

<td><br /><br /><input style="padding:8px;margin:2%;" type="submit" name="stxt" value="REGISTER" onclick="return Check(registerStaff)"/></td>

</tr>
  

</form>


</center>

<?php

if(isset($_REQUEST["sno"])<>"")
{
?>

<h3><footer>Staff Registration is successfully Register.</footer></h3>

<?php

}

?>
</center>
</body>
</html>