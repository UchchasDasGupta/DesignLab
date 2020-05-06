<?php
session_start();

include ("includes/connection.php");

		$userid=$_POST["userid"];
		$password=$_POST["password"];
		
		$_SESSION["userid"] = $userid;
		$_SESSION["password"]= $password;
		
	$sql = "select userid, password from admin_reg where userid='$userid' && password='$password' ";
	
	
	$result = mysql_query($sql);
	
	/*while ($row = mysql_fetch_array($result))
	{
	$aid = $row["userid"];
	$psword = $row["password"];
	
		if($aid==$uid && $psword==$pword)
			{
				header("location:extra.php");
			}
		else
			{
				$message = "Invalid Username or Password!";
				//echo"Sorry, your credentials are not valid, Please try again.";
				//header("location:index.php");
				 //$msg = 'Wrong username or password';
				 //echo '<p class="error">Username password combination is wrong!</p>';
				//$error = "Your Login Name or Password is invalid";
			}
		}
		*/
		
		$count = mysql_num_rows($result);
		if($count>0)
				header("location:adminhome.php");
		else
			header("location:loginadmin.php?wrong_info");
				//echo"Sorry, your credentials are not valid, Please try again.";
				//header("location:index.php");
		?>