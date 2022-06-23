<?php
  session_start();
  include_once ("dbconnect.php");
  $a = $_SESSION['user'];

?>

<!DOCTYPE html>
<html>
<head>

	<title>RoyaL TOUR</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
    <h2>Hello<?php echo $a; ?></h2>
    <header class="first">
    <div class="title"><button><h1>RoyaL TOUR</h1></button></div>
           <div class="help">
             <ul> 
               <li><a href="">HOME</a></li>
               <li><a href="">HELP</a></li>
               <li><a href="contactus.php">CONTACT US</a></li>
             </ul>
           </div>
    </header>
            
            
           
		<button><img src="C:\Users\StArk\Desktop\HTML PROGRAMS\admin\mos-css\img\detail.png">Search</button>
    </div>
    </header><br><br><br><br>.
    
       <span style="text-align: center;">
		<a href="flight.php"><button>RESERVATION</button></a>
		<a href="travelinfo.php"><button>TRAVEL INFO</button></a>
		<a href="offers.php"><button>DEALS & OFFERS</button></a>
		    <form class="option">
            <select name="profMenu" id="profMenu">
            <option value="nothing" selected="selected">ROYAL TOUR</option>
            <option value="myprofrt.php">MY PROFILE</option>
            <option value="mytriprt.php">MY TRIPS</option>
            <option value="aboutus.php">ABOUT US</option>
            <option value="supportus.php">SUPPORT US</option>
            <option value="log.php">LOG OUT</option>
            </select>
        </form></span>
        <script type="text/javascript">
            var logOption = document.getElementById('profMenu');
            logOption.onchange = function() {
                var userOption = this.options[this.selectedIndex]; 
                if (userOption.value != "nothing") {
                    window.open(userOption.value, "", "");
                } 
            }
        </script>
        
		
	<div class="class_two">
		<img src="img/PIC 4.jpg" height="680" width="1332" align="center">
		<div class ="class_centered" align="center"><p font-size : x-large><h2>WELCOME TO RoyaL TouR AIRLINES</h2></p></div>
	    <div class ="class_txt" align="center"><p>Happiness is looking down on your next  destination from your place windows.</p></div>
	</div>
	<div class ="class_three"><h2 align="left">Some of Our Top Services</h2>
		<div class="clss_four"> Ut eleifend libero sed neque rhoncus consequat.MAecenas tincidunt,augue et rutrum condimentum,libero tectus mattis orci, ut commodo.</div><span class="clss_spn"><button>VIEW MORE</button></span>
	</div>
	<table class="clss_tab">
     <tr class="clss_row">
     <td><img src=""></td>
     <td><img src=""></td>
     <td><img src=""></td>
     <td><img src=""></td>
     </tr>
     <tr class="clss_h">
     	<td>SUSPENDISSE</td>
     	<td>MAECENAS</td>
     	<td>ALIQUAM</td>
     	<td>HABITASSE</td>
     </tr>
     <tr class="clss_four">
      <td>Quisque id tellus quios risus vehicula vehicula ut turpis. In eros nulla, placerat vitae ar,vehicula ut nunc. </td>
      <td>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</td>
      <td>Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor non.</td>
      <td>Astehicula ultricies.Inter venenatis mattis nisl, vitae pulvinar dui tempor non.</td>
     </tr>
     <tr class="clss_spn">
     <td><button>>> READ MORE</button></td>
     <td><button>>> READ MORE</button></td>
     <td><button>>> READ MORE</button></td>
     <td><button>>> READ MORE</button></td>
     </tr>	
	</table>
	<BR>
	<div class="clss_five"><h3 align="center">WHY MODUS VERSUS ?</h3>
		<div class ="clss_four" align="center">Capacitance cascading integer reflective interface data develpement high bus cache dithering transponder</div>
	</div>
	<div>
	<table>
     <tr class="clss_tab2">
     <td><img src="k"></td>
     <td><img src="s"></td>
     <td><img src="f"></td>
     </tr>
	</table>
    </div>
<div>
	<div class="clss_six">
		<h4>Why Choose Us ?</h4>
		<ul>
			<li>Quisque at massa ipsum</li>
			<li>Maecenas a lorem augue,egestas</li>
			<li>Cras vitae felis at lacus eleifend</li>
			<li>Etiam auctor diam pellentesque</li>
			<li>Nulla ac massa at dolor</li>
			<li>Condimentum eleifend vitae vitae</li>
		</ul>
    </div><span>
    <div align="center">
     <p>Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pelletesque lectus</p>   	
    </div>
    <div class="clss_seven"> 
    	<h2>What Client's say ?</h2>
    	<p><b>Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus vehicula mattis. Nulla ac massa at dolor condimentum<br>Jhon Doe</b></p>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</span>
</div>

<footer>
<div class="footer">
      <div class="inner_footer">
         <div class="logo_container">
          <img src="img/airlinelogo.png">
      </div>
      <div class="footer_third">
        <h1>Need Help?</h1>

        <a href="#">Terms &amp; Conditions</a><br>
        <a href="#">Privacy Policy</a>
      </div>
        
        <div class="footer_third">
        <h1>Need Help?</h1>
        <a href="#">Terms &amp; Conditions</a><br>
        <a href="#">Privacy Policy</a>
      </div>

      <div class="footer_third">
        <h1>Follow Us.</h1>
        <h4>Connect with us.</h4>
        <li><img src="img/pic14.jpg"></li><br>
        <li><img src="img/pic8.jpg"></li><br>
        <li><img src="img/pic9.jpg"></a></li>
      </div>

      <div class="footer_third">
      <li><p><img src="img/pic16.jpg"></p></li>
    </div>
  
  <span>
    
  </span>

  </div>
</div>
</footer></BR>
</body>
</html>