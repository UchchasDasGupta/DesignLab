<?php
include ("includes/connection.php");

	$contact = $_POST['contact'];

	$query = mysql_query("SELECT *  FROM customer_details where contact='$contact'");
	
	
	if(mysql_num_rows($query)==0){
		header("location:deleteuser.php?wrong_info");
	}
	else{
		mysql_query("DELETE FROM customer_details where contact = '$contact'");
		header("location:regviewuser.php");
	}
?>
