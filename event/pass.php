<?php
session_start();
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
<script type="text/javascript" language="javascript">
	
 function emailvd()
 {
		var x=document.forms["form1"]["aemail"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	    {
  			alert("Not a valid e-mail address");
  			return false;
  		}
 }
 
	
</script>
</head>
<body>

<div id="content">
<div id="back">
<!-- header begins -->
<div id="header">
    <div id="menu">
		<ul>
			<li><a href="welcome.php" title="">Home</a></li>
			<li></li>
			<li></li>
			<li></li>
			<li><a href="login.php" title="">Profile</a></li>
            <li><a href="pass.php" title="">Setting</a></li>
			<li><a href="contact.php" title="">contect us</a></li>
			<li><a href="login.php" title="">LogOut</a></li>
		</ul>
  </div> 
    <div id="logo">
    <h1><font color="#FFFFFF">Welcome <?php echo $_SESSION['name']; ?></font></h1>
		<h1><a href="#">patan pranic healing</a>	</h1>
        
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->
 <div id="main">
   <div id="top">  
	<div id="right">		  			
		  <h3>Events Type</h3>
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
		  <center>
		    <h2> Change Password</h2>
            <?php
		if(isset($_POST['update']))
		{
$str="select * from user where uemail='".$_POST['aemail']."' and upass='".$_POST['pass']."' and uid=".$_SESSION['id'];
//echo $str;

$rs=mysql_query($str);

if($array=mysql_fetch_array($rs))
{
	
	$rs1="update user set upass='".$_POST['apass']."' where uid=".$_SESSION['id'];
	$a=mysql_query($rs1);
	//echo $rs1;
	echo "<h2><font color='#00FF33'>your password is  changed successfully..</font>";
}
else
{
	echo "<h2><font color='#FF0000'>your old password is wrong</font></h2>";

}
}
	
?>
		    <p>
             
</p>
		  </center>
          
		 
                   <h2>&nbsp;</h2>
        <form action="" method="post" id="form1" enctype="multipart/form-data"  >
         
          <table>
                    <tr>
                        <td>
                          <label for="email">Email id:</label></td>
                        <td><input type="text" name="aemail" id="aemail" size="54" onblur="emailvd()" /></td>
                    </tr>
                    
                    
                   
                    <tr>
                        <td>
                          <label for="interests">Old password:</label></td>
                        <td>
                          <input type="password" name="pass" id="pass" size="24" ?></td>
                    </tr>
                    <tr>
                        <td>
                      <label for="etype"> New password:</label></td>

                            <td><input type="password" name="apass" id="apass" size="24"  /></td>
                       
                    </tr>
                    <tr>
                        <td>
                          <label for="interests">Conform password:</label></td>
                        <td>
                          <input type="password" name="cpass" id="cpass" size="24"   ?></td>
                    </tr>
                   
             <tr> 
               <td></td>      
               <td>  <input type="submit" name="update" id="update" value="Change"/></td>
            </tr>
          </table>
                
       
                  
                    
                   
            
                
              
		  </form>
                
				
            
<p class="date">&nbsp;</p>
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