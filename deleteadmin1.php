<?php
include ("includes/connection.php");

	$userid = $_POST['userid'];
	
	$query = mysql_query("SELECT *  FROM admin_reg where userid='$userid'");
	
	
	if(mysql_num_rows($query)==0){
		header("location:deleteadmin.php?wrong_info");
	}
	else{
		mysql_query("DELETE FROM admin_reg where userid = '$userid'");
		header("location:regviewadmin.php");
	}
	
?>
