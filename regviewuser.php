<?php

session_start();
if(!isset($_SESSION['userid']))
{
	header('location:loginadmin.php');
}
?>
<html>
<head>
<title>Reg View User</title>
<link rel="stylesheet" style type = "text/css" href="css/contactdesign.css">
<link rel="stylesheet" href="css/table.css">


</head>

<body>
<center>
<div id = "wrapper">
<?php
	include ("includes/headeradmin.php");
?>

<div id = "content">

<h3> User Details </h3>
<?php
	
	include ("includes/connection.php");
	
	$sql = "select * from customer_details";
	
	$result = mysql_query($sql);
	
	?>
	
	<table style ="font-size:12px" class="gridtable">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Address</th>
	</tr>
	
	<?php
		
		while ($row = mysql_fetch_array($result))
		{
			
			
			echo "<tr>
			<th>$row[name]</th>
			<th>$row[email]</th>
			<th>$row[contact]</th>
			<th>$row[address]</th>
			</tr>";
		}
		
		?>
		
	</table>

	
</div>
<?php
	include ("includes/footeradmin.php");
?>

</div>
</center>

 
	
	
</body>
</html>