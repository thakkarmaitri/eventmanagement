<?php
session_start();
?>
<?php
include "conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />

<body>
<div id="content">
<div id="back">
<!-- header begins -->
<div id="header">
    <div id="menu">
		<ul>
			<li><a href="home.php" title="">Home</a></li>
			<li><a href="reg.php" title="">Registration</a></li>
			
			<li><a href="home.php" title="">login</a></li>
			<li><a href="about.php" title="">About</a></li>
			<li><a href="contact.php" title="">Contact</a></li>
            
		</ul>
  </div> 
    <div id="logo">
		<h1><a href="#">event management</a>	</h1>
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->
 <div id="main">
   <div id="top">
     <div id="left">	
		  <h4><a href="#">Already Account</a></h4>
          <?php
if(isset($_POST['sub']))
{
$str="select uid,uname,uemail from user where uemail='".$_POST['eid']."' and upass='".$_POST['pass']."'";
$rs=mysql_query($str);
if($array=mysql_fetch_array($rs))
{
	echo'<meta http-equiv="refresh" content="0; URL=welcome.php">';
	$_SESSION['id']=$array[0];
	$_SESSION['name']=$array[1];
}
else
{
	echo "<font color='#FF0000'><h3>You are not register user..!!!</h3></font>";
}
}
?>
			 <form id="form1" method="post" action="">
		       <p>Email Id:</p>
				      <p>
				        <label for="eid"></label>
				        <input type="text" name="eid" id="eid" />
			          </p>
                      
				      <p>Password:
				        <label for="txtpass"></label>
			          </p>
				      <p>
				        <input type="password" name="pass" id="pass" />
	           </p>
				      <p>
				        <input type="submit" name="sub" id="sub" value="Submit" />
                      
			          </p>
				      <p> <a href="">Forgot your password?</a></p>
				      <p>&nbsp;</p>
		  </form>
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