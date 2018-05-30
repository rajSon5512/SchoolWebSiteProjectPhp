
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROCESS UPDATE STAFF</title>
</head>

<style>

input[type=text]{
	

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	margin:4px;
	
	}

input[type=text]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

input[type=number]{
	
	
	margin:4px;
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	

}

input[type=number]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

input[type=Date]{
	
	margin:2px;
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	
}
input[type=Date]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}


select{

	border:2px solid #aaa;
	border-radius:4px;
	margin:12px 0;
	outline:none;
	padding:8px;
	box-sinput[type=text]:focus{

	border-color:dodgerBlue;
	box-shadow:0 0 8px 0 dodgerBlue;	
}izing:border-box;	
	
}

select:focus{
	
	border-color:dodgerBlue;
	box-shadow:0 0 8px 0 dodgerBlue;	

}

input[type=email]{
	
	margin:2px;
	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	
	
}

input[type=email]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}

td{
	
	color:#FFF;
	font-size:large;

	
}



</style> 



<?php
include("connect.php");

$sr_no=$_REQUEST["sr_no"];

//echo $sr_no;

$query="select*from staff_info where sr_no=$sr_no";

$exe=mysql_query($query,$sn);

?>

<body style="background-color:#999;">

<?php 

while($roi=mysql_fetch_array($exe))
{
?>
<center>
<form name="frm3" method="post" action="processUpdateStaff"> 

<h3 style="font-size:36px;color:#FFF;text-align:center;text-justify:inter-word;">UPDATE STAFF INFOMATION</h3><br /><br />

<table>

<tr>

<td>Staff Id:</td>
<td><input type="text" name="stxt" value="<?php echo $roi[1] ?>"  readonly="readonly" /></td>

</tr>

<tr>

<td>Staff name:</td>
<td><input type="text" name="gtxt" value="<?php echo $roi[2] ?>" /></td>
</tr>

<tr>
<td>
Gender:</td>
<td> <select name="gender" >

		<?php 
		
				
				$qrt="select*from gender where sr_no=$roi[3]";
				
				echo $qrt;
				
				$is=mysql_query($qrt,$sn);
				
				
				if($rq=mysql_fetch_array($is))
				{
					
			?>
                
            		<option value="<?php echo $rq[0] ?>" selected><?php echo $rq[1] ?></option>
            
  	          
				
            
            
		<?php 	
				}
		
		?>
            
           <option value="1">Male</option> 
			<option value="2">Female</option>


		</select></td>
        
     </tr>
     
     <tr>
     
 
<td>Birth_date:</td>
<td><input type="date" name="btxt" value="<?php echo $roi[4] ?>"  /></td>

</tr>

<tr>

<td>Department:</td>
<td> <select name="departments" >

		<?php 
		
		$dep="select*from departments ";
		
		$rp=mysql_query($dep,$sn);
		
		while($deps=mysql_fetch_array($rp))
		{	
				if($deps[1]==$roi[5])
				{
		?>
        			<option value="<?php echo $roi[5] ?>"><?php echo $roi[5] ?></option>
            
         <?php 
		 
		 
				}
		}
		?>
        
		
							<option value="Teacher">Teacher</option>
                            <option value="Cleaning">cleaning</option>
                           <option value="Account">Accounts</option>
                          <option value="Technical">Technical</option>
                          <option value="Transpotation">Transpotation</option>
  		
		</select></td>
        
        </tr>
        
        <tr>
        
        
   <td>Join_Date:</td>
   <td><input type="date" name="jdate" value="<?php echo $roi[6] ?>"  /></td>
       
	</tr>
    <tr>
    
  <td> Salary:</td>
  <td><input type="number" name="salary" value="<?php echo $roi[7] ?>"  /></td>
  </tr>
  <tr>
  
  <td>Mobile_No:</td>
  <td><input type="number" name="mtxt" value="<?php echo $roi[8] ?>"  /></td>
  </tr>
  
  <tr>
  <td>Email Id:</td>
  <td> <input type="email" name="etxt" value="<?php echo $roi[9] ?>"  /></td>
  </tr>
  
  <tr>
  <td> Current_Address:</td>
  <td><input type="text" name="ctxt" value="<?php echo $roi[10] ?>"  /></td>
   </tr>
 	
    <tr>
  
 <td>Working Time:</td>
 <td><input type="text" name="wtxt" value="<?php echo $roi[11] ?>"  /></td>

	</tr>
    
    <tr>
    <td></td>
    
	<td><br /><input type="submit" name="sbutton" value="UPDATE" style="width:auto;padding:8px;margin:2%;"  /></td>
    
    </tr>
       
   
</form>
</center>	
<?php

}

?>



</body>
</html>