<!DOCTYPE html>
<html>
<head>
</head>
<style>
    body{
        text-decoration: inherit;
    }

    header{
        background-color:#005773;
        height:290px;
        width: 80%;
        padding: 20px 10%;

      }
      .logo_container{
        width: 35%;
        height:100%;
        float: left;
        display: block;
      }
     .logo_container img{
       width: 200px;
       height:200px;

      }
      .title{
        line-height:10px;
        margin-bottom: 0px;


      }
      .title button{
        border-style:none;
        background-color: transparent;
        text-decoration: blink;
        color:white; 

      }

      .help nav{
         float: right;
         margin-right: -80px;
      }

      .help ul{
        list-style-type: none;


      }
      .help ul li{
        display: inline-block;
      }
      .help ul li a:hover{
        background-color:transparent; 
        color:#ff2400;
      }
      .help ul li a{
        text-decoration: none;
        color: #fff;
        padding: 20px;
        border:1px solid #cacaca;
        transition: 0.6s ease;
      }
      
</style>
<body>
    
    <header>

      <div class="logo_container">  
          <img src="img/logo4.jpg">
      </div> 

    <div class="title">
      <button><h1>ROYAL &nbsp;&nbsp;Tour&nbsp;&nbsp;&nbsp;&nbsp; AIRLINES</h1></button>
    </div>   

           <div class="help">
            <nav>
             <ul> 
              <li><a href="home.php">HOME</a></li>
               <li><a href="aboutus.php">ABOUT US</a></li>
               <li><a href="contactus.php">CONTACT US</a></li>
             </ul>
            </nav>
           </div>

    </header>


</body>
</html>