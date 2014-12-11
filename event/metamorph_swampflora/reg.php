<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
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
			<li><a href="../home.html" title="">Home</a></li>
			<li><a href="../reg.php" title="">Registration</a></li>
			<li><a href="#" title="">login</a></li>
			<li><a href="#" title="">About</a></li>
			<li><a href="#" title="">Contact</a></li>
		</ul>
  </div> 
    <div id="logo">
		<h1><a href="#">metamorph_swampflora</a></h1>
		<h2><a href="http://www.metamorphozis.com/" id="metamorph">Design by Metamorphosis Design</a></h2>
	</div>   
</div>

<!-- header ends -->
<!-- content begins -->
 <div id="main">
   <div id="top">  
	<div id="right">		  			
			<h3>Nunc pellentesque</h3>
			<div class="right_back">	
		    <div class="right_bottom">
			<ul>
					<li class="sub"><a href="#">Vivamus id arcu</a></li>
					<li class="sub"><a href="#">Duis congue ultricies</a></li>
					<li class="sub"><a href="#">Purus in mollis purus</a></li>
					<li class="sub"><a href="#">Orci nonummy fringilla</a></li>
					<li class="sub"><a href="#">Pellentesque at lorem</a></li>			
	        </ul>
		    </div>
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
		  <h4><a href="#">METAMORPHOSIS DESIGN</a></h4>

          <form id="form1" method="post" action="">
                  <font color="#000000" size="+1" face="Times New Roman, Times, serif">
                  <p>Name: </p>
                  <p>
                    <input type="text" name="rname" id="rname" border="2"  />
                  </p>
                  <p>Adress:</p>
                  <p>
                    <label for="radd"></label>
                    <textarea name="radd" id="radd" cols="45" rows="3"></textarea>
                  </p>
                  <p>City: </p>
                  <p>
                    <input type="text" name="rcity" id="rcity" />
                  </p>
                  <p>pin:</p>
                  <p>
                    <label for="rpin"></label>
                    <input type="text" name="rpin" id="rpin" />
                  </p>
                  <p>state:</p>
                  <p>
                    <label for="rstate"></label>
                    <select name="rstate" id="rstate">
                  
                          	<option>Select</option>
                         	<option>  Gujarat</option>
                       	    <option>Punjab</option>
                       	    <option>MadhyaPradesh</option>
                       	    <option>ArunachalPradesh</option>
                       	    <option>U.P.</option>
                       	    <option>Karnataka</option>
                       		<option>Maharastra</option>
                       		<option>Tamilnadu</option>
                        	<option>Bihar</option>
                        	<option>Aasam</option>
                       	    <option> Goa</option>
                            <option> Hariyana</option>  
                            <option>Zarkhand</option>
                            <option> Keral</option>
                            <option>Manipur</option>
                            <option>Megalaya</option>
        </select>
                    </select>
                  </p>
                  <p>Occupatipn:</p>
                  <p>
                    <input type="text" name="rocc" id="rocc" />
                  </p>
                  <p>Birth date:</p>
                  </font>
                  <p>
                    <label for="rmonth"></label>
                    <label for="rdate"></label>
                    <label for="ryear"></label>
                    <select name="ryear" id="ryear">
                      <option>Year</option>
                      <option>2013</option>
                      <option>2012</option>
                    </select>
                    <select name="rmonth" id="rmonth">
                      <option>Month</option>
                      <option value="01">Jan</option>
                      <option value="02">Feb</option>
                      <option value="03">Mar</option>
                      <option value="04">Apr</option>
                      <option value="05">May</option>
                      <option value="06">Jun</option>
                      <option value="07">Jul</option>
                      <option value="08">Aug</option>
                      <option value="9">Sep</option>
                      <option value="10">Oct</option>
                      <option value="11">Nov</option>
                      <option value="12">Dec</option>
                    </select>
                    <select name="rdate" id="rdate">
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
                  </p>
                  <font color="#000000" size="+1" face="Times New Roman, Times, serif">
                  <p>&nbsp;</p>
                  <p>
                    <label for="rocc"></label>
                    <input type="radio" name="r1" id="r1" value="0" />
                    Male
                      <input type="radio" name="r1" id="r1" value="1" />
                    Female
                    <label for="rf"></label>
                       <label for="rm"></label>
                  </p>
                  <p>Mobile no:</p>
                  <p>
                    <input type="text" name="rmob" id="rmob" />
                  </p>
                  <p>
                    <label for="rmob"></label>
                    Email id:</p>
                  <p>
                    <label for="remail"></label>
                    <input type="text" name="remail" id="remail" />
                  </p>
                  <p>Security Question:</p>
                  <p>
                    <select name="rsec" id="rsec">
                      <option value="0">what is your childhood name?</option>
                      <option value="1">Who is your favourite teacher?</option>
                    </select>
                  </p>
                  <p>
                    <label for="rsec"></label>
                    Password:</p>
                  <p>
                    <input type="password" name="rpass" id="rpass" />
                  </p>
                  <p>Verify password:</p>
                  <p>
                    <input type="password" name="rvpass" id="rvpass" />
                  </p>
                  <label for="rvpass"></label>
                  <input type="submit" name="rsub" id="rsub" />
                  <label for="rpass"></label>
                  </font>
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
<p>Copyright &copy; 2009. Designed by <a href="http://www.metamorphozis.com/" title="Free Web Templates">Free Web Templates</a></p>
<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
	</div>
</div>
<!-- footer ends-->
</body>
</html>