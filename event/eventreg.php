
<?php
include "conn.php";
session_start();
?>
<?php

	$s="select rname,city,mno,email from reg where email='".$_POST['email']."' and rname='".$_POST['name']."'";
	$rs=mysql_query($s);
	if($ar=mysql_fetch_array($rs))
	{
			echo'<meta http-equiv="refresh" content="0; URL=user.php">';
			$_SESSION['name']=$ar[1];
			$_SESSION['id']=$ar[3];
	}
		
$str="insert into event values(null,'".$_POST['ename']."','".$_POST['etype']."','".$_POST['eadress']."',".$_POST['emobno'].",
 	$str="select from user where uid=".$_REQUEST['id'];
	mysql_query($str);
	header("location:updateuser.php");
	
?>