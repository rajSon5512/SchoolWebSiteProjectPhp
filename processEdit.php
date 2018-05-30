
<style>

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
	
	
	margin:2px;
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
	margin:8px 0;
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

}



</style> 





<?php

include("connect.php");

$sr_no=$_REQUEST["sr_no"];

$qr="select*from register_info where sr_no=$sr_no ";

$cl="select*from gender";

$cls=mysql_query($cl,$sn);

$res=mysql_query($qr,$sn);
?>

<body style="background-color:#999;">

<?php

while($row=mysql_fetch_array($res))
{
?>
	
   

	<form name="frm2" method="post" action="processUpdate.php">
    <center>

	<h3 style="font-size:36px;color:#FFF;text-align:center;text-justify:inter-word;">UPDATE  STUDENT  INFOMATION</h3>
   
   <table>
 	<tr>
   
  <td><input type="number" name="sr_no" value="<?php echo $row[0] ?>"  hidden="" /></td>
    </tr>
    
    <tr>
    
    <td><label>Enter name:</label></td>
    <td><input type="text" name="ntxt" value="<?php echo $row[1]?>" /></td>
    
    </tr>
    
   <tr>
   <td> Birthdate :</td>
   <td><input type="text" name="btxt" value="<?php echo $row[2] ?>" /></td>
   
   </tr>
    
    <tr>
    
    <td>Gender : </td>
    
    	<td><select name="gender">
    			
               <?php
			   
			   while($cre=mysql_fetch_array($cls))
			   {
				   if($row[3]==$cre[2])
				   {
					   
				?>
                
                <option value="<?php echo $cre[2] ?>" selected><?php echo $cre[2] ?></option>
                <?php
				   }
			   }
			   ?>
               
               <option value="Male">Male</option>
               <option value="female">Female</option>
                
                
               </select></td>
       </tr>        
       <tr>
        
   <td> Parent Name :</td>
   
  <td> <input type="text" name="gtxt" value="<?php echo $row[4] ?>" /></td>
    
    </td>
   <tr>
    
 	<td> class :</td>
    
    <td> <select name="cls" >
      
          		<?php
				
				$qrt="select*from class where Class_No=$row[5]";
				
				$is=mysql_query($qrt);
				
				
				if($rq=mysql_fetch_array($is))
				{
					
				?>
                
            		<option value="<?php echo $rq[0] ?>" selected><?php echo $rq[0] ?></option>
            
  	          
				
            
            
		<?php 	
				}
	
					
				
		?>
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
        
        <tr>
        
      <td> State: </td>
      <td><select name="states" >
	   		
	  			 <?php
	   				
	   				$state="select * from states";	
       
       				$qr1=mysql_query($state);
					
					while($ri=mysql_fetch_array($qr1))
					{
	   					if($row[6]==$ri[0])
						{
		
				?>	       
       
       					<option value="<?php echo $row[6] ?>" selected="selected"><?php echo $ri[1] ?></option>
       
       
       				<?php 
					
						}
						else
						{
					?>
                    
                    <option value="<?php echo $ri[0] ?>" ><?php echo $ri[1] ?></option> 
                    	
                    
                    <?php	
						
						
						}
					}
       
     			?>  
       	
        	</select></td>
            
            
       </tr>
       
     <tr>
     
     <td>City :</td>
     <td> <select name="city" >
       
       				
                  <?php 
				  
				   	$cit="select*from cities";
					
					$cid=mysql_query($cit);
					
					while($cat=mysql_fetch_array($cid))
					{
							if($cat[0]==$row[7])
       						{
       				?>
                    
                    		<option value="<?php echo $cat[0] ?>" selected="selected"><?php echo $cat[1] ?></option>
                    
                    
                    <?php 
					
							}
							else
							{
								
					?>
                    
                    				<option value="<?php echo $cat[0] ?>"><?php echo $cat[1] ?></option>
                    
                    <?php		
						
							}
					}
					
					?>
       
       			</select></td>
                
               </tr>
        <tr>        
                
     <td>  Region :</td>
     <td> <input type="text" name="rtxt" value="<?php echo $row[8] ?>"   /></td>
     </tr>
   	
    <tr>
     <td>Zip code:</td> 
     
     <td><input type="number" name="ztxt" value="<?php echo $row[9] ?>"  /></td>
      
      </tr> 
      
      <tr>
      
      <td> Coutry :</td>
      <td> <input type="text" name="ccode" value="<?php echo $row[10] ?>"  /></td>
      </tr>
      
      <tr>
      <td> Mobile Number :</td>
      <td> <input type="number" name="mtxt" value="<?php echo $row[11] ?>"  /></td>
      </tr>
      
      <tr>
      
      <td>Email:</td>
      <td> <input type="email" name="etxt" value="<?php echo $row[12] ?>" /></td>
      </tr>
      
      <tr>
      
      <td> Status:</td>
      <td> <input type="text" name="status" value="<?php echo $row[15] ?>" readonly /></td>
      	
        </tr>
       
       <tr>
       <td></td>
       
       <td><br /><br /><center><input style="width:auto;padding:8px;margin:2%;" type="submit" value="UPDATE" name="ubt"  /></center></td>
       
       </tr>
        <?php
 					
	
		}

		?>
		
       </center>
       </form>
       
       </body>
       
       
       
  