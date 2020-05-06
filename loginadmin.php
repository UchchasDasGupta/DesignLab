<html>
<head>
<title>Admin Log In</title>
<link rel="stylesheet" style type = "text/css" href="css/design.css">
<link rel="stylesheet" style type = "text/css" href="css/reg.css">

</head>

<body>
<center>
<div id = "wrapper">
<?php
	include ("includes/headeralluser.php");
?>

<div id = "content">

<body>
<form action = "loginadmin1.php" method = "post" enctype = "multipart/form-data" onsubmit = "return validate()">
<table>

<h1 style= "color : orange";>Admin Log In</h1>
      
      <hr>


<tr>
<td style = "color:white"><h3> User Id </h3></td>
<td> <input type = "text" name = "userid" placeholder="Enter userid.." id = "t1" required </td>
</tr>

<tr>
<td style = "color:white"><h3> Password </h3></td>
<td> <input type = "password" name = "password" id = "t2" placeholder="Enter password.." required </td>
</tr>

<tr>
<td><input type="checkbox" onclick="myFunction()"><b>Show Password<b></td>
</tr>




<script>
function myFunction() {
  var x = document.getElementById("t2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


<tr class="clearfix">
       <td> <button type="button" class="cancelbtn">Cancel</button></td>
       <td><button type="submit" class="signupbtn">Log In</button></td>
</tr>

<br/>
<?php
if(isset($_REQUEST["wrong_info"])){
	
	echo '<h2 style="color:red">
	Userid or Password is wrong!
	</h2>';
}
?>


</table>
</form>
</body>
</div>

<?php
	include ("includes/footer.php");
?>
</div>
</center>

 
	
	
</body>
</html>