<?php
	class connection
	{
		var $host="localhost";

		var $uname="root";
		var $pass="";	
		var $con="";
		var $rs="";
		var $result="";
		var $total=0;
		function connect_dbs()
		{
			$conn=mysql_connect($this->host,$this->uname,$this->pass);
			
			if($conn)
			{
				$this->con=$conn;
				$rss=mysql_select_db("register",$this->con);
				
				if($rss)
				{
					$this->rs=$rss;
					return $this->con;	
				}
				else
					die("Database selection failed".mysql_error($rss));	
			}
			else
				die("Host connection failed".mysql_error($conn));
		}

	function user_login($eid,$pass)
	{
		$str="select uid,uname,uemail from user where uemail='".$_POST['eid']."' and upass='".$_POST['pass']."' and flg=1";
		$rs=mysql_query($str);
		if($array=mysql_fetch_array($rs))
		{
			echo'<meta http-equiv="refresh" content="0; URL=welcome.php">';
			$_SESSION['id']=$array[0];
			$_SESSION['name']=$array[1];
		}
		else
		{
			echo "<center><font color='#FF0000'><h4>You are not register user..!!!</h4></font></center>";
		}	
	}
	function user_reg()
	{
		$str="select uid,uemail from user where uemail='".$_POST['remail']."' and uid=".$_POST['ucode'];
		$rs=mysql_query($str);
		if($arr=mysql_fetch_array($rs))
		{
			$s="update user set uemail='".$_POST['remail']."',uadd='".$_post['radd']."',useq='".$_POST['rsec']."',uans='".$_POST['rans']."',upass='".$_POST['rpass']."',flg=1 where uid=".$_POST['ucode'];
			mysql_query($s);
			$this->result=mysql_query($s);
			if($this->result)
				echo "User registration done successfully";	
			else
				die(mysql_error($this->result));		
		
		
		}
	}
	function get_rs($tb)
	{
		if($tb == "event"){
			$str="select * from event where flg=0";	}
		else if($tb == "curevent")
			$str="select * from event where eid=".$_REQUEST['id'];
		else if($tb == "comeevent")
			$str="select uid from comeevent where uid=".$_SESSION['id'];
		else if($tb == "event_eseat")	
			$str="select eseat from event where eid=".$_REQUEST['id'];
		else if($tb == "comeevent2")
			$str="select * from comeevent where eid=".$_REQUEST['id'];
		else if($tb == "comeevent3")	
			$str="insert into comeevent values(null,".$_SESSION['id'].",".$_REQUEST['id'].")";
		$this->rs=mysql_query($str);
		return $this->rs;
	}
	}
?>