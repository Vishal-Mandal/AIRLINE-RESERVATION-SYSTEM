<?php
   
   
	include_once ("dbconnect.php");

    $a = $_SESSION['user'];

    $vs = "select * from registrationforrm where Email = '".$a."' ";
         $num = mysqli_query($con,$vs);
?>

<!DOCTYPE html>
<html>
<head>
	<title>MY PROFILE</title>
</head>
<body>
  <table border="1" cellspacing="25">
        	<tr>
        		<td><span class="">Id </span></td>
            	<td><span class="">Name </span></td>
                <td><span class="">Language </span></td><br>
                <td><span class="">Nationality </span></td>
                <td><span class="">Date of Birth </span></td><br>
                <td><span class="">Gender </span></td>
                <td><span class="">City </span></td><br>
                <td><span class="">Email Address </span></td>
                <td><span class="">Phone No </span></td><br>
				<td><span class="">Edit </span></td>
				
            </tr>    
      <?php

      
             
         $de=mysqli_fetch_assoc($num);

          
 ?>
           <tr>
           	    <td><?php echo $de['id'];?></td>
            	  <td><?php echo $de['F_Name'];?></td>
                <td><?php echo $de['Lang'];?></td>
                <td><?php echo $de['Nation'];?></td>
                <td><?php echo $de['DOB'];?></td>
                <td><?php echo $de['Sex'];?></td>
                <td><?php echo $de['City'];?></td>
                <td><?php echo $de['Email'];?></td>
                <td><?php echo $de['Phone'];?></td>
               
            <td><a href="edit.php?id= <?php echo $de['id'];?>">Edit</a></td>
            
            
           </tr>
			
</table>
</body>
</html>