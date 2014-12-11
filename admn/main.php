<?php
session_start();
if(!(isset($_SESSION['name'])) && !(isset($_SESSION['id'])))
{
	header("location:login.php");
}

//include("conn.php");
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
                    <li><a class="current" href="main.php">Admin Home</a></li>
                    <li><a href="update.php"> Event<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="new.php" title="">Add new event</a></li>
                        
                        
                        <li><a href="eventreg.php" title="">Add event description</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="updateuser.php"> User<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="">Settings<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="admnprofile.php?id=<?php echo $array[0]; ?>" title="">Profile</a></li>
                        <li><a href="password.php" title="">Password</a></li>
                        
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li></li>
                    <li></li>
                    <li><a href="contect.php">Contact</a></li>
                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
      <span class="sidebarmenu"><a class="menuitem submenuheader" href="">Calender</a></span>
      <?php include("cald.php"); ?>
      </div>
      
    
    <div class="right_content">  
              
        
    <h2>All Information About Total Event</h2>
    <div class="form">
      
      <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th width="312" class="rounded-company" scope="col">Event Name</th>
            <th width="301" class="rounded" scope="col">Total Entire Event</th>
            
        </tr>
    </thead>
        <tfoot>
    	
    </tfoot>
    <tbody>
    	<tr>
        	<td>Yearly Event</td>
            <td>
             <?php
				$a=$cdb->get_total_events("event",1);
				echo $a; 
			?>
            </td>
           
        </tr>
        
    	<tr>
        	<td>Montly Event</td>
            <td>
            	
				<?php
				$a=$cdb->get_total_events("event",2);
				echo $a; 
			?>
            </td>
            
        </tr> 
        
        	<td>Weekly Event</td>
            <td><?php
				$a=$cdb->get_total_events("event",3);
				echo $a; 
			?></td>
            
        </tr>
        
    	<tr>
        	<td>Meditation</td>
            <td>
            	<?php
				$a=$cdb->get_total_events("event",4);
				echo $a; 
			?>
            </td>
           
        </tr>  
    	<tr>
        	<td>Classes</td>
            <td>
            	<?php
				$a=$cdb->get_total_events("event",5);
				echo $a; 
			?>
            </td>
           
        </tr>
        
    	<tr>
        	<td>&nbsp;&nbsp;Free Healing Camp</td>
            <td>
            	<?php
				$a=$cdb->get_total_events("event",6);
				echo $a; 
			?>
            </td>
            
        </tr>    
        
    </tbody>
</table>
<br/>
 <h2>Total Register User in Patan Healing center</h2>
<?php
	$a=$cdb->get_total_events("user",1);
	echo "<font color='#0099FF' size='+4'>".$a."</font>";
?>
     </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer"></div>

</div>
</body>
</html>