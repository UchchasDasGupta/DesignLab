<?php
session_start();

$userid=$_SESSION["userid"];


$userid = $_POST["userid"];
$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$address = $_POST["address"];



include ("includes/connection.php");
$sql = "UPDATE admin_reg SET

	name='$name',
	email='$email',
	contact='$contact',
	address='$address'
	
		where userid='$userid'";
	$result=mysql_query($sql);
	if($result)
	{
		header("location: regviewadmin.php");
	}
	else
	{
		echo die(mysql_error());
	}
?>
	