<?php
include "conn.php";
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
			<li><a href="home.php" title="">Home</a></li>
			<li><a href="reg.php" title="">Registration</a></li>
			
			<li><a href="login.php" title="">Login</a></li>
			<li><a href="about.php"s title="">About</a></li>
			<li><a href="contact.php" title="">Contact</a></li>
		</ul>
  </div> 
    <div id="logo">
		<h1><a href="#">patan pranic healing</a>	</h1>
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->

 <div id="main">
   <div id="top">  
	<div id="right">		  			
			<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event category</h3>
			<div class="right_back">	
		    <div class="right_bottom">
			<ul>
					<li class="sub"><a href="yearly.php?id=1">Yearly Event</a></li>
					<li class="sub"><a href="yearly.php?id=2">Monthly Event</a></li>
					<li class="sub"><a href="yearly.php?id=3">Weekly Event</a></li>
					<li class="sub"><a href="yearly.php?id=4">Class Event</a></li>
					<li class="sub"><a href="yearly.php?id=5">Meditation Event</a></li>			
	        </ul>
		    </div>
		  </div>	
		
			
		  <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calendar</h3>
			<div class="right_back">	
		    <div class="right_bottom">
				<div id="calendar">
					<?php include("cald.php"); ?>
				</div>
				
		  </div>
		 </div>
	 
	</div>
	<div id="left">
	 
	<ol>
    <?php
		$str="select * from edes where ename=".$_REQUEST['id'];
		$rs=mysql_query($str);
		while($arr=mysql_fetch_array($rs))
		{?>
        <p><?php echo $arr[3]; ?></p>
		<?php }
	?>
		  </ol>
	
	      
			
			<p><?php echo $arr[3]; ?></p>
			
			
		
	</div>
	<div style="clear: both;"></div>
<!--content ends -->
<!--footer begins -->


</div>
<div id="bottom"></div>
</div>
</div>
<div id="footer">
<p>&nbsp;</p>
</div>
</div>
<!-- footer ends-->
</body>
</html>