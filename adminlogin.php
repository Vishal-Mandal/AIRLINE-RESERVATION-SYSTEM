<?php
session_start();
include "dbconnect.php";
$msg ="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $a = $_REQUEST['aemail'];
  $b = $_REQUEST['apass'];
  
  $sql ="select * from adlogin where Email = '".$a."' and Password = '".$b."'";
  $f = mysqli_query($con, $sql);
  $n = mysqli_num_rows($f);
      if ($n > 0){
        header("location: adminprofile.php");
    }
    else{
        $msg = "Invalid Email Address and Password !";
    }
 }   
?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN HERE</title>
  <script>
    function formData()
    {
    var a_user = document.forms["adminlog"]["aemail"];
    var a_pass = document.forms["adminlog"]["apass"];
    }
  </script>
  <link rel="stylesheet" type="text/css" href="Adminlogin.css">
</head>
<body>

 
    <p align="center"><?php echo $msg;?></p>

  <div class="login-box">
  	<h2>Admin Login </h2>
    <form name="adminlog" method="POST" onsubmit="return formData()">

    	<div class="textbox">
    		<input type="text" name="aemail" required="">
    		<label> Email</label>
    	</div>

        <div class="textbox">
    		<input type="password" name="apass" required="">
    		<label> Password</label>
    	</div>

    	<span><input type="submit" name="" value="LOG IN" class="btn">
      <button class="btn"><a href="home.php">CANCEL</a></button>
      </span>
    </form>
  </div>
</body>
</html>