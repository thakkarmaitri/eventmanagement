<?php
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
		<h1><a href="#">event management</a>	</h1>
        
    </div>   
</div>

<!-- header ends -->
<!-- content begins -->
 <div id="main">
   <div id="top">  
	<div id="right">		  			
		  
		  <div class="right_back">	
		    <div class="right_bottom"> </div>
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
		  <center><h2>Registration</h2>
		    <p>
            <?php
if(isset($_POST['rsub'])) 
{
	$cd->user_reg();	
}
?>
</p>
		  </center>
          
		  <form id="form1" method="post" action="" onsubmit="return dd()">
          <center>
          <table border="0">
                  <font color="#000000" size="+1" face="Times New Roman, Times, serif">
                   <tr>
                  <td>Unique Code:</td>         
                    
                   <td><input type="text" name="ucode" id="ucode" maxlength="6" onblur="pin()"/></td>
                   </tr>
                  
                  
                  <tr>
                   <td> Email id:</td>
                   <td> <input type="text" name="remail" id="remail" onblur="email()"/></td>
                  </tr>
                  <tr><td>Adress:</td>
                  <td>
                    
                    <textarea name="radd" id="radd" cols="45" rows="3"></textarea></td>
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
                  <tr>	
                  <td>Password:</td>
                  <td> <input type="password" name="rpass" id="rpass" onkeydown="pass()"/></td>
                  </tr>
                  <tr>
                  <td>Verify password:</td>
                  <td>
                    <input type="password" name="rvpass" id="rvpass" />
                  </td>
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

</div>
<!-- footer ends-->
</body>
</html>