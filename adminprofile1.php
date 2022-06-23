<?php
   
   session_start();
	include_once ("dbconnect.php");
	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center;">
   <div style="float: right;"><button>Logout</button></div>
	<h1>ADMIN PROFILE</h1>
	<span>
		<a href="Adminprofile.php"><button>Add Flight Details</button></a>
		<button>View Flight Details</button>
		<a href="Adminprofile2.php"><button>View Booking Details</button></a>
		<a href="Adminprofile3.php"><button>Add Notice</button></a>
    </span><br><br><br>
   <span>
   Date:<input type="Date" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button>SEARCH</button></span>

   
     <table border="1" cellspacing="25">
        	<tr>
        		<td><span class="">ID</span></td>
            	<td><span class="">Flight No. </span></td>
                <td><span class="">Flight Name </span></td><br>
                <td><span class="">Daparture From </span></td>
                <td><span class="">Depart Time </span></td><br>
                <td><span class="">Arrival </span></td>
                <td><span class="">Arrival Time </span></td>
                <td><span class="">Fare </span></td><br>
                
				
            </tr>    
      <?php

      
             
         $vs = "select * from fldetail ";
         $num = mysqli_query($con,$vs);
         while($sum=mysqli_fetch_array($num))
			{
          
 ?>
           <tr>

           	    <td><?php echo $sum['id'];?></td>

           	    <td><?php echo $sum['Flight_No'];?></td>
            	<td><?php echo $sum['Flight_Name'];?></td>
                <td><?php echo $sum['Departure'];?></td>
                <td><?php echo $sum['Dep_Time'];?></td>
                <td><?php echo $sum['Arrival'];?></td>
                <td><?php echo $sum['Arr_Time'];?></td>
                <td><?php echo $sum['fare'];?></td>
                
            
            
            
           </tr>

			<?php
             }
			?>
</table>

</body>
</html>