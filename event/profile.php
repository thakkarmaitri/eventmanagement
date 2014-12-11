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
		if(document.getElementById("uname").value != "")
		{
			var el=document.getElementById('uname');
			var re=/^[A-z]+$/; 
			if(!re.test(el.value) ) 
			{ 
			    alert("please enter char only");  
				document.getElementById("uname").value="";
			}

		}
 }
 function pin()
 {
	 if (form1.upin.value.length != 6 )
	 {
		 alert("Please Enter  pin number properly");
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
			<li><a href="welcome.php" title="">Home</a></li>
			<li></li>
			<li></li>
			<li></li>
			<li><a href="profile.php" title="">Profile</a></li>
            <li><a href="pass.php" title="">Setting</a></li>
			<li><a href="contect.php" title="">contect us</a></li>
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
		  <h3>Event Catagory</h3>
		  <div class="right_back">	
		    <div class="right_bottom"><ul>
					<li class="sub"><a href="yearly.php">Yearly Event</a></li>
					<li class="sub"><a href="#">Monthly Event</a></li>
					<li class="sub"><a href="#">Weekly Event</a></li>
					<li class="sub"><a href="#">Class Event</a></li>
					<li class="sub"><a href="#">Meditation Event</a></li>			
	        </ul> </div>
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
		  <center><h2>Change Profile</h2>
		    <p>
             <?php
$str="select * from user where uid=".$_SESSION['id'];
$rs=mysql_query($str);
if($array=mysql_fetch_array($rs))
{
}
?>

  <?php
	if(isset($_POST['update']))
	{								
							$str="update user set uname='".$_POST['uname']."',uadd='".$_POST['uadd']."',ucity='".$_POST['ucity']."',upin='".$_POST['upin']."',ustate='".$_POST['ustate']."',uocc='".$_POST['uocc']."',ubdate='".$_POST['umonth']."-".$_POST['udate']."-".$_POST['uyear']."',gender='".$_POST['u1']."',mobno='".$_POST['umob']."',email='".$_POST['uemail']."',useq='".$_POST['useq']."',uans='".$_POST['uans']." where uid=".$_REQUEST['id'];
								echo $str;
								mysql_query($str);
								
							} 
?>
</p>
		  </center>
          
		  <form id="form1" method="post" action="" onsubmit="return dd()">
          <center>
          <table border="0">
                  <font color="#000000" size="+1" face="Times New Roman, Times, serif">
                   <tr>
                  <td>Name:</td>
                  
                    
                   <td><input type="text" name="uname" id="uname"  value="<?php  echo $array[1]; ?>" onblur="fn()"/></td>
                   </tr>
                   <tr><td>Adress:</td>
                  <td>
                    
                    <textarea name="uadd" id="uadd" cols="45" rows="3"><?php  echo $array[2]; ?></textarea></td>
                  </tr>
                   <tr>
                  <td>State:</td>
                  <td>
                  <select size="1" name="ustate" id="ustate">
                           <option>Select</option>
		<?php
			$str="select * from state";
			$rs=mysql_query($str);
			while($arr=mysql_fetch_array($rs))
			{
		?>						    
								    <option><?php echo $arr[1]; ?></option>
                                    <?php } ?>
				        </select>
                    
                  </td>
                   </tr>
                   <tr>
                  <td>City:</td>
                  
                    
                   <td>
                   <select size="1" name="rmonth" id="rmonth">
                          <option>City</option>
                          <option>Patan</option>
								    
				        </select>
                   
                   
                   
                  </td>
                   </tr>
                    <tr>
                  <td>Pin:</td>
                  
                    
                   <td><input type="text" name="upin" id="upin"   value="<?php  echo $array[4]; ?>" onblur="pin()"/></td>
                   </tr>
                   
                    <tr>
                  <td>Occupation:</td>
                  
                    
                   <td><input type="text" name="uocc" id="uocc" maxlength="6" onblur="pin()" value="<?php  echo $array[6]; ?>"/></td>
                   </tr>
                    <tr>
                  <td>Birth Date:</td>
                  
                    
               
                      <td>
                          <select size="1" name="rmonth" id="rmonth">
                          <option>Month</option>
								    <option value="01">Jan</option>
								    <option value="02">Feb</option>
								    <option value="03">Mar</option>
								    <option value="04">Apr</option>
								    <option value="05">May</option>
								    <option value="06">Jun</option>
								    <option value="07">Jul</option>
								    <option value="08">Aug</option>
								    <option value="09">Sep</option>
								    <option value="10">Oct</option>
								    <option value="11">Nov</option>
								    <option value="12">Dec</option>
				        </select>
                                   <select name="rdate" id="rdate" size="1">
							        <option>Day</option>
							        <option>1</option>
							        <option>2</option>
							        <option>3</option>
							        <option>4</option>
							        <option>5</option>
							        <option>6</option>
							        <option>7</option>
							        <option>8</option>
							        <option>9</option>
							        <option>10</option>
							        <option>11</option>
							        <option>12</option>
							        <option>13</option>
							        <option>14</option>
							        <option>15</option>
							        <option>16</option>
							        <option>17</option>
							        <option>18</option>
							        <option>19</option>
							        <option>20</option>
							        <option>21</option>
							        <option>22</option>
							        <option>23</option>
							        <option>24</option>
							        <option>25</option>
							        <option>26</option>
							        <option>27</option>
							        <option>28</option>
							        <option>29</option>
							        <option>30</option>
							        <option>31</option>
			            </select>
                        <input type="text" name="ryear" id="ryear" size="10" value="year" />
								  
                               
                      </td>
                   </tr>
                    <tr>
                  <td>Gender:</td>
                  
                    
                   <td><input type="text" name="ucode" id="ucode" maxlength="6" onblur="pin()" value="<?php  echo $array[8]; ?>"/></td>
                   </tr>
                    <tr>
                  <td>Mobile no:</td>
                  
                    
                   <td><input type="text" name="umob" id="umob" maxlength="6" onblur="pin()" value="<?php  echo $array[9]; ?>"/></td>
                   </tr>
                  <tr>
                   <td> Email id:</td>
                   <td> <input type="text" name="uemail" id="uemail" onblur="email()" value="<?php  echo $array[10]; ?>"/></td>
                  </tr>
                 
                  <tr>
                  <td>Security Question:</td>
                  <td>
                    <select name="useq" id="useq">
                      <option value="0">what is your childhood name?</option>
                      <option value="1">Who is your favourite teacher?</option>
                    </select>
                  </td>
                  </tr>
                  <tr> <td>Answer</td><td><input type="text" name="uans" id="uans" onblur="email()" value="<?php  echo $array[12]; ?>"/></td></tr>
                  
                  </font>
              </table>
            
                  <p>
                  
                  <input name="rsub" type="submit" id="rsub" value="Change" />
                  
                  
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
<div id="footer"></div>
</div>
<!-- footer ends-->
</body>
</html>