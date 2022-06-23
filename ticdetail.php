<?php
   session_start();
   include_once("dbconnect.php");

   

?>
<!DOCTYPE html>
<html>
<head>
	<title>TICKET DETAILS</title>
</head>
<body>
<h2>TICKET DETAILS </h2>
<table border="1" cellspacing="25">
        	<tr>
        		
            	<td><span class="">Flight No. </span></td>
                <td><span class="">Flight Name </span></td><br>
                <td><span class="">Daparture From </span></td>
                <td><span class="">Daparture To</span></td><br>
                <td><span class="">Daparture Date</span></td>
                <td><span class="">Return Date</span></td><br>
                <td><span class="">Seat</span></td><br>
                <td><span class="">Class</span></td><br>
                
				
            </tr>    
      <?php

      
             
         $vs = "select * from trip ";
         $num = mysqli_query($con,$vs);
         $sum=mysqli_fetch_array($num);
			{
          
     ?>
           <tr>
           	    <td><?php echo $sum['flight_no.'];?></td>
            	<td><?php echo $sum['name'];?></td>
                <td><?php echo $sum['from'];?></td>
                <td><?php echo $sum['to'];?></td>
                <td><?php echo $sum['dept_date'];?></td>
                <td><?php echo $sum['ret_date'];?></td>
                <td><?php echo $sum['seat'];?></td>
                <td><?php echo $sum['class'];?></td>
               	                
            
            
            
           </tr>

			<?php

             }

			?>
</table>
</body>
</html>
