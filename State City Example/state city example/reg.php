<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">

function fillCity(st,nm,ag)
{
	
	s=st.value;
	n=nm.value;
	a=ag.value;
	
	window.location = "reg.php?stid="+s+"&nm="+n+"&age="+a;
}


</script>


</head>

<?php
include("connect.php");

?>



<?php

	$sid="";
	$nm="";
	$ag="";
	
	if(isset($_REQUEST["stid"])<>"")
	{	
		$sid = $_REQUEST["stid"];
		$nm = $_REQUEST["nm"];
		$ag = $_REQUEST["age"];
		
		
		
		$qr1="select * from citty where stid=".$sid;
		$res1 = mysql_query($qr1,$cn);
		
	}




	
	$qr="select * from state";
	$res = mysql_query($qr,$cn);
	
	
	
	
	
	


?>

<body>

	<form name="frm1" method="post" action="ProcessReg.php">
    
    	Name :<input type="text" name="ntxt" value="<?php echo $nm ?>" /><br/>
    	Age :<input type="text" name="atxt" value="<?php echo $ag ?>"/><br/>        
        State :<select name="st"  onblur="fillCity(this,ntxt,atxt)" >
        <option value="-1">Select State</option>
        <?php
				while($row=mysql_fetch_array($res))
				{
					
					if($sid==$row[0])
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
        
        </select><br/>
         City :<select name="ct"  >
        <option value="-1">Select City</option>
        
        <?php
		
			while($row1=mysql_fetch_array($res1))
			{	
		?>
        
       <option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
        
        <?php
			}
		?>
        
        
        </select><br/>
        
        <input type="submit" name="submit" value="Register"/>
    
    
    
    </form>

	
</body>
</html>

















