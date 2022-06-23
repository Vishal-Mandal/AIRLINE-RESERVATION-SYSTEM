<?php
	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="new_airline";
	$con=mysqli_connect("localhost","root","","new_airline");
	if(!$con)
	{
	  die("Can't connect:".mysql_error($con));	
	}
	else {
	  echo "";
		}	
?>


