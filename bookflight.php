<?php
session_start();
include_once('dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
  {
  $h = $_POST['fln'];  
  $a = $_POST['psgr'];
  $b = $_POST['frm'];
  $c = $_POST['to'];
  $d = $_POST['dept_date'];
  $e = $_POST['ret_date'];
  $f = $_POST['no_seat'];
  $g = $_POST['sel'];
  
  $sql="insert into trip values(NULL,'".$h."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')";
mysqli_query($con,$sql);
header("location:ticdetail.php");
}    

?>

<!DOCTYPE html>
<html>
<head>
  <title>FLIGHT BOOKING</title>
  <link rel="stylesheet" type="text/css" href="bookflight.css">
</head>
<body>

   <h1>FLIGHT OPTIONS</h1>
   <span class="option">
        <a href="flight.php"><button>SEARCH YOUR FLIGHTS</button></a>&nbsp; 
        <a href="bookflight.php"><button style="border-width: 4px;border-top-width:1px; ">BOOK YOUR FLIGHTS</button></a>&nbsp;
        <a href="topairlineR.php"><button>TOP AIRLINE ROUTES</button></a>
    </span><br><br>
   
      
    <span class="flight">
<form method="POST" action="" style="text-align: center;">
    <input type="radio" name="select" value="rnd">Round Trip
    <input type="radio" name="select" value="on">One way
    <input type="radio" name="select">Book with Miles
    <input type="radio" name="select">Calender Shop
    </span><br><br><br>

    <span class="textbox">
    Select Class <select name="sel" placeholder ="Select">
    <option style="background-color: #966e4a;">Economy</option>
    <option style="background-color: #966b48;">Business</option>
    </select>
    Flight No :
    <input type="text" name="fln" size="10">
    Enter your Seat no. :
    <input type="text" name="no_seat" size="10">
    </span><br>

   <h5>Departure Details*</h5>

    <span class="textbox">
    <input type="text" name="frm" placeholder="From City*" value="" size="30">
    <img src="">
    <input type="text" name="to" placeholder="To City*" value="" size="30">
    </span>

   <h5>Travel Date*</h5>
 
    <span class="textbox">
    <p id="Dates">Departure Date:
    <input type="Date" name="dept_date" size="10">&nbsp; Return Date:<input type="Date" name="ret_date" size="10">
    </p><br>
    </span>
     
 
   <h5>Passenger Details*</h5><br>
    
    <span class="textbox">
    Name of Passenger:<input type="text" name="psgr"><br><br>
    <u>use discount</u></span><br><br>

    <span class="button">
    <input type="submit" name="submit" value="BOOK FLIGHT">    
    <a href="flight.php">CANCEL</a>
    </span>

    <p><u>changed bag rules</u> and <u>optional services</u></p>

  </form>
</span>
</body>
</html>