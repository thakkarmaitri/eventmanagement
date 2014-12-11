<?php
session_start();
include "connect_server.php";
$cd=new connection();
$cd->connect_dbs();
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
 <?php						
 
?>
<div id="content">
<div id="back">
<!-- header begins -->
<div id="header">
    <div id="menu">
		<ul>
			<li><a href="welcome.php" title="">Home</a></li>
			<li><a href="profile.php" title="">Profile</a></li>
			
			<li><a href="pass.php" title="">Setting</a></li>
			<li><a href="contact.php" title="">Contact us</a></li>
			<li><a href="login.php" title="">LogOut</a></li>
		</ul>
  </div> 
    <div id="logo">
		<h1><a href="#">patan pranic healing</a></h1>
        <h1><font color="#FFFFFF">Welcome <?php echo $_SESSION['name']; ?></font></h1>
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->

 <div id="main">
   <div id="top">  
	<div id="right">		  			
			<h3>event category</h3>
			<div class="right_back">	
		    <div class="right_bottom">
			<ul>
					<li class="sub"><a href="yearly.php">Yearly Event</a></li>
					<li class="sub"><a href="#">Monthly Event</a></li>
					<li class="sub"><a href="#">Weekly Event</a></li>
					<li class="sub"><a href="#">Class Event</a></li>
					<li class="sub"><a href="#">Meditation Event</a></li>			
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
	  <h4>Current Events</h4>
	<ol>
    <?php
		$rs=$cd->get_rs("event");
		while($arr=mysql_fetch_array($rs))
		{
	?>
				<li><a href="curevent.php?id=<?php echo $arr[0]; ?>"><?php echo 'New event '.$arr[1]." at ".$arr['3'] ?></a></li>
             <?php } ?>
		  </ol>
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