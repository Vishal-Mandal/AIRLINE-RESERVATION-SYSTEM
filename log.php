<?php

session_start();

  $_SESSION['user']="";

   if($_SESSION['user']=="")
   {

    header("location:home.php");
   }
  session_destroy();

?>

