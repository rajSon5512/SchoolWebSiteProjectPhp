<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Application.</title>

<?php

include("ProcessLoginDuplicate.php");


?>

<style>


select{

	width=100%;
	border:2px solid #aaa;
	border-radius:4px;
	margin:8px 0;
	margin-top:5%;
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




</style>



<script type="text/javascript">

	function test()
	{
			x = document.Approval.cls.value;
		
			//alert("hi");
		
			window.location = "AdminStudentApproval.php?Ns="+x;
	}

</script>




</head>

<body>
<?php 

include("connect.php");


if(isset($_REQUEST["Ns"])<>"")
{
$r=$_REQUEST["Ns"];

$qr="SELECT * FROM `register_info` WHERE Class=$r";

$res=mysql_query($qr,$sn);
	
}

?>
<center>
<form name="Approval" method="post" >

<label style="text-align:center;color:#FFF;font-size:larg;">Select Class :</label> <select name="cls" >
			<option value="-1">Select Class</option>
			<option value="1">1</option>
          	<option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           	<option value="6">6</option>
           	<option value="7">7</option>
            <option value="8">8</option>
            </select>
            
            
      <input style="padding:8px;margin:2%;" type="button" name="stxt" value="Search" onclick="test()"/>
            
    <br /><br />
	<h1 style="text-align:center;color:#FFF;">Application Accept or Reject</h1>
     
     <br /><h2 style="text-align:center;color:#FFF;">Applications</h2>
      
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
         		<td><?php echo $row[3] ?></td>
         		<td><?php echo $row[4] ?></td>
         		<td><?php echo $row[5] ?></td>
         		<td><?php echo $row[6] ?></td>
        		<td><?php echo $row[7] ?></td>
    		    <td><?php echo $row[8] ?></td>
 	        	 <td><?php echo $row[9] ?></td>
          		<td><?php echo $row[10] ?></td>
          		<td><?php echo $row[11] ?></td>
        	  <td><?php echo $row[12] ?></td>
          <td><img src="Images/<?php echo $row[13] ?>" width="100" height="100" /></td>
          		<td ><?php echo $row[14] ?></td>
                <td><?php echo $row[15] ?></td>
          		<td width="50"><a href="ProcessAccept.php?sr_no=<?php echo $row[0] ?>&name=<?php echo $row[1] ?>">Accept</a> , <a href="processReject.php?sr_no=<?php echo $row[0] ?>&name=<?php echo $row[1] ?>">Reject</a></td>
                 
                    
            
			</tr>
     <?php
	 
		}
	 	
	 	?>       
            
        
    </table>


	



</form>
</center>

</body>
</html>