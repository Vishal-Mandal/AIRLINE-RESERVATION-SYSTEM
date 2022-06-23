<!DOCTYPE html>
<html>
<head>
	<title>FLIGHT BOOKING</title>
  <link rel="stylesheet" type="text/css" href="flight.css">
</head>
<body>
  
    <h1>FLIGHT OPTIONS</h1>
	      <span class="option">
        <button style="border-width: 4px;border-top-width:1px;">SEARCH YOUR FLIGHTS</button>&nbsp; 
        <a href="bookflight.php"><button>BOOK YOUR FLIGHTS</button></a>&nbsp;
        <a href="topairlineR.php"><button>TOP AIRLINE ROUTES</button></a>
        </span><br><br>

        
      <form>
       <b>Departing:</b>
        <select type="text" class="dept">
        <option style="background:#07239c;">Yesterday</option>
        <option style="background:#1f3cb9;">Today</option>
        <option style="background:#4560d6;">Tommorow</option>
        </select><br><br>

        <span class="textbox">
        <input type="text" name="" placeholder="From*" value="" size="30">
        </span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="textbox">
        <input type="text" name="" placeholder="To*" value="" size="30">
        </span><br><br>
          
       <b>Travel Date*</b>

        <span class="flight">
        <p id="Date">Departure Date:
        <input type="Date" name="" size="10">
        </p><br>
        </span>

        <span class="button"><button style="background-color:blue; color: white; border-width: 1px;">
        FIND FLIGHT</button>
        <a href="home".php><button style="background-color:red; color: white; border-width: 1px;">
        CANCEL</button></a></span>
        <p><u>changed bag rules</u></a> and <u>optional services</u></p>
      </form>
</body>
</html>