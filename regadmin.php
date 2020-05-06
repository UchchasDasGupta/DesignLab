<html>
<head>
<title>Reg Admin</title>
<link rel="stylesheet" style type = "text/css" href="css/designadmin.css">
<link rel="stylesheet" style type = "text/css" href="css/reg.css">


</head>

<body>
<center>
<div id = "wrapper">
<?php
	include ("includes/headeradmin.php");
?>

<div id = "content">

<body>
<form action = "regacceptadmin.php" method = "post" enctype = "multipart/form-data" onsubmit = "return validate()">
<table>

<h1 style= "color : orange";>New Admin Sign Up</h1>
      <p style = "color : black";><b>Please fill in this form to create an account.</b></p>
      <hr>


<tr>
<td style = "color:black"><h3> User Id </h3></td>
<td> <input type = "text" name = "userid" placeholder="Enter userid.." id = "t1" required </td>
</tr>

<?php
if(isset($_REQUEST["wrong_info"])){
	
	echo '<h2 style="color:white">
	User Id already exists!
	</h2>';
}
?>

<tr>
<td style = "color:black"><h3> Password </h3></td>
<td> <input type = "password" name = "password" id = "t2" placeholder="Enter password.." required </td>
</tr>

<tr>
<td style = "color:black"><h3> Confirm Password </h3></td>
<td> <input type = "password" name = "cpwd" id = "t3" placeholder="Enter confirm password.." required </td>
</tr>

<tr>
<td style = "color:black"><h3> Name </h3></td>
<td> <input type = "text" name = "name" id = "t4" placeholder="Enter name.." required </td>
</tr

<tr>
<td style = "color:black"><h3> Email </h3></td>
<td> <input type = "text" name = "email" id = "t5" placeholder="Enter email.." required </td>
</tr>

<tr>
<td style = "color:black"><h3> Contact </h3></td>
<td> <input type = "text" name = "contact" id = "t6" placeholder="Enter contact.." required </td>
</tr>

<tr>
<td style = "color:black"><h3> Address </h3></td>
<td><textarea rows="5" cols="45" placeholder="Enter address" name = "address" required></textarea></td>
</tr>




<tr class="clearfix">
       <td> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></td>
       <td><button type="submit" class="signupbtn">Sign Up</button></td>
</tr>


</table>
</form>
</body>
</div>

<?php
	include ("includes/footeradmin.php");
?>
</div>
</center>

 
	
	
</body>
</html>