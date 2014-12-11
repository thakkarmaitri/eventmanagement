<?php
session_start();
include("connect_server.php");
$cdb=new connection();
$cdb->connect_dbs();

$rss=$cdb->get_rs("comeevent");
if($ar1=mysql_fetch_array($rss))
{
	echo"<meta http-equiv='refresh' content='0; URL=curevent.php?id=".$_REQUEST['id']."&sid=al'>";
}
else
{

$rs=$cdb->get_rs("event_eseat");
if($arr=mysql_fetch_array($rs))
{
}
echo $arr[0];
$s1=$cdb->get_rs("comeevent2");

$rs1=mysql_query($s1);
$a=mysql_num_rows($rs1);
echo $a;
if($a<$arr[0])
{
$cdb->get_rs("comeevent3");
mysql_query($str);
//header("location:curevent.php?id=".$_REQUEST['id']."&sid=suc");
echo"<meta http-equiv='refresh' content='0; URL=curevent.php?id=".$_REQUEST['id']."&sid=suc'>";
}
else
{
	//header("location:curevent.php?id=".$_REQUEST['id']."&sid=fail");
	echo"<meta http-equiv='refresh' content='0; URL=curevent.php?id=".$_REQUEST['id']."&sid=fail'>";
}
}
?>