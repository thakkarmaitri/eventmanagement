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
		function admin_login($email,$pass)
		{
			$s="select email,pass,aname,aid from admin_info where email='".$email."';";
			$rs=mysql_query($s);
			if($rs)
			{
				if($ar=mysql_fetch_array($rs))
				{
					if($pass == $ar["pass"])
					{
						$_SESSION['name']=$ar[2];
						$_SESSION['id']=$ar[3];
						echo'<meta http-equiv="refresh" content="0; URL=main.php">';
					}
					else
					{
						echo "<center><font color='#FF0000'><h4>Username or password donot match ..!!!</h4></font></center>";		
					}
				}
				else
				{
					echo "<center><font color='#FF0000'><h4>You are not register user..!!!</h4></font></center>";	
				}
			}
		}
		function get_total_events($table,$type)
		{
			if($table == "event"){
				$str="select * from event where etype=".$type;	}
			else if($table == "user"){
				$str="select * from user where flg=".$type;	}
			$this->result=mysql_query($str,$this->con);
			$this->total=mysql_num_rows($this->result);
			return $this->total;
		}
		
		function add_event($ename,$etype,$eadress,$emobno,$ryear,$rmonth,$rdate,$etime,$eseat)
		{
			$str="insert into event values(null,'".$ename."',".$etype.",'".$eadress."',".$emobno.",'".$ryear."-".$rmonth."-".$rdate."','".$etime."',".$eseat.",0)";
				//echo $str;
			$this->result=mysql_query($str);	
			
			if($this->result)
				echo "Event added successfully";
			else
				echo "cannot add event".mysql_error($this->result);
		}
		function add_user()
		{
			$str="insert into user values(null,'".$_POST['uname']."',0,'".$_POST['ucity']."',0,'".$_POST['ustate']."','".$_POST['uocc']."','".$_POST['uyear']."-".$_POST['umonth']."-".$_POST['udate']."','".$_POST['u1']."','".$_POST['mobno']."','".$_POST['email']."',0,0,0,0,0".")";
			$this->result=mysql_query($str);
			if($this->result)
				echo "User added successfully";
			else
				echo "cannot add user".mysql_error($this->result);	
		}
		function edit_user()
		{
			$str="update user set uname='".$_POST['uname']."',ucity='".$_POST['ucity']."',ustate='".$_POST['ustate']."',uocc='".$_POST['rocc']."',ubdate='".$_POST['umonth']."-".$_POST['udate']."-".$_POST['uyear']."',gender=".$_POST['type'].",mobno=".$_POST['mobno'].",uctype=".$_POST['utype']." where uid=".$_REQUEST['id'].";";
			
			$this->result=mysql_query($str);
			if($this->result)
				echo "User updated successfully";	
			else
				die(mysql_error($this->result));		
		}
		function update_admin()
		{
			$st="update admin_info set aname='".$_POST['aname']."',acity='".$_POST['acity']."',aadress='".$_POST['aadress']."',amobno='".$_POST['amob']."',email='".$_POST['aemail']."'  where aname='".$_SESSION['name']."';";
									
								$this->result=mysql_query($st);
								if($this->result)
				echo "Admin updated successfully";	
			else
				die(mysql_error($this->result));
		}
		function add_eventregs()
		{
			$file=$_FILES['file'];
			$name=$file['name'];
			$tmp=$file['tmp_name'];
			$str="insert into edes values(null,'".$_POST['etype']."','".$name."','".$_POST['eadress']."')";
			mysql_query($str);
			move_uploaded_file($tmp,"img1/".$name);	
			
			echo "Event registeration done successfully";
		}
		
		function get_rs($qr)
		{
			if($qr == "update")
				$str="select * from event";
			else if($qr== "edit" )
				$str="select * from event where eid=".$_REQUEST['id'];
			else if($qr == "del")
				$str="delete from event where eid=".$_REQUEST['id'];	
			else if($qr == "user")
				$str="select * from user";
			else if($qr=="edituser" or $qr=="viewuser")
				$str="select * from user where uid=".$_REQUEST['id'];
			else if($qr == "state")
				$str="select * from state";
			else if($qr == "deluser")
				$str="delete from user where uid=".$_REQUEST['id'];
			else if($qr=="adminprofile")
				$str="select * from admin_info where aid=".$_SESSION['id'];
			$this->rs=mysql_query($str);	
			return $this->rs;
		}
	}
?>