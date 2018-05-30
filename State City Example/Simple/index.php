<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>

<script type="text/javascript" >


	function fillcity(x,y)
	{
		state=x.value;
		name=y.value;	
	
	
		window.location = "index.php?state="+state+"&name="+name;	
	
	}


</script>


</head>


<?php

include("connect.php");

$qr="select*from states ";

$nm ="";

$execute1=mysql_query($qr,$cn);

if(isset($_REQUEST["state"])<>"")
{
	$states=$_REQUEST["state"];
	
	$qs="select sr_id,City_Name from cities where sr_id = ".$states;



	$execute2=mysql_query($qs,$cn);

	$nm=$_REQUEST["name"];
	
	
}




?>

<center>
<form name="Frm1" method="get" action="">



State : <select name="state" onblur="fillcity(state,Text1)" > 
		
        <option value="-1">Select State</option>
        
        <?php
		
			while($row=mysql_fetch_array($execute1))
			{
					if($states==$row[0])
					{		
		?>
			
            <option value="<?php echo $row[0] ?>" selected="selected"><?php echo $row[1] ?></option>
            
         <?php
					}
					else
					{
					
			?>		
				
               		<option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                    
            <?php        
                		
					}
					
		 	
			}
		 
			 ?>      
		</select>
        
        
        <br /><br />
        
City = <select name="city">
	        
            
            <option value="-1">Select City</option>
            
           <?php
		   
		   		while($row1=mysql_fetch_array($execute2))
				{
		   							
		   ?>
				
                	<option value="<?php echo $row1[0]?>"><?php echo $row1[1] ?></option>
                
                
            <?php
						
		
            
				}
			
       		?>
			
        </select>
        
<br />

<input type="submit" name="submit1" value="Register"  />
</form>

</center>
<body>
</body>
</html>