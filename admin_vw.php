<?php
session_start();
include_once ("dbconnect.php");
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW YOUR AIRLINES</title>
</head>
<body>
  <table border="1" cellspacing="25">
        	<tr>
        		<td><span class="">ID</span></td>
            	<td><span class="">Flight No. </span></td>
                <td><span class="">Flight Name </span></td><br>
                <td><span class="">Daparture From </span></td>
                <td><span class="">Depart Time </span></td><br>
                <td><span class="">Arrival </span></td>
                <td><span class="">Fare </span></td><br>
                
				
            </tr>    
      <?php

      
             
         $vs = "select * from fldetail ";
         $num = mysqli_query($con,$vs);
         while($sum=mysqli_fetch_array($num))
			{
          
     ?>
           <tr>
           	    <td><?php echo $de['Flight_No'];?></td>
            	<td><?php echo $de['Flight_Name'];?></td>
                <td><?php echo $de['Departure'];?></td>
                <td><?php echo $de['Dep_time'];?></td>
                <td><?php echo $de['Arrival'];?></td>
                <td><?php echo $de['fare'];?></td>
                
            
            
            
           </tr>

			<?php

             }

			?>
</table>
</body>
</html>

