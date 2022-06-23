<?php
    session_start();
	include_once "dbconnect.php";
	
	$id=$_REQUEST['id'];
	
	$sql="delete from registrationforrm where id ='".$id."'";
	mysqli_query($con,$sql); 
	
	header("location:myprofrt.php");


?>