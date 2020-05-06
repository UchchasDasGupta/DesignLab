<?php

$con = mysql_connect("localhost","root","");

$db = mysql_select_db("jewellery");

	$name = $_POST["name"];
	$email = $_POST["email"];
	$contact = $_POST["contact"];
	$address = $_POST["address"];

	
	
	
	$query = mysql_query("SELECT * FROM customer_details where contact='$contact'");
	
	if(mysql_num_rows($query)>0) {
		header("location:reg.php?wrong_info");
		//header("Location:reg.php?message=Contact already exists!");
	}else{

		mysql_query("insert into customer_details values('$name','$email','$contact','$address')");
		header("location:regafter.php");
	}

	?>