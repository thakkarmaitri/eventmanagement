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
  function mob()
 {
if (document.getElementById("amob").value.length < 10 )
	 {
		 alert("Please Enter contact number properly");
		 onsubmit=false;
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
    
    <div class="right_header">Welcome <?php echo $_SESSION['name']; ?>,  | <a href="login.php" class="">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="main.php">Admin Home</a></li>
                    <li><a href="update.php"> Event<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                         <li><a href="eventreg.php" title="">Add event description</a></li>
                        
                      </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="updateuser.php">User<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        
                            
                    </li>
                    <li><a href="login.html">Settings<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul><li><a href="admnprofile.php" title="">Profile</a></li>
                        <li><a href="password.php" title="">Password</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                   
                    
                    <li><a href="contect.php">Contact</a></li>
                    </ul>
                    </div> 
                    <?php
$rs=$cdb->get_rs("adminprofile");

if($array=mysql_fetch_array($rs))
{
	if(isset($_POST['update']))
	{								
				$cdb->update_admin();
	} 
}
?>
                    
                    
       
    <div class="center_content">
      <div class="right_content">            
        
        <h2>Change Profile</h2>
        <form action="" method="post" id="form1" enctype="multipart/form-data" >
         
          <table>
                    <tr>
                        <td>
                          <label for="email">Name:</label></td>
                        <td><input type="text" name="aname" id="aname" size="54"  value="<?php echo $array[1]; ?>" /></td>
                    </tr>
                    
                    
                   
                    <tr>
                        <td>
                          <label for="interests">City:</label></td>
                        <td>
                          <input type="text" name="acity" id="acity" size="24"  value="<?php echo $array[2]; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                      <label for="etype"> Adress:</label></td>

                            <td><textarea name="aadress" id="aadress" rows="3" cols="36"> <?php echo $array[3]; ?></textarea></td>
                       
                    </tr>
                    <tr>
                        <td>
                          <label for="interests">Contact no:</label></td>
                        <td>
                          <input type="text" name="amob" id="amob" size="24" onblur="mob()" value="<?php echo $array[4]; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <label for="interests">Email:</label></td>
                        <td>
                          <input type="text" name="aemail" id="aemail" size="24"  value="<?php echo $array[5]; ?>"/>
                        </td>
                    </tr>
                   
             <tr> 
               <td></td>      
               <td>  <input type="submit" name="update" id="update" value="Upadte"/></td>
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

	 