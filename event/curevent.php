<?php
include "connect_server.php";
$cdb=new connection();
$cdb->connect_dbs();

session_start();

if(isset($_POST['submit']))
{
	$s="select rname,city,mno,email from reg where email='".$_POST['email']."' and pass='".$_POST['pass']."'";
	$rs=mysql_query($s);
	if($ar=mysql_fetch_array($rs))
	{
			echo'<meta http-equiv="refresh" content="0; URL=user.php">';
			
			$_SESSION['name']=$ar[1];
			$_SESSION['id']=$ar[3];
		}
		else
		{
			echo "not register user";
		}
}
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
		<h1><a href="#">patan pranic healing</a>	</h1>
        <h1><font color="#FFFFFF">Welcome <?php echo $_SESSION['name']; ?></font></h1>
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->

 <div id="main">
   <div id="top">  
	<div id="right">		  			
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event category</h3>
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
			
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calendar</h3>
			<div class="right_back">	
		    <div class="right_bottom">
				<div id="calendar">
					
					<?php include("cald.php"); ?>
				
				</div>
		  </div>
		 </div>
	 
	</div>
	<div id="left">
    <center>
	  <h4><a href="#">Event</a></h4></center>
      <?php
	  	if($_REQUEST['sid']!=NULL)
		{
			if($_REQUEST['sid']=="suc")
			{
			echo "<h3><center>Thank you for registration</center></h3>";
			}
			else if($_REQUEST['sid']=="fail")
			{
				echo "<h3><center>Sorry no available seats for event</
				
				h3></center>";
			}
			else
			{
				
				echo "<center><font color='#FF0000'><h3>You are already register user</h3></font></center>";
			}
		}
	  ?>
	<ol>
    <?php
		

$rs=$cdb->get_rs("curevent");
if($array=mysql_fetch_array($rs))
{
}
?>
	
				
		  </ol>
	<p class="date">&nbsp;</p>
	    <center> 
		<table width="518" bordercolor="#6699FF">
        <tr>
        <th width="286" align="left">Name:</th>
        <td width="220">
        	<?php echo $array[1]; ?>
        </td>
        </tr>
        <tr>
        <th align="left">Type:</th>
        <td>
        	<?php echo $array[2]; ?>
        </td>
        </tr>
        <tr>
        <th align="left">Adress:</th>
        <td>
        	<?php echo $array[3]; ?>
        </td>
        </tr>
         <th align="left">Contect No:</th>
        <td>
        	<?php echo $array[4]; ?>
        </td>
        </tr>
         <th align="left">Date:</th>
        <td>
        	<?php echo $array[5]; ?>
        </td>
        </tr>
         <th align="left">Time:</th>
        <td>
        	<?php echo $array[6]; ?>
        </td>
        </tr>
         <th align="left">Available Seats:</th>
        <td>
        	<?php echo $array[7]; ?>
        </td>
        </tr>
        </table>
        <h4><a href="addevent.php?id=<?php echo $array[0]; ?>" onclick="return confirm('Do you really want to register for the event?');">Do you want to register for Event?</a></h4>	
        </center>
<p class="date">&nbsp;</p>				
	
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