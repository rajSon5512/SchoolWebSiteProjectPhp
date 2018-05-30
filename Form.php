-<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Addmission Form</title>

<link rel="stylesheet" href="FormStyle.css"  />



<style>


input[type=text]{
	

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
	width: 75%;
	
	}

input[type=text]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}
	



</style>
<script type="text/javascript" src="Val.js"></script> 

<script type="text/javascript">

	function CheckSelection(x,a,b,c)
	{
		s=x.value;
		fname=a.value;
		lname=b.value;
		date=c.value;
		
		if(s==-1)
		{
			alert("please Select State.");
		}
		else
		{
			
			window.location="Form.php?s="+s+"&fname="+fname+"&lname="+lname+"&date="+date;
				
		}
	}




	function checkVal(Frm)
	{	
		
		with(Frm)
		{
			if(!CheckBlack(ftxt,"Please Enter First Name "))
			{	
					return false;
			}
			if(!CheckBlack(ltxt,"Please Enter Last Name "))
			{	
					return false;
			}
			if(!CheckBlack(Date,"Please Chose Student's Birth Date Name "))
			{	
					return false;
			}
			if(!CheckBlack(ptxt,"Please Enter Parent/Guardians First Name "))
			{	
					return false;
			}
			if(!CheckBlack(pltxt,"Please Enter Parent/Guardians Last Name "))
			{	
					return false;
			}
			if(!CheckBlack(Region,"Please Enter Region."))
			{	
					return false;
			}
			if(!CheckBlack(zcode,"Please Enter Your Area Zip Code."))
			{	
				return false;
			
			}
			if(!Checkzip(zcode,"Not Valid Zip code."))
			{	
						return false;
			}
			if(!CheckBlack(mtxt,"Please enter mobile Numbers."))
			{	
				return false;
			
			}
			if(!CheckMobile(mtxt,"Not valid mobile Number."))
			{	
					return false;
			}
			if(!CheckBlack(etxt,"Please enter Email Address."))
			{	
				return false;
			
			}
			
		}
	}
		


</script>


<?php 

include("connect.php");

$sat="SELECT * FROM `states` ";

$psa=mysql_query($sat,$sn);


$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$Date=$_REQUEST["date"];


//echo $psa;

if(isset($_REQUEST["s"])<>"")
{
	
	$a=$_REQUEST["s"];
	$qrs="SELECT * FROM `cities` WHERE sr_id=$a";
	
	
	
	
	//echo $qrs;
	
	$res=mysql_query($qrs,$sn);
	

	//echo $res;
	
	
}




?>

</head>
<center>
<body style="background-color:#FF9">



<form name="Frm1" method="post" action="ProcessRegister.php" enctype="multipart/form-data">
<table>

<div class="name">
<tr>
	<td><label style="font-size:16px;">Student Name</label><sup style="color:red">*</sup>:</td>
   <td> <input type="text" name="ftxt" placeholder="First" value="<?php echo $fname ?>" class="1"></td>
   	<td><input type="text" name="ltxt" placeholder="Last" value="<?php echo $lname ?>"  /><br /></td>
	</tr>
</div> 
    <tr>
   <td> Student's Birth Date<sup style="color:red">*</sup>:</td>
   <td> <input type="date" name="Date" value="<?php echo $Date ?>" /></td>
    </tr>
 		
     <tr>
     
     <tr>
   
	<td> State<sup style="color:red">*</sup>:</td>
    												
                                                 <td><select name="states" onblur="CheckSelection(this,ftxt,ltxt,Date)">
                                                 <option value="-1" selected="selected">Select State</option>
                                                 <?php
										 
										 
										 	while($rep=mysql_fetch_array($psa))
											{
												        
                                                if($rep[0]==$_REQUEST["s"])
												{
												 
                                        ?>         
                                    	 		 
                                         
                                         	<option value="<?php echo $rep[0] ?>" selected="selected"><?php echo $rep[1] ?></option>
                                            
                                         <?php
										 
										 	
												}
												else
												{
										?>
                                        
                                                    
                                         	<option value="<?php echo $rep[0] ?>"><?php echo $rep[1] ?></option>
                             			
										<?php
												}
													
											}
                                            
											?>
                                                
 											
                                                </select>
                                              </optgroup>
                                              
                                              
                                              
                                              
                                              
                                              
                                              </td>
 
            </tr>
            <tr>
            
            <td>Cities<sup style="color:red">*</sup>:</td>
            			
                        	<td><select name="cities">
            					
                                <option value="-1">Select City</option>
                                
              <?php
			  
			  	while($row=mysql_fetch_array($res))
				{
					
				?>
                	     
                  <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
  		   	                  
              <?php
			  
			  
				}
				?>
  					 
                              					
            </select>
            </td>
            	
            
     
     
     
     </tr>
    
    
    
    
    
    
    <tr>
    
    <td>Gender<sup style="color:red">*</sup>:</td>
 	<td><select name="gender" ><option value="1">Male</option><option value="2">Female</option></select></td>
    
    </tr>
    
    
    <td>Parent/Guardians Name<sup style="color:red">*</sup>:</td>
   <td> <input type="text" name="ptxt" placeholder="First" /></td>
   <td>	<input type="text" name="pltxt" placeholder="Last" /></td>
    </tr>
    <tr>
    <td>Class For Apply<sup style="color:red">*</sup>:
    </td>
    <td><select name="class">
    												
                                                   <optgroup label="Select Class">
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                   <option value="3">3</option>
                                                   <option value="4">4</option>
                                                   <option value="5">5</option>
                                                   <option value="6">6</option>
                                                   <option value="7">7</option>
                                                   <option value="8">8</option>
                                            	
                                                   </select></td>
                                                   
   </tr>
   </optgroup>
   
  
           <tr>
     <td>Region<sup style="color:red">*</sup>:</td>
     <td><input type="text" name="Region" /><br /></td>
     </tr>
     <tr>
     <td>Zip Code<sup style="color:red">*</sup>:</td>
     <td><input type="number" name="zcode"  /><br /><br /></td>
     </tr>
    <tr>
    <td>Coutry<sup style="color:red">*</sup>:</td>
    <td> <select name="Count">
     										
                                       	  <option value="-1">Select Coutry</option>
                                          
                                          <option value="India">India</option>
                                          
                                          <option value="Others">Others</option>
                                          
                                          </select><br /></td></tr>
                                          
        <tr>                                  
    <td> Mobile Number<sup style="color:red">*</sup>:</td>
     <td><input type="number" name="mtxt" placeholder="Mobile Number"/><br /></td>
     </tr>
     <tr>
     <td>Email<sup style="color:red">*</sup>:</td>
     <td><input type="email" name="etxt" placeholder="Please Enter Valid Email" /><br /></td>
     <tr>
     
     <td>Student's Image<sup style="color:red">*</sup>:</td>
     <td><input type="file" name="simage"  required="required"/><br /></td>
     		
        	
     	</tr>
        <tr>
     <td>   
     Do you Want <br />
     For Transportation<br />
     Service <sup style="color:red">*</sup>:</td>
     <td><input type="radio" name="ts" value="YES" required="required"/>Yes
     <input type="radio" name="ts" value="NO" required="required"/>No<br /></td>
                      </tr>
        <tr>
        <td>                                                
     
   <!--  You Accept Our Tearm and Condition<br /><br />--> </td>
    </tr>
    <tr>
    <td></td>
    <td>
    <input type="Submit" name="submit1" value="Submit" style="width:auto;padding:8px;margin:2%;" onclick="return checkVal(Frm1)"    />
     </td>
     </tr>

</table>    
</form>


<?php 


if(isset($_REQUEST["smessage"])<>"")
{
	echo "please Check You email Address.";
}


?>


</body>
</center>
</html>