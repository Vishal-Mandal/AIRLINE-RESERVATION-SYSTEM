<body style="text-align: center;" background="img/bigstock-Beautiful-sunset-with-airplane-442054841.jpg">
	<div style="float: right;"><a href="log.php"><button>Logout</button></a></div>
	<h1>ADMIN PROFILE</h1>
	<span>
		<a href="Adminprofile.php"><button>Add Flight Details</button></a>
		<a href="Adminprofile1.php"><button>View Flight Details</button></a>
		<a href="Adminprofile2.php"><button>View Transaction</button></a>
		<a href="Adminprofile3.php"><button>Add Notice</button></a>
    </span><br><br><br>
   <span>
   Date: <input type="Date" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button>SEARCH</button>
</body>
<?php
   session_start();
   include_once("dbconnect.php");

   

?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKING DETAILS</title>
</head>
<body>
<h2>BOOKING DETAILS </h2>
<table border="1" cellspacing="25">
        	<tr>
        		<td><span class="">ID</span></td>
            	<td><span class="">Flight No. </span></td>
                <td><span class="">Passenger Name </span></td><br>
                <td><span class="">From </span></td>
                <td><span class="">To </span></td><br>
                <td><span class="">Depart Date </span></td>
                <td><span class="">Return Date </span></td>
                <td><span class="">Seat </span></td>
                <td><span class="">Class</span></td><br>
                
				
            </tr>    
      <?php

      
             
         $vs = "select * from trip ";
         $num = mysqli_query($con,$vs);
         while($de =mysqli_fetch_array($num))
			{
          
     ?>
           <tr>
           	    <td><?php echo $de['id'];?></td>
            	<td><?php echo $de['flight_no.'];?></td>
                <td><?php echo $de['name'];?></td>
                <td><?php echo $de['from'];?></td>
                <td><?php echo $de['to'];?></td>
                <td><?php echo $de['dept_date'];?></td>
                <td><?php echo $de['ret_date'];?></td>
                <td><?php echo $de['seat'];?></td>
                <td><?php echo $de['class'];?></td>
                
            
            
            
           </tr>

			<?php

             }

			?>
</table>
</body>
</html>
