
<?php

include("menuDuplicate.php");

?>


<style>

.md{

	
	border-style:double;
	display:block;
	text-align:justify;
	color:#000;
	padding:10px;
	text-decoration: none;
	padding:1px;



}

back{

	background-color:#00F;	
}
.img_class
{
	float:left;
}

p{

	margin-left:20%;	
}

.back{
	
	background-color:#0FF;
	font-size:large;
	border-color:#999;
	
}

.ring{
	
	color:#F00;
	background-color:#F00;
}

</style>




<div id="main_div" >

<div id="list_div" style="float:left;padding:10px;height:200px;">
<ul>

<li class="ring md" style="font-size:larger;color:#000;">Departments</li>
<li class="back md"><a  href="#list_data1">Cleaning</a></li>
<li	class="back md"><a href="#list_data2">Teaching</a></li>
<li class="back md"><a href="#list_data3">Account</a></li>
<li class="back md"><a href="#list_data4">Technical</a></li>
<li class="back md"><a href="#list_data5">Transpotation</a></li>

</ul>
</div>

	<?php 
	
	include("connect.php");
	
	$q1="SELECT*FROM staff_info WHERE Department='Cleaning' ";
	$q2="SELECT*FROM staff_info WHERE Department='Teacher' ";			
	$q3="SELECT*FROM staff_info WHERE Department='Account' ";
	$q4="SELECT*FROM staff_info WHERE Department='Technical' ";
	$q5="SELECT*FROM staff_info WHERE Department='Transpotation' ";
	

	?>
 
 
 <div id="scrollable_div" style="padding:10px;height:500px;overflow-y:scroll">
 
 <ul>
    
    <?php
	
		$e1=mysql_query($q1,$sn);
		
		while($f1=mysql_fetch_array($e1))
		{
	
	?>
			
         <li id="list_data1" class="md"><img src="StaffImage/<?php echo $f1[13] ?> " width="200px" height="100px" class="img_class"/>
    	 <p><?php echo $f1[2] ?><br/>
    	  <?php echo $f1[9] ?><br/>
           <?php echo $f1[5] ?><br/>
          <?php echo $f1[8] ?></p></li>
    
  <?php
		}
    
    
  ?>
        



    <?php
	
		$e2=mysql_query($q2,$sn);
		
		while($f2=mysql_fetch_array($e2))
		{
	
	?>
			
           	<li id="list_data2" class="md"><img src="StaffImage/<?php echo $f2[13] ?> " width="200px" height="100px" class="img_class"/>
    		<p><?php echo $f2[2] ?><br/>
    		<?php echo $f2[9] ?><br/>
             <?php echo $f2[5] ?><br/>
            <?php echo $f2[8] ?></p></li>
    
  <?php
		}
    
    
  ?>
   
   <?php
	
		$e3=mysql_query($q3,$sn);
		
		while($f3=mysql_fetch_array($e3))
		{
	
	?>
			
           	<li id="list_data3" class="md"><img src="StaffImage/<?php echo $f3[13] ?> " width="200px" height="100px" class="img_class" />
    		<p><?php echo $f3[2] ?><br/>
    		<?php echo $f3[9] ?><br/>
             <?php echo $f3[5] ?><br/>
            <?php echo $f3[8] ?></li>
    
  <?php
		}
    
    
  ?>
  
     <?php
	
		$e4=mysql_query($q4,$sn);
		
		while($f4=mysql_fetch_array($e4))
		{
	
	?>
			
           	<li id="list_data4" class="md"><img src="StaffImage/<?php echo $f4[13] ?> " width="200px" height="100px" class="img_class" />
    		<p><?php echo $f4[2] ?><br/>
    		<?php echo $f4[9] ?><br/>
             <?php echo $f4[5] ?><br/>
            <?php echo $f4[8] ?></p></li>
    
  <?php
		}
    
    
  ?>
   
   
    <?php
	
		$e5=mysql_query($q5,$sn);
		
		while($f5=mysql_fetch_array($e5))
		{
	
	?>
			
           	<li id="list_data5" class="md"><img src="StaffImage/<?php echo $f5[13] ?> " width="200px" height="100px" />
    		<p><?php echo $f5[2] ?><br/>
    		<?php echo $f5[9] ?><br/>
             <?php echo $f5[5] ?><br/>
            <?php echo $f5[8] ?></p></li>
    
  <?php
		}
    
    
  ?>
   
   


</ul>
</div>
</body>

</div>

	 <center>
   
   <h3 style="color:#F00;"><a href="menu.php" >BACK TO HOME</a></h3>
   
   </center>

</html>