<?php

session_start();
if(!isset($_SESSION['userid']))
{
	header('location:loginadmin.php');
}
?>


<html>
<head>
<title>Admin Home</title>



<link rel="stylesheet" style type = "text/css" href="css/designadmin.css">
<link rel="stylesheet" href="css/buttonsign.css">
</head>

<body>
<center>

<div id = "wrapper">
<div id = "header">
<div id = "h1">
<a href="adminhome.php">
<img border="0" alt="page" src="logo.jpg" width="150" height="100">
</a>

</div>
<div id = "h2">

<ul>
	<li><a href = "adminhome.php">Home</a></li>
	<li><a href = "user.php">Customer Details</a></li>
	<li><a href = "admin.php">Admin</a></li>
	<li><a href = "logoutadmin.php">Log Out</a></li>

</ul>
<div align = "right">
<table>
	<tr>
<td>
<button type="button" onclick="window.location.href = 'regadmin.php';" class="buttonsign">New Admin Sign Up</button>
 </td>
</tr>
</table>
</div>
</div>

</div>

<div id = "content">
<h1 style= "color: orange; text-align: center; font-size: 50;">Welcome to Admin Panel</h1>

<h2> Welcome <?php echo $_SESSION['userid']; ?> <h2>
	
</div>

<?php
	include ("includes/footeradmin.php");
?>

</div>
</center>	
	
</body>
</html>
