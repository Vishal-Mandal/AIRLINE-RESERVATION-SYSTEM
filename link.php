//Step 1
<?php
$db = mysqli_connect('localhost', 'root', '', 'airline')
or die('Error connecting to My SQl server.');
?>
<!DOCTYPE html>
<html>
<head>
  <title>LINK</title>
</head>
<body>
  <h1>PHP connect to my sql.</h1>
/*Step 2*/ 
<?php
$query = "select * from registrationforrm";
mysqli_query($db,$query) or die ('Error Quering database.');
//step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
while ($row= mysqli_fetch_array($result)) {
  echo $row['F_Name'].''.$row['L_Name'].''.$row['Lang'].''.$row['Nation'].''.$row['DOB'].''.$row['Sex'].''.$row['City'].''.$row['Address'].''.$row['Email'].''.$row['Phone'].''.$row['Pass'].'<br />';
}
//Step 4
mysqli_close($db);
?>
</body>
</html>
$a = $_POST['FirstName'];
$b = $_POST['LastName'];
$c = $_POST['Lan'];
$d = $_POST['Nat'];
$e = $_POST['Dateofbirth'];
$f = $_POST['ge'];
$g = $_POST['Cit'];
$h = $_POST['Add'];
$i = $_POST['EMail'];
$j = $_POST['Telephone'];
$k = $_POST['Password'];

$row = mysqli_fetch_array($res);

while ($row= mysqli_fetch_array($res)) {
  echo $row['F_Name'].''.$row['L_Name'].''.$row['Lang'].''.$row['Nation'].''.$row['DOB'].''.$row['Sex'].''.$row['City'].''.$row['Address'].''.$row['Email'].''.$row['Phone'].''.$row['Pass'].'<br />';
}
<button type="select">
        <option><u> LOG IN </u></option> 
            <a href="userlogin.php"><option><button type="select"> USER LOG IN </button></option></a> 
            <a href="adminlogin.php"><option><button type="select"> ADMIN LOG IN </button></option></a> 
        </button>
 //view table in php
 <?php
			$sql="select * from home";
			
			$rs=mysqli_query($con,$sql);
			while($d=mysqli_fetch_array($rs))
			{
			?>
            <tr>
            	<td><?php echo $d['id'];?></td>
                <td><?php echo $d['title'];?></td>
                <td><?php echo $d['description'];?></td>
               
            <td><a href="edit_home.php?id=<?php echo $d['id'];?>">Edit</a></td>
            <td><a href="delete_home.php?id=<?php echo $d['id'];?>">Delete</a></td>
            </tr>
			<?php
			}
			?> 
//edit table in php
           <?
            $id=$_REQUEST['id'];
	
	        if($_SERVER['REQUEST_METHOD']=='POST')
	       {
		
		    $title=$_REQUEST['title'];
		    $description=$_REQUEST['description'];	
		    $sql="update home set title='".$title."', description='".$description."' where id='".$id."'";
		    echo $sql;
		    mysqli_query($con,$sql);
		
		    $msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>";
		
	      }
	
	        $sql1="select * from home where id='".$id."'";
	        $rs=mysqli_query($con,$sql1);
	        $d=mysqli_fetch_array($rs);
          ?>
//delete table in php
          <?
          $id=$_REQUEST['id'];
	
	      $sql="delete from home where id='".$id."'";
	      mysqli_query($con,$sql);
	
	      header("location:view_home.php");


          ?>          




/*Table that is written in Footer*/
            <a href=""><li>Quisque at massa ipsum</li></a>
			<a href=""><li>Maecenas a lorem augue,egestas</li></a>
			<a href=""><li>Cras vitae felis at lacus eleifend</li></a>
			<a href=""><li>Etiam auctor diam pellentesque</li></a>
			<a href=""><li>Nulla ac massa at dolor</li></a>
			<a href=""><li>Condimentum eleifend vitae vitae</li></a>
		</ul>

//selct adult and children		
		<p id="adult">Adults:
    <select type="text" name="" value="" >
      <option>1 adult</option>
      <option>2 adult</option>
      <option>3 adult</option></select>
  </p>
  <p id="chidren">Children:
    <select type ="text" name="" value="">
      <option>0 children</option>
    <option>Age 2-17</option>
    <option>Under 2(on lap)</option></select>
  </p>

  //payment style sheet

  <style type="text/css">
		body{
			display: flex;
			justify-content: space-around;
			align-items: center;
			flex-direction: column;
			font font-family: sans-serif;
		}
		.form{
			border-style:outset;
			width: 50%;
			height: 50%;
			position: relative;
			background-color:silver;
		}
		.img{
			line-height:20px;

		}

	</style>
	<form method="post">
  <h1 align="center">Welcome Arya Technology</h1>
  <h3 align="center">ADD LIST</h3>
  <center><input type="text" name="addlist"></center>
  <h3 align="center">FEEDBACK</h3>
  <center><input type="text" name="feedback"><br><br></center>
  <center><input type="submit" name="submit" value="PAY NOW"></center>

  //style

<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
    <div style="position: relative;
             text-align: center;
             color: black;">
             </div></div></div>
             <img src="img/pic19.jpg">


             //registration form
             
h1 {
 text-transform: uppercase;
 position: relative;
 color:#222;
 border-bottom: 16px solid #222;
 letter-spacing: 0.05em;
}

h1:before{
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    color: #03a9f4;
    overflow: hidden;
    border-bottom: 16px solid #222;
    animation:animate 10s linear infinite; 

}
<script> 
function FormData()                                    
{ 
    var e_mail = document.forms["loginform"]["email"];
    var p_ass = document.forms["loginform"]["pass"];

    if (e_mail.value == "")                                  
    { 
        window.alert("Please type your Email Address."); 
        e_mail.focus(); 
        return false; 
    } 
   
 if (p_ass.value == "")                                  
    { 
        window.alert("Please type your Password."); 
        p_ass.focus(); 
        return false; 
    }
      return true;

}  
</script>
