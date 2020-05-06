<?php

session_start();
if(!isset($_SESSION['userid']))
{
	header('location:loginadmin.php');
}
?>

<html>
<head>
<title>Delete User</title>
<link rel="stylesheet" style type = "text/css" href="css/designadmin.css">
<link rel="stylesheet" href="css/contact.css">
<script type = "text/Javascript">
	function validate()
  {
	var contact=document.getElementById("t1").value;
	if(contact=="")
	{
	alert("Contact no cann't be blank");
	return false;
	}
  }
</script>


</head>

<body>
<center>
<div id ="wrapper">
<?php
	include ("includes/headeradmin.php");
?>

<div id ="content">

<?php
	include ("includes/connection.php");
	?>

<body>
<form action = "deleteuser1.php" method = "post" enctype = "multipart/form-data" onsubmit = "return validate()">
<table>
<h1> Delete Customer </h1>

<tr>
<td><h3> Contact No </h3></td>
<td> <input type = "text" name = "contact" placeholder="Contact No.." id = "t1" required ></td>
</tr>

<tr>
<td> <input type = "submit" value ="Delete" id = "t3" ></td>

<td> <input type = "button" value = "Cancel" id = "t4" ></td>
</tr>

<br/>
<?php
if(isset($_REQUEST["wrong_info"])){
	
	echo '<h2 style="color:red">
	Not Matched!
	</h2>';
}
?>

</table>
</body>

</div>
<?php
	include ("includes/footeradmin.php");
?>

</div>
</center>
</body>
</html>