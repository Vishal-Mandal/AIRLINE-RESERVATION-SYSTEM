<html>
<head>



	<style type="text/css" >

		body{
        text-align: center;

		}
		.tr{
			text-align: center;
		}
		table{
			margin-left: 550px;
		}

			
	</style>
		



</head>
<body>
	<div style="float: right;"><button>Logout</button></div>
	<h1>ADMIN PROFILE</h1>
	<span>
		<a href="Adminprofile.php"><button>Add Flight Details</button></a>
		<a href="Adminprofile1.php"><button>View Flight Details</button></a>
		<a href="Adminprofile2.php"><button>View Transaction</button></a>
		<a href="Adminprofile3.php"><button>Add Notice</button></a>
    </span><br><br><br>
   

   <form name="form" method="post" action="">
    <table>  
                <tr class="tr">
                <td>Notice</td>
                <td>:</td>
                <td><textarea name="Notice" id="Notice"></textarea></td>
                </tr>
                <tr class="tr">
                <td><input type="submit" name="s1" value="ADD"/></td>
                <td>:</td>
                <td><input type="reset" name="s2"/></td>
                </tr>
            
    </table>
  </form>

</body>
</html>
