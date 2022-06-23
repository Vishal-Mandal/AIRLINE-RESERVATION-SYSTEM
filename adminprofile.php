<?php
  session_start();
  include_once "dbconnect.php";
  $msg="";

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $a=$_REQUEST['flno'];
    $j=$_REQUEST['flna'];
    $b=$_REQUEST['frmc']; 
    $c=$_REQUEST['dept'];
    $d=$_REQUEST['toc'];
    $e=$_REQUEST['arr'];
    $f=$_REQUEST['pr'];

    
    $sql= "insert into fldetail values (NULL,'".$a."','".$j."','".$b."','".$c."','".$d."','".$e."','".$f."')";
    $re =mysqli_query($con,$sql);
   if ($re) {
          echo "Data Updated";
       } else {
         echo "Data Not Inserted";
       }   


    $msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>";
    
  }
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body style="text-align: center;">
   <div style="float: right;"><button>Logout</button></div>
   <h1>ADMIN'S DASHBOARD</h1>
   <span>
      <button>Add Flight Details</button>
      <a href="Adminprofile1.php"><button>View Flight Details</button></a>
      <a href="Adminprofile2.php"><button>View Transaction</button></a>
      <a href="Adminprofile3.php"><button>Add Notice</button></a>
   </span><br><br><br>
   <form method="post">
   <span>
      Flight No. : <input type="text" name="flno" id="flno"> 
      Flight Name :<input type="text" name="flna" id="flna">
   </span><br><br><br>
   <span>
      From: <input type="text" name="frmc" id="frmc"> 
        To:<input type="text" name="toc" id="toc">
   </span><br><br><br>
   <span>
      Departure Time : <input type="time" name="dept" id="dept">
      Arrival Time : <input type="time" name="arr" id="arr">
      
   </span><br><br><br>
   <div>
      Price<input type="text" name="pr" id="pr">
      
   </div><br><br><br>
   <span>
         <input type="submit" name="adf" value="ADD FLIGHT"> 
         <button>RESET</button>
   </span>
</form>
</body>
</html>