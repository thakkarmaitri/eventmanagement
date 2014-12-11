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
<?php
if(isset($_POST['rsub'])) 
{
	$link=mysql_connect("localhost","root","");
	mysql_select_db("register",$link);
	
	 $str="insert into reg values(null,'".$_POST['rname']."','".$_POST['radd']."','".$_POST['rcity']."',".$_POST['rpin'].",'".$_POST['rstate']."','".$_POST['rocc']."','".$_POST['ryear']."-".$_POST['rmonth']."-".
	 $_POST['rdate']."','".$_POST['r1']."','".$_POST['rmob']."','".$_POST['remail']."','".$_POST['rsec']."','".$_POST['rpass']."')";
	echo $str;
	mysql_query($str);
	
	}
	?>
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
			<h3>Nunc pellentesque</h3>
			<div class="right_back">	
		    <div class="right_bottom"> </div>
		  </div>	
			<h3>Company News</h3>
			<div class="right_back">	
		    <div class="right_bottom">
			<ul>
			  <li>
				  <h4>June 2, 2008</h4>
				  <p><a href="#"> Duis tempor posuere diam. Suspendisse vel tellus quis nunc malesuada porta. &#8230;</a></p></li>
				   <li>
				  <h4>June 12, 2008</h4>
				  <p><a href="#">Tempus Duis tempor posuere diam. Suspendisse vel tellus quis nunc malesuada porta. &#8230;</a></p></li>
			  </ul>
		  </div>
		  </div>
			<h3>Calendar</h3>
			<div class="right_back">	
		    <div class="right_bottom">
				<div id="calendar">
					<table id="calendar2" summary="Calendar">
						<caption>
						January 2008
						</caption>
						<thead>
							<tr>
								<th abbr="Monday" scope="col" title="Monday">M</th>
								<th abbr="Tuesday" scope="col" title="Tuesday">T</th>
								<th abbr="Wednesday" scope="col" title="Wednesday">W</th>
								<th abbr="Thursday" scope="col" title="Thursday">T</th>
								<th abbr="Friday" scope="col" title="Friday">F</th>
								<th abbr="Saturday" scope="col" title="Saturday">S</th>
								<th abbr="Sunday" scope="col" title="Sunday">S</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td abbr="Des" colspan="3" id="prev"><a href="#">&laquo; Des</a></td>
								<td class="pad">&nbsp;</td>
								<td abbr="Feb" colspan="3" id="next" class="pad"><a href="#">Feb &raquo;</a></td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td colspan="2" class="pad">&nbsp;</td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
							</tr>
							<tr>
								<td>6</td>
								<td>7</td>
								<td>8</td>
								<td>9</td>
								<td>10</td>
								<td>11</td>
								<td>12</td>
							</tr>
							<tr>
								<td>13</td>
								<td>14</td>
								<td>15</td>
								<td>16</td>
								<td>17</td>
								<td>18</td>
								<td>19</td>
							</tr>
							<tr>
								<td>20</td>
								<td id="now">21</td>
								<td>22</td>
								<td>23</td>
								<td>24</td>
								<td>25</td>
								<td>26</td>
							</tr>
							<tr>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
								<td>31</td>
								<td class="pad" colspan="2">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
		  </div>
		 </div>
	 
	</div>
	<div id="left">	
		  <h4><a href="#">Registration</a></h4>
		  <p>&nbsp;</p>
          <center>
	      <form id="form1" method="post" action="">
	        <table width="311" border="0" align="center">
	          <tr>
	            <td width="280">Name:</td>
	            <td width="229"><label for="txtname"></label>
                <input type="text" name="txtname" id="txtname" /></td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
	          <tr>
	            <td>&nbsp;</td>
	            <td>&nbsp;</td>
              </tr>
            </table>
          </form>
          </center>
	      <p>&nbsp;</p>
	</div>
	<div style="clear: both;"></div>
<!--content ends -->
<!--footer begins -->


</div>
<div id="bottom"></div>
</div>
</div>
<div id="footer">
<p>Copyright &copy; 2009. Designed by <a href="http://www.metamorphozis.com/" title="Free Web Templates">Free Web Templates</a></p>
<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
	</div>
</div>
<!-- footer ends-->
</body>
</html>