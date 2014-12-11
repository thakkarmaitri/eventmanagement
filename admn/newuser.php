<?php
session_start();
if(!(isset($_SESSION['name'])) && !(isset($_SESSION['id'])))
{
	header("location:login.php");
}
include("conn.php");
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
                    <li><a href="update.php">Manage Events<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="eventreg.php" title="">Add event description</a></li>
                      </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="login.html">Manage Users<!--[if IE 7]><!--></a><!--<![endif]-->
                    
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
							$str="insert into user values(null,'".$_POST['uname']."',0,'".$_POST['ucity']."','".$_POST['ustate']."',0,0,'".$_POST['uocc']."','".$_POST['umonth']."-".$_POST['udate']."-".$_POST['uyear']."','".$_POST['u1']."','".$_POST['umob']."',0,0,0,0".")";
								echo $str;
								mysql_query($str);
								
							} 
?>             
    <div class="center_content">
      <div class="right_content">            
        
        <h2>Add  useer</h2>
        <form action="" method="post" enctype="multipart/form-data" >
         
          <table>
                    <tr>
                        <td>
                          <label for="email">Name:</label></td>
                        <td><input type="text" name="uname" id="uname" size="54" /></td>
                    </tr>
                    
                    
                   
                    <tr>
                        <td>
                          <label for="interests">City:</label></td>
                        <td>
                          <input type="text" name="ucity" id="ucity" size="24" />
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
                          <input type="text" name="rocc" id="rocc" size="24" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <label for="interests">Contact no:</label></td>
                        <td>
                          <input type="text" name="mobno" id="mobno" size="24" />
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
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Male</label>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Female</label>                      
                        </td>
                    </tr>
                 
                   
             <tr> 
             <td></td>      
          <td>  <input type="submit" name="sub" id="sub" value="Submit"/></td>
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

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     
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