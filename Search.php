 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search your person.</title>

<?php

include("ProcessLoginDuplicate.php");

?>

<style>

select{

	width=100%;
	border:2px solid #aaa;
	border-radius:4px;
	margin:8px 0;
	outline:none;
	padding:8px;
	box-sinput[type=text]:focus{

	border-color:#0F0;
	box-shadow:0 0 8px 0 #0C0;	
}izing:border-box;	
	
}

select:focus{
	
	border-color:#0C0;
	box-shadow:0 0 8px 0  #0C0;	

}

	
body{

background-color:#999;	

	
}
	
ps{

font-size:large;
	
}

input[type=text]{
	

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
		
	}

input[type=text]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}


input[type=number]{
	

	border-radius:4px;
	border:2px solid #aaa;
	padding:8px;
		
	}

input[type=number]:focus{
	
	border-color:#0033FF;
	box-shadow:0 0 8px 0 #03F;	

}	




</style>


<script type="text/javascript">

function ClickSearch(x)
{
	
	L=x.value;
	
	if(L==-1)
	{
		alert("Please Select Your Search Area.");
	}
	
	
	window.location="Search.php?L="+L;
}

function Checkblack(x,y,z)
{

	a=x.value;
	b=y.value;
	c=z.value;
	
	
	if(a=="" && b=="" && c=="")
	{
		alert("Please Enter your Search.");
		return false;
	}
	
	return true;
}

function calling(a,b,c)
{
	name=a.value;
	mnum=b.value;
	dep=c.value;
	mlen=mnum.length;

	if(name=="" && mnum=="" && dep==-1 )
	{
		alert("Enter minimum any one feild");
	}
	else if(mlen<10 && mlen>10)
	{
		alert("please Enter corrent Mobile Number");
	}
	else
	{
		l=2;
		window.location="Search.php?name="+name+"&mnum="+mnum+"&dep="+dep+"&d="+l;		
		
	}
	
	
	
}

</script>
<center>
</head>

<body>

<div class="mains" >

<form name="Search" method="post" action=""  style="margin-top:2%">


<label id="ps">Search : </label><select name="catag" id="st">
		 <option value="-1" selected="selected">Select</option>
         <option value="1">Student</option>
         <option value="2">Staff</option>
         </select>
         
         
        <input style="width:8%;padding:8px;margin:2%;" type="button" name="sbut" value="Enter" onclick="ClickSearch(catag)" />  





	<?php

	include("connect.php");
	
	$l=0;
	
	$l=$_REQUEST["L"];
	
	
	$d=$_REQUEST["d"];
	
	$sname=$_REQUEST["name"];
	
	$mnum=$_REQUEST["mnum"];

	$dep=$_REQUEST["dep"];	
			
	if($l==1)
	{
		
	?>
    		<center>
    		<br /><br />
         	<h1>Student Searching :</h1>
            
            <br />
            Enter Name : <input type="text" name="stfname"  />
            
            Class : <input type="text" name="clname"  />
            
       		Mobile No : <input type="number" name="mtxt"  />
            
            <input style="padding:8px;margin:2%;" type="submit" name="r1" value="search" onclick="return Checkblack(stfname,clname,mtxt)"  />
            </center>
 			   
    <?php
	
		if($_REQUEST["r1"]<>"")
		{
			$name=htmlentities($_POST["stfname"]);
			$mbno=htmlentities($_POST["mtxt"]);
			$class=htmlentities($_POST["clname"]);
			
			
				
			$que ="Select * from register_info WHERE Class like '%".$class."%' AND Status like '%Accepted%' and Student_name like '%".$name."%' and mobile_number like '%".$mbno."%'";
			
			$res=mysql_query($que,$sn);
			
			//echo $que;
				
		?>
					<br /><br /><center>
        
       			 <h3>No of Record Found.</h3>
        
       			
             <table border="1" width="50">
      
     		<tr>
     
    		 	<td>sr_No</td>
        		<td>Student_name</td>
      			<td>Birthday</td>
        		 <td>Gender</td>
         		<td>Parent_name</td>
      	    	<td>Class</td>
         		<td>State</td>
         		<td>City</td>
          		<td>Region</td>
         		 <td>Zip_code</td>
          		<td>coutry</td>
          		<td>Mobile_no</td>
          		<td>Email</td>
         		 <td>Student_image</td>
         		 <td>Transpotation_Choice</td>
        		  <td>Status</td>
          		<td>Activity</td>
          
          
			</tr>
         <?php
		 
		 	while($row=mysql_fetch_array($res))
			{
		 
		 
         ?>   
    
    			<tr>
                
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
      			<td><?php echo $row[2] ?></td>
                
                <?php
				
				$qs="select*from gender where sr_no=$row[3]";
				
				$qp=mysql_query($qs,$sn);
				
				$qsp=mysql_fetch_array($qp);
				
				?>
                
                
        		 <td><?php echo $qsp[1] ?></td>
         		<td><?php echo $row[4] ?></td>
      	    	<td><?php echo $row[5] ?></td>
                
                <?php
				
				$ci="select*from states";
				
				
				$qi=mysql_query($ci);
				
                while($fi=mysql_fetch_array($qi))
				{
						if($fi[0]==$row[6])
						{
                ?>
         		
                	<td><?php echo $fi[1] ?></td>
                    
                <?php
						}
				}
				?>
                
                
                 <?php
				
				$si="select*from cities";
				$pi=mysql_query($si);
				
                while($di=mysql_fetch_array($pi))
				{
						if($di[0]==$row[7])
						{
                ?>
         		
                	<td><?php echo $di[1] ?></td>
                    
                <?php
						}
				}
				?>
                
                <td><?php echo $row[8] ?></td>
                 <td><?php echo $row[9] ?></td>
          		<td><?php echo $row[10] ?></td>
          		<td><?php echo $row[11] ?></td>
          		<td><?php echo $row[12] ?></td>
         		 <td><img src="Images/<?php echo $row[13] ?>" width="300" height="300"/></td>
         		 <td><?php echo $row[14] ?></td>
        		  <td><?php echo $row[15] ?></td>
          		<td><a href="processEdit.php?sr_no=<?php echo $row[0]?>">Edit</a>,<a href="processDelete.php?sr_no=<?php echo $row[0]?>">Delete</a></td>
          
                
                </tr>
    
    
			
            
           <?php
		   
			}
			
			?>
            
            
		</table>
        
        </center>
	<?php
			
			
			
		}
	}
		else if($l==2 || $d==2)
		{
	?>
    	
        	<center>
            <br /><br />
         	<h1>Staff Searching  :</h1>
            
            
           

			Enter Staff Name : <input type="text" name="estxt"  value="<?php echo $sname ?>" />
            Mobile no : <input type="number" name="mtxt" value="<?php echo $mnum ?>" />
           
            Department : <select name="department" >
            	
            				<option value="-1" selected="selected">Select Department</option>
            				<option value="Teacher">Teacher</option>
                            <option value="Cleaning">cleaning</option>
                           <option value="Account">Accounts</option>
                          <option value="Technical">Technical</option>
                          <option value="Transpotation">Transpotation</option>
  							
                            </select>				
            
            <input style="width:8%;padding:8px;margin:2%;" type="button" name="sfbut" value="Search" onclick="calling(estxt,mtxt,department)" />
					
    		<br /><br />
        
       			 <h3>No of Record Found.</h3>
        
       			
             <table border="1" width="50">
      
     		<tr>
     
    		 	<td>sr_no</td>
        		<td>Staff_id</td>
      			<td>Staff_name</td>
        		 <td>Gender</td>
         		<td>Birth_Date</td>
      	    	<td>Department</td>
         		<td>Join_Date</td>
         		<td>Salary</td>
          		<td>Phone_no</td>
         		 <td>Email_id</td>
          		<td>Current_Address</td>
          		<td>Working_Time</td>
          		<td>Resume</td>
         		 <td>Simage</td>
                 <td>Activity</td>
          
			</tr>
        
   
	
    	<?php
			
		if($d==2)
		{
				
		$que="Select * from staff_info WHERE Staff_name like '%$sname%' And Phone_No like '%$mnum%' And Department LIKE '%$dep%'";
				
			echo $que;		
				
			$stf=mysql_query($que,$sn);
			
			while($ros=mysql_fetch_array($stf))
			{
				
			?>
    			
               <tr>
                       
            	
                <td><?php echo $ros[0] ?></td>				
				<td><?php echo $ros[1] ?></td>				
				<td><?php echo $ros[2] ?></td>				
				<?php
				
				$qs="select*from gender where sr_no=$ros[3]";
				
				echo $qs;
				
				$qp=mysql_query($qs,$sn);
				
				$qsp=mysql_fetch_array($qp);
				
				?>
                
                <td><?php echo $qsp[1] ?></td>			
				<td><?php echo $ros[4] ?></td>				
				<td><?php echo $ros[5] ?></td>				
				<td><?php echo $ros[6] ?></td>				
				<td><?php echo $ros[7] ?></td>				
				<td><?php echo $ros[8] ?></td>				
				<td><?php echo $ros[9] ?></td>				
				<td><?php echo $ros[10] ?></td>		
                <td><?php echo $ros[11] ?></td>		
               		
                <td><img src="Resume/<?php echo $ros[12] ?>" width="300" height="300"  /></td>	
                <td><img src="StaffImage/<?php echo $ros[13] ?>" width="300" height="300" /></td>	
            	 <td><a href="processEditStaff.php?sr_no=<?php echo $ros[0] ?>" >Edit</a>,<a href="processDelete.php?d=<?php echo $d ?>&sr_no=<?php echo $ros[0] ?>">Delete</a></td>
             			
				
							
		
				</tr>
       
    <?php   		
        
			}
		
			}
			
	}
	   ?>
	   
      <?php
	  
	  
	 	 if(isset($_REQUEST["sr_no"])<>"")
			{
				$s=$_REQUEST["sr_no"];
				echo "your $s no record was Deleted.";
			}
			
			
		
	   
	   	if(isset($_REQUEST["done"])<>"")
		{
			echo "Your Data is sussefully updated.";
			 
		}
	   
	   
	   
	   ?>	
			
			
		
      
	
        
</table>        

</form>

</center>

</div>

<center>

<?php 

if(isset($_REQUEST["supdate"])<>"")
{
	echo "Your Data Sussefully Update.";
}


if(isset($_REQUEST["sno"])<>"")
{
	echo "your Data was Successfully updated.";
	
	
}
	

?>
</center>

</body>
</html>