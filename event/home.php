<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
 <script type="text/javascript" language="javascript">
function emailvd()
 {
		var x=document.forms["form1"]["eid"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	    {
  			alert("Not a valid e-mail address");
  			return false;
  		}
 }
 </script>
<div id="content">
<div id="back">
<!-- header begins -->
<div id="header">
    <div id="menu">
		<ul>
			<li><a href="home.php" title="">Home</a></li>
			<li><a href="reg.php" title="">Registration</a></li>
			
			<li><a href="home.php" title="">Login</a></li>
			<li><a href="about.php"s title="">About</a></li>
			<li><a href="contact.php" title="">Contact</a></li>
		</ul>
  </div> 
    <div id="logo">
		<h1><a href="#">Patan Pranic healing</a>	</h1>
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->
 <div id="main">
   <div id="top">  
	<div id="right">
	  
	  <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log in</h3>
			<div class="right_back">	
		    <div class="right_bottom">
            <form action="" name="form1" value="form1" id="form1" method="post">
            <?php
if(isset($_POST['sub']))
{
	
	include "connect_server.php";
	$cd=new connection();
	$cd->connect_dbs();
	$cd->user_login($_POST["eid"],$_POST["pass"]);

}
?>
            <font color="#666666">
			  <p>&nbsp;</p>
			  <p>Email Id:&nbsp;&nbsp;<input type="text" id="eid" name="eid" onblur="emailvd()"/></p>
              <p>&nbsp;</p>
			  <p> Password:<input type="password" id="pass" name="pass"/>
			  </p>
            </font>
            <p>&nbsp;</p>
              <font color="#666666">
            <center>  <input type="submit" name="sub" id="sub" value="Login" /></center>
            <center><a href="reg.php">Click here for registration</a></center>
            <center><a href="forgot.php">Forgot Password??</a></center>
              </font>
            </form>
		    </div>
		  </div>	
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Events Type</h3>
			<div class="right_back">	
		    <div class="right_bottom">
			<ul>
			  <ul>
					<li class="sub"><a href="yearly.php?id=1">Yearly Event</a></li>
					<li class="sub"><a href="#">Monthly Event</a></li>
					<li class="sub"><a href="#">Weekly Event</a></li>
					<li class="sub"><a href="#">Class Event</a></li>
					<li class="sub"><a href="#">Meditation Event</a></li>			
	        </ul>
			  </ul>
		  </div>
		  </div>
			<h3>Calendar</h3>
			<div class="right_back">	
		    <div class="right_bottom">
				
					<div id="calendar">
					<?php include("cald.php"); ?>
				</div>
		  </div>
		 </div>
	 
	</div>
	<div id="left">	
			<h4><center><a href="#">Evnet introduction</a></center>	      </h4>
		 <font size="" color="#000000" <h1><p>Atma Namstey,</p>
			    <p> Greetings..!</p>
			    <p> Pranic Healing – energy based healing technique which was conceptualise and modernise by world recognised author Grand Master Choa Kok Sui , Master Pranic Healer, spiritual guru, lecturer, auther, philanthropist, chemical engineer, businessman and famly man, Master Choa Kok Sui is a true morden-day renaissance man.</p>
			    <p>	 &nbsp;&nbsp;&nbsp;Basic pranic healing guides you through the seven basic steps of pranic healingin an easy to learn, systemetic way including self healing, distance healing etc………
			      A very powerful advanced meditation technique known as meditation on twin hearts is also taught in basic pranic healing.
			      Grand Master Choa Kok Sui’s Patan group is very proactive in the event management of pranic healing courses as well as healing sessions, book reading and group meditations. All this activities are open for every pranic healer.</p>
                  
                 <p>&nbsp;
                 
                 </p>
                 </h1>
                </font> 
                 
                 
                <p>  <img src="images/event.jpg" width="701" height="350" border="2"/></p>
	      <p class="date">&nbsp;</p>

	<h4>&nbsp;</h4>
</div>
	<div style="clear: both;"></div>
<!--content ends -->
<!--footer begins -->


</div>
<div id="bottom"></div>
</div>
</div>
<div id="footer"></div>
</div>
<!-- footer ends-->
</body>
</html>