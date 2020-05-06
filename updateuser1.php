<?php
session_start();

$contact=$_SESSION["contact"];

$date = $_POST["date"];
$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$jewellery = $_POST["jewellery"];
$payment = $_POST["payment"];
$total = $_POST["total"];
$paid = $_POST["paid"];
$due = $_POST["due"];

$con = mysql_connect("localhost","root","");
		
	$db = mysql_select_db("jewellery");
	
	$sql = "insert into calculation (date, name, email, contact_id, address, jewellery, payment, total, paid, due) values
	('$date','$name','$email','$contact','$address','$jewellery','$payment','$total','$paid','$due')";
	
	$result = mysql_query($sql);
	
	$myArr = array($date,$name,$email,$contact,$address,$jewellery,$payment,$total,$paid,$due);
		$myJSON = json_encode($myArr);
		header("location:invoice.php?data=$myJSON");
	

?>
