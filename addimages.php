<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD GELLARY</title>
</head>
<?php

include("processLoginDuplicate.php");


?>

<style>

.is{
	
	margin-top:50px;
	margin-left:500px;
}

.addimg{
	
	margin-top:50px;
	margin-left:500px;
	
}

.msg{
	
	text-align:center;
	
}

</style>


<script type="text/javascript">


function Check(x)
{
	no=x.value;
	
	window.location="addimages.php?no="+no;
	
}


</script>
</html>

<h3 style="text-align:center;color:#FFF">IMAGE PROCESS</h3>

<form name="frms" method="post" action="processImagesAdd.php" enctype="multipart/form-data">

	<div class="is">

	<label>Select Your Action:</label><input type="radio" name="images" value="1"  />ADD IMAGES<input type="radio" name="images" value="2"  />VIEW GRID

	<input type="button" name="btxt" onclick="Check(images)" value="Submit"  />

	</div>

	<div class="addimg">
	
	<?php
	
		include("connect.php");
					
		//echo $_REQUEST["no"]; 
		if(isset($_REQUEST["no"]))
		{
			if($_REQUEST["no"]==1)
			{
	?>
			<label>select Image:</label><input type="file" name="img"  /><br />
           
            <label>Details:</label><textarea name="dtxt" cols="10" rows="5" ></textarea></br>
            
          <input type="submit" name="stxt" value="UPLOAD" />
			
            
	
	<?php
			}
		}
		if(isset($_REQUEST["no"]))
		{
				if($_REQUEST["no"]==2)
				{
					
		?>
        
        <table border="1" style="border-color:#F00;border-style:double;">
        
        <tr>
        
        <td>SR_NO</td>
        <td>FILE_NAME</td>
        <td>DETAILS</td>
        <td>ACTION</td>
        
        
        
        
        </tr>
        
        
        
        <?php
					
					$qd="SELECT * FROM `gd`";
					
					$sd=mysql_query($qd,$sn);
					
					while($row=mysql_fetch_array($sd))
					{
	?>				
    					<tr>				
    							
                                <td><?php echo $row[0] ?></td>
    							<td><?php echo $row[1] ?></td>
    							<td><?php echo $row[2] ?></td>
    							<td><a href="DeleteImage.php?sno=<?php echo $row[0] ?>&img=<?php echo $row[1] ?>">DELETE</a>,<a href="upldateImage.php?sno=<?php echo $row[0] ?>">UPDATE</a></td>					
    					
    		
            			</tr>
            
    <?php
						
					}	
			
				}
		}
	
	
	?>
    
    	</table>
    </div>

</form>

<div class="msg">
	<?php
	
		if(isset($_REQUEST["message"]))
		{
			if($_REQUEST["message"]==1)
			{
			echo "YOUR SELECTED IMAGE SECCESSFULLY DELETED.";
			}
		}
		
		if(isset($_REQUEST["message"]))
		{
			if($_REQUEST["message"]==2)
			{
			echo "YOUR SELECTED IMAGE SECCESSFULLY UPLOADED.";
			}
		}
		
		if(isset($_REQUEST["message"]))
		{
			if($_REQUEST["message"]==3)
			{
			echo "YOUR SELECTED IMAGE ALREADY EXIEST.";
			}
		}
			
		if(isset($_REQUEST["message"]))
		{
			if($_REQUEST["message"]==4)
			{
			echo "YOUR IMAGE DETAILS SUCCESSFULLY UPDATED.";
			}
		}
		
		
	?>
    
  </div>

</body>
</html>