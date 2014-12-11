<?php
session_start();
if(!(isset($_SESSION['name'])) && !(isset($_SESSION['id'])))
{
	header("location:login.php");
}
include "connect_db.php";
$cdb=new connection();
$cdb->connect_dbs();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript">

function check()
{
	if(document.getElementById("male").checked == false && document.getElementById("female").checked == false )
	{
			document.getElementById("msg").innerHTML="Please select gender.";
			document.getElementById("msg").style.color="red";
			return false;
	}
	else
		return true;
}
function ucity_check()
{
	if(document.getElementById("ucity").value.length == 0)
	{
		document.getElementById("ucity_msg").innerHTML="Please enter  city name";
			document.getElementById("ucity_msg").style.color="red";
	}	
}
function uname_check()
{
	if(document.getElementById("uname").value.length == 0)
	{
		document.getElementById("uname_msg").innerHTML="Please enter user name";
			document.getElementById("uname_msg").style.color="red";
	}	
}
function uocc_check()
{
	if(document.getElementById("uocc").value.length == 0)
	{
		document.getElementById("uocc_msg").innerHTML="Please enter ocupation";
			document.getElementById("uocc_msg").style.color="red";
	}	
}
function ucontect_check()
{
	if(document.getElementById("mobno").value.length == 0)
	{
		document.getElementById("umob_msg").innerHTML="Please fill contact no";
			document.getElementById("umob_msg").style.color="red";
	}
	else if(document.getElementById("mobno").value.length!=10)
	{
		document.getElementById("umob_msg").innerHTML="contact no must be 10 digit";
			document.getElementById("umob_msg").style.color="red";
	}

	
}
function emailvd()
 {
	 if(document.getElementById("email").value.length == 0)
	{
		document.getElementById("uemail_msg").innerHTML="Please add email_id";
			document.getElementById("uemail_msg").style.color="red";
	}
	else{
	var x=document.forms["form1"]["email"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	    {
  			alert("Not a valid e-mail address");
  			return false;
  		}
	}
	
	
 }	
     </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<style type="text/css">
.deep
{
	background-color:#09F;
	height:40px;
	width:60px;
}
</style>
</head>
<body>
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>


<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $_SESSION['name']; ?>,   | <a href="login.php" class="">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="main.php">Admin Home</a></li>
                    <li><a href="update.php">Event<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                         <li><a href="eventreg.php" title="">Add event description</a></li>
                      </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="updateuser.php">User<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                       
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="login.html">Settings<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                       <li><a href="admnprofile.php" title="">Profile</a></li>
                        <li><a href="password.php" title="">Password</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                   
                    
                    <li><a href="contect.php">Contact</a></li>
                    </ul>
                    </div> 
                    
                    
                    
        <?php
							if(isset($_POST['sub']))
							{								
							
								$cdb->add_user();
								
								
							} 
?>             
    <div class="center_content">
      <div class="right_content">            
        
        <h2>Add  user</h2>
        <form action="" method="post" id="form1" enctype="multipart/form-data" onsubmit="return check()">
         
          <table>
                    <tr>
                        <td>
                          <label for="email">Name:</label></td>
                        <td><input type="text" name="uname" id="uname"   size="54"  onblur="uname_check()"/><label id="uname_msg"></label></td>
                    </tr>
                    
                    
                   
                    <tr>
                        <td>
                          <label for="interests">City:</label></td>
                        <td>
                          <input type="text" name="ucity" id="ucity" size="24" onblur="ucity_check()"/><label id="ucity_msg"></label>
                        </td>
                    </tr>
                     
                        
                    <tr>
                        <td>
                          <label for="interests">State:</label></td>
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
                        <td>
                          <label for="interests">Occupation:</label></td>
                        <td>
                          <input type="text" name="uocc" id="uocc" size="24"  onblur="uocc_check()"/><label id="uocc_msg"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <label for="interests">Contact no:</label></td>
                        <td>
                          <input type="text" name="mobno" id="mobno" size="24" onblur="ucontect_check()"/><label id="umob_msg"></label>
                        </td>
                    </tr>
                     <tr>
                        <td>
                          <label for="interests">Email id:</label></td>
                        <td>
                          <input type="text" name="email" id="email" size="24" onblur="emailvd()" /><label id="uemail_msg"></label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label for="interests"><strong>Birth Date</strong>:</label></td>
                      <td>
                        <select size="1" name="umonth" id="umonth">
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
                                   <select name="udate" id="udate" size="1">
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
                        <input type="text" name="uyear" id="uyear" size="24" value="year" />
								  
                               
                      </td>
                    </tr>
                    
                    
                     <tr>
                        <td><label for="color">Select type</label></td>
                        <td>
                            <input type="radio" name="type" id="male" value="m" /><label class="check_label">Male</label>
                            <input type="radio" name="type" id="female" value="f" /><label class="check_label">Female</label>  
                            <span id="msg"></span>                    
                        </td>
                    </tr>
                 
                   
             <tr> 
             <td></td>      
          <td>  <input type="submit" name="sub" class="deep" id="sub" value="Add"/></td>
            </tr>
          </table>
                
        </form>
      </div>
      <!-- end of right content-->
            
                    
  </div>   
    <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer"></div>

</div>		
</body>
</html>

	