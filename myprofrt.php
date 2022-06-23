<?php
  session_start();
  
 
  include_once("dbconnect.php");

?>
                      
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO RoyaL TouR</title>
</head>
<body>

<div align="center">
	<span><h2>RoyaL TouR <em>AirLines </em> connects you around the World!</h2></span><span><a href="log.php"><button class="">LOG OUT</button></a></span>
	<span><button>MY PROFILE</button>&nbsp; 
     <a href="mytriprt.php"><button>MY TRIPS</button></a>&nbsp;
     <a href="aboutus.php"><button>ABOUT US</button></a>&nbsp;
     <a href="supportus.php"><button>SUPPORT US</button></a>&nbsp;
   </span>
    <?php
     include 'view_prof.php';
    ?>
</div>
</body>
</html>