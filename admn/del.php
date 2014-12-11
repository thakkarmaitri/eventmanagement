<?php
	include "connect_db.php";
	$cdb=new connection();
	$cdb->connect_dbs();
	$cdb->get_rs("del");
	header("location:update.php");
?>