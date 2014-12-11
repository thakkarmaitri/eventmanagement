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
<script type="text/javascript" language="javascript">
	function dd()
	{
		if(document.getElementById("rname").value=="")
		{
			alert("Please enter Name..!!");
			return false;
		}
		else if((document.getElementById("rstate").value==""))
		 {
		 
	
		 alert("Please select State..!!");
		 return false;
	
		 }
		 else if((document.getElementById("rstate").value==""))
		 {
		 
	
		 alert("Please select State..!!");
		 return false;
	
		 }
		 if(document.getElementById("rocc").value=="")
		{
			alert("Please enter Occupation..!!");
			return false;
		}
		else if((document.getElementById("radd").value==""))
		 {
		 	 alert("Please enter address..!!");
		 	 return false;
	
		 }
		 else if((document.getElementById("r1").value==""))
		 {
		 	 alert("Please select your gender..!!");
		 	 return false;
	
		 }
	}
	function fn()
 {
		if(document.getElementById("rname").value != "")
		{
			var el=document.getElementById('rname');
			var re=/^[A-z]+$/; 
			if(!re.test(el.value) ) 
			{ 
			    alert("please enter char only");  
				document.getElementById("rname").value="";
			}

		}
 }
 function pin()
 {
	 if (form1.rpin.value.length != 6 )
	 {
		 alert("Please Enter  number properly");
		 onsubmit=false;
	 }
}
 function email()
 {
		var x=document.forms["form1"]["remail"].value;
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
			<li><a href="home.php" title="">Home</a></li>
			<li><a href="reg.php" title="">Registration</a></li>
			<li><a href="login.php" title="">login</a></li>
			<li><a href="about.php" title="">About</a></li>
			<li><a href="contact.php" title="">Contact</a></li>
		</ul>
  </div> 
    <div id="logo">
		<h1><a href="#">Patan pranic healing</a>	</h1>
        
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->
 <div id="main">
   <div id="top">  
	<div id="right">		  			
		  <h3>Event Catagory</h3>
		  <div class="right_back">	
		    <div class="right_bottom"><ul>
            <li class="sub"><a href="yearly.php?id=1">Yearly Event</a></li>
					<li class="sub"><a href="#">Monthly Event</a></li>
					<li class="sub"><a href="#">Weekly Event</a></li>
					<li class="sub"><a href="#">Class Event</a></li>
					<li class="sub"><a href="#">Meditation Event</a></li>	</ul> </div>
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
		    <h2>Recover Your Password..</h2>
		    <p>
            <?php
if(isset($_POST['rsub'])) 
{
	$str="select * from user where uemail='".$_POST['remail']."' and useq=".$_POST['rsec']." and uans='".$_POST['rans']."' and flg=1";
	$rs=mysql_query($str);
	if($arr=mysql_fetch_array($rs))
	{
		echo "<font color='#99CC00' size='+2'>Your Password send on your email Id,Check your mail</font>";
	}
	else
	{
		echo "<font color='#FF0000' size='+2'>Your are not register user..!!</font>";
	}
}
?>
</p>
		  </center>
          
		  <form id="form1" method="post" action="" onsubmit="return dd()">
          <center>
          <table border="0">
                  <font color="#000000" size="+1" face="Times New Roman, Times, serif">
                  
                  
                  <tr>
                   <td> Email id:</td>
                   <td> <input name="remail" type="text" id="remail" onblur="email()" size="35"/></td>
                  </tr>
                  
                  <tr>
                  <td>Security Question:</td>
                  <td>
                    <select name="rsec" id="rsec">
                      <option value="0">what is your childhood name?</option>
                      <option value="1">Who is your favourite teacher?</option>
                    </select>
                  </td>
                  </tr>
                  <tr> <td>Answer</td><td><input type="text" name="rans" id="rans" onblur="email()"/></td></tr>
                  
                  </font>
              </table>
            
                  <p>
                  
                  <input type="submit" name="rsub" id="rsub" />
                  
                  
            </p>
                  <p>&nbsp;</p>
            </center>
              
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
<div id="footer">
<p>&nbsp;</p>
</div>
</div>
<!-- footer ends-->
</body>
</html>