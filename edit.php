<?php
  session_start();
  
 
  include_once("dbconnect.php");
  $a = $_SESSION['user'];
  
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    
    $title=$_REQUEST['title'];
    $description=$_REQUEST['description'];  
    
    $sql="update home set title='".$title."', description='".$description."' where ='".$id."'";
    echo $sql;
    mysqli_query($con,$sql);
    
    $msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>";
    
  }
  
  $sql1="select * from home where id='".$id."'";
  $rs=mysqli_query($con,$sql1);
  $d=mysqli_fetch_array($rs);
?>
                      
<!DOCTYPE html>
<html>
<head>
  <title>EDIT YOUR PROFILE</title>
</head>
<body>

<div align="center">
  <span><h2>RoyaL TouR <em>AirLines </em> connects you around the World!</h2></span><span><a href="log.php"><button class="">LOG OUT</button></a></span>
  <span><button>MY PROFILE</button>&nbsp; 
     <a href="mytriprt.php"><button>MY TRIPS</button></a>&nbsp;
     <a href="aboutus.php"><button>ABOUT US</button></a>&nbsp;
     <a href="supportus.php"><button>SUPPORT US</button></a>&nbsp;
   </span>
    </div>
    <form name="form1" method="post" action="">
          <table border="1">
            
              <tr>
                <td>Title</td>
                <td>:</td>
                <td><input type="text" name="title" id="title" value="<?php echo $d['title'];?>"/></td>
              </tr>
                <tr>
                <td>Description</td>
                <td>:</td>
                <td><textarea name="description" id="description"><?php echo $d['description'];?></textarea></td>
                </tr>
                <tr>
                <td><input type="submit" name="s1" value="Submit"/></td>
                <td>:</td>
                <td><input type="reset" name="s2"/></td>
                </tr>
            </table>
        
        
    </form>
</body>
</html>