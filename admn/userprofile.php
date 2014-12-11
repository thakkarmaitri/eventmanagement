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
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $_SESSION['name']; ?>,  | <a href="login.php" class="">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a href="main.php">Admin Home</a></li>
                    <li><a href="update.php">Events<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                         <li><a href="eventreg.php" title="">Add event description</a></li>
                       
                      </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a class="current" href="updateuser.php"> User<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
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
                    
                    
                    
                    
    <div class="center_content">
      <div class="right_content">            
        
        <h2>User Profile</h2>
        
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit"  bordercolor="#990099" border="+2">
     <?php
$rs=$cdb->get_rs("viewuser");
if($array=mysql_fetch_array($rs))
{
}
?>

  
 <?php
					
						if($array[8]=='1')
						{
							$gender='female';
						}
						if($array[8]=='0')
						{
							$gender='male';
						}
						if($array[13]=='0')
						{
							$type='Basic';
						}
						if($array[13]=='1')
						{
							$type='Advance';
						}
						if($array[13]=='2')
						{
							$type='Arhatic-1';
						}
						if($array[3]=='0')
						{
							$type='Crystel';
						}
						
					
					?>		  
    <tbody>
    	<tr>
        <td width="174">Name:</td>
        	<td width="435"><?php echo $array[1]; ?></td>
            </tr>
            <tr>
            <td>City:</td>
            <td><?php echo $array[3]; ?></td>
    		</tr>
            <tr>
                 
                        <td>
                          <label for="interests">State:</label></td>
                        <td>
                         <?php echo $array[5]; ?>
                           
                        </td>
                    
        </tr>
         <tr>
                        <td>
                          <label for="interests">Occupation:</label></td>
                        <td>
                        <?php echo $array[6]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <label for="interests">Email:</label></td>
                        <td>
                          <?php echo $array[10]; ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label for="interests"><strong>Birth Date</strong>:</label></td>
                      <td>
                        
                       <?php echo $array[7]; ?>
                               
                      </td>
                    </tr>
                    
                    
                     <tr>
                        <td><label for="color">Gender:</label></td>
                        <td>
                            <?php echo $gender; ?>
                        </td>
                    </tr>
                 <tr>
                 <td>
                  <label> Current User Type:</label></td>
                   <td>     
                         <?php echo type; ?>
                 </td></tr>
                   
        
    	
        
    	
        	
         
        
    </tbody>
</table>
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