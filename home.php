<!DOCTYPE html>
<html>
  <head>

	  <title>RoyaL TOUR</title>
      <link rel="stylesheet" href="home.css">
  </head>
<body>

       <?php
       include "header.php";

       ?>
         
            <div class="sign"> 
             <a href="registration.php"><button style="height: 34px;"><img src="" height="14" width="15"> SIGN UP</button></a>  
             <a href="travelinfo.php"><button style="height: 34px;">TRAVEL INFO</button></a>
             <a href="offers.php"><button style="height: 34px;">DEALS & OFFERS</button></a>
            </div>
          
          <form class="login">
            <select name="logMenu" id="logMenu">
            <option value="nothing" selected="selected" style="background-color:skyblue;">
            Select Login Option</option>
            <option value="userlogin.php" style="background-color: skyblue;"> 
            USER LOGIN</option>
            <option value="adminlogin.php" style="background-color: skyblue;"> 
            ADMIN LOGIN </option>
            </select>           
          </form><br><br><br><br><br>
            

                <script type="text/javascript">
                         var logOption = document.getElementById('logMenu');
                         logOption.onchange = function() 
                         {
                         var userOption = this.options[this.selectedIndex]; 
                       if (userOption.value != "nothing")
                         {
                         window.open(userOption.value, "", "");
                         } 
                         }
                 </script>

        
   
    
<span style="text-align: center;">

	       <div class="class_two">
		     <img src="img/PIC 4.jpg" height="680" width="1332" align="center">

		     <div class ="class_centered" align="center"><p font-size : x-large><h2>WELCOME TO RoyaL TouR AIRLINES</h2></p><br>
         </div>

	       <div class ="class_txt" align="center"><p><b>Happiness is looking down on your next  destination from your place windows.<b></p><br>
         </div>
         </div>
	  
	<table class="clss_tab">
     <tr class="clss_row">
     <td><img src="img/airplane-wallpaper-4.jpg" width="700px" height="450px"></td>
     <td><img src="img/jhg.png" width="640px" height="450px"></td>
     </tr><br>
     <tr class="clss_h">
     	<td><h4>INSTRUCTIONS AFTER PAYMENT</h4></td>
     	<td><h4>Abstract</h4></td>
     	
     </tr>
     <tr class="clss_four">
      <td>

     1.Your Full name<br>
     2. Your Active Email Address<br>
     3. Your Phone Number  <br>
     4. Amount Paid<br>
     5. Project Topic/Topics<br>
     6. Location you made payment from<br>
      </td>
      <td>Airline reservation and ticketing in a <br>commercial airline company is a project work aimed at creating<br> a system that will enable traveler’s book <br>their flight by making reservations..</td>    	
	</table><br>
	


	<div class="clss_five"><h3 align="center">Did you know?</h3>
		<div class ="clss_four" align="center">
      There’s only so much that can be done<br> to improve the experience of travel on a commercial flight. <br>Things like security regulations, weather<br> delays, and airport infrastructure, and sometimes even lost<br> baggage are simply outside the control of the<br> airlines. However, there are some very simple<br> things savvy airlines are already doing help to the<br> experience a little smoother:<br>
    </div>
	</div>


	  <div>
	  <table>
       <tr class="clss_tab2">
       <td><img src="img/pic27.jpg" height="600px"></td>
       <td><img src="img/pic22.jpg" height="600px"></td>
       <td><img src="img/bigstock-Beautiful-sunset-with-airplane-442054841.jpg" height            ="600px" width="530px"></td>
       </tr>
	  </table>
    </div>


   
	  <div class="clss_six">
		<h4>Why Choose Us ?</h4>
		<ul><b>
			<li><u>Because people travelling by air is increasing day by day.</u></li>
			<li>In such a dynamic, fast paced industry, a job in the aviation industry means that you're part of a <br>bigger picture, helping to keep things moving and keeping up with the speed at which things happen.</li>
			<li>Airlines and airports also recognise how important it is that their employees enjoy life outside of <br>work too to ensure their happiness at work. </li>
			<li>As a business it's in the best interest of airlines and airports that their employees are continually<br> developing, so they ensure that they offer their employees training and career development</li>
			<li>In such a dynamic, fast paced industry, a job in the aviation industry means that you're part of a<br> bigger picture, helping to keep things moving and keeping up with the speed at which things happen.</li>
			<li>also ensure that their health is looked after as their employees are entitled to join their health <br>cash plan at a discounted rate</li>
		</b></ul>
    </div>


    <div align="center">
     <p>An airline is a company that provides air transport services for traveling passengers and freight.<br><br> Airlines utilize aircraft to supply these services, and may form partnerships or alliances with other <br>
     airlines for codeshare agreements. Generally, airline companies are recognized with an air operating <br>certificate or license issued by a governmental aviation body.<br><br><br>

     Airlines vary in size, from small domestic airlines to full-service international airlines with double decker <br><br>airplanes. Airline services can be categorized as being intercontinental, domestic, regional, or <br>international, and may be operated as scheduled services or charters. The largest airline currently[when?] is <br><br>Royal TOUR Airlines Group.</p>  <br><br><br>	
    </div>

    <div class="clss_seven"> 
    	<h2>What Client's say ?</h2>
    	<p><b>Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus vehicula mattis. Nulla ac massa at dolor condimentum<br>Jhon Doe</b></p>
    </div><br><br><br>


</span>

       <?php
       include "footer.php";

       ?>


</body>
</html>