<?php
  session_start();
  include_once "dbconnect.php";
  $msg="";

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $a=$_REQUEST['cardn'];
    $j=$_REQUEST['cty'];
    $b=$_REQUEST['fromdat']; 
    $c=$_REQUEST['tilldat'];
    $d=$_REQUEST['cv'];
    $e=$_REQUEST['add'];
    $f=$_REQUEST['cit'];
    $g=$_REQUEST['state'];
    $h=$_REQUEST['zi'];
    $i=$_REQUEST['coun'];


    
    $sql="insert into payment values (NULL,'".$a."','".$j."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."')";
    mysqli_query($con,$sql);
    
    $msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>";
    
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <link rel="stylesheet" href="payment.css">
</head>
<body>

  <?php
   include "header_exp.php";
  ?>

  <div class="img1">
    <img src="">
  </div>

  <form method="POST" class="form" action="userhome.php">

  <h1>PAYMENT</h1><br><br><br>

  Card Number:<input type="text" name="cardn" required=""><br><br><br>

  Card Type:
  <select name="cty" required="">
  <option>Select</option>
  <option>VISA</option>
  <option>RuPay</option>
  <option>Master Card</option>
  </select>&nbsp;&nbsp;&nbsp;<img src="img/PIC6.jpg" height="auto" width="160px" style="margin-bottom: -8px;">
  <br><br><br>


  <span class="expf">
  Expiry Date:<input type="Date" name="fromdat"></span>/
  <span class="expt">
  <input type="Date" name="tilldat">
  </span><br><br><br>

  CVV:<input type="Number" name="cv" min="0"><br><br><br>

  <b>Billing Address</b><br><br>

  Address*:<input type="text" name="add"><br><br><br>
  City/Town*:<input type="text" name="cit"><br><br><br>
  State/Province*:<input type="text" name="state"><br><br><br>
  Post/Zip Code:<input type="text" name="zi"><br><br><br>
  

  Country*:<select name="coun"><br><br><br>
  <option>SELECT</option>
  <option>India</option>
  <option>America</option>
  <option>Japan</option>
  <option>Australia</option>
  <option>UK</option>
  </select><br><br><br>

  <div class="img"><img src="img/PIC5.png">
   <input type="submit" name="s1" value="PAY HERE" style="background-color: #aa101e;color: white;padding: 8px;border:1px solid white;"><br><br>
   <u>Cancel and return to booking</u>
  </div><br><br><br>

</form>
<br><br>

<?php
  include "footer_exp.php";
?>

</body>
</html>