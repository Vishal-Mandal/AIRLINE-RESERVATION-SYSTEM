<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'airline');
$msg="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $a = $_REQUEST['user'];
  $b = $_REQUEST['pass'];


  $tot = "select * from registrationforrm where Email ='".$a."' and Pass = '".$b."'";
     $res = mysqli_query($con, $tot) or die('Error Quering Database.');
    
         $_SESSION['user']=$a;
         header("location:userhome.php");

         $msg="<div style ='background:orange;width:200px;height:30px;border:1px solid black;'>Log in sucessfull.</div>";
    

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN HERE</title>
  <script> 
function FormData()                                    
{ 
    var u_ser = document.forms["loginform"]["user"];
    var p_ass = document.forms["loginform"]["pass"];
}  
</script>
<link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body>


  <div class="login-box">
    <h2>User Login</h2>
    <form method="POST" name="loginform" onsubmit="return FormData()">
      
      <div class="textbox">
        <input type="text" name="user" required="" id="u_ser">
        <label>Email</label>
      </div>

        <div class="textbox">
        <input type="password" name="pass" required="" id="p_ass">
        <label>Password</label>
      </div>
      
      <span><input type="submit" name="" value="LOG IN" class="btn">
        <button class="btn"><a href="home.php">CANCEL</a></button>
      </span>
    </form>
  </div>
</body>
</html>