<html>
<head>

<script type = "text/javascript">
function validate()
{

	var RE_NAME = /^[A-Za-z]+(\s)+[A-Za-z]+$/;
	var RE_CONTACTNO = /^\d{10,11}$/;
	var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
	
	

var name=document.getElementById("t4").value;
if(name=="")
{
alert("Name can't be blank");
return false;
}
if(!RE_NAME.test(name))
{
	alert("Name has to be alphabhet");
	return false;
}

var email=document.getElementById("t5").value;
if(email=="")
{
alert("Email can't be blank");
return false;
}
if(!RE_EMAIL.test(email))
{
	alert("Email has to be alphanumeric");
	return false;
}

var cnt=document.getElementById("t6").value;
if(cnt=="")
{
alert("Contact can't be blank");
return false;
}
if(!RE_CONTACTNO.test(cnt))
{
	alert("Contact has to be numeric");
	return false;
}
var add=document.getElementById("t7").value;
if(add=="")
{
alert("Address can't be blank");
return false;
}
}

	
</script>



<title>Sign Up Form</title>
<link rel="stylesheet" style type = "text/css" href="css/design.css">
<link rel="stylesheet" style type = "text/css" href="css/reg.css">

</head>

<body>
<center>
<div id = "wrapper">
<div id = "header">
<div id = "h1">
<a href="home.php">
<img border="0" alt="logo" src="logo.jpg" width="150" height="100">
</a>

</div>
<div id = "h2">
<ul>
	<li><a href = "home.php">Home</a></li>
	<li><a href = "reg.php">Registration</a></li>
</ul>

</div>

</div>

<div id = "content">

<body>
<form action = "regacceptuser.php" method = "post" enctype = "multipart/form-data" onsubmit = "return validate()">
<table>

<h1 style= "color : orange";>Sign Up</h1>
<p style = "color : white";><b>Please fill in this form to create an account.</b></p>
      
      <hr>


<tr>
<td style = "color:white"><h3> Name </h3></td>
<td> <input type = "text" name = "name" id = "t4" placeholder="Enter name.."  </td>
</tr>

<tr>
<td style = "color:white"><h3> Email </h3></td>
<td> <input type = "text" name = "email" id = "t5" placeholder="Enter email.."  </td>
</tr>

<tr>
<td style = "color:white"><h3> Contact </h3></td>
<td> <input type = "text" name = "contact" id = "t6" placeholder="Enter contact.."  </td>
</tr>

<?php
if(isset($_REQUEST["wrong_info"])){
	
	echo '<h2 style="color:red">
	Contact already exists!
	</h2>';
}
// if(!empty($_GET['message'])) {
// 	$message = $_GET['message'];
// echo $message;
// }

?>


<tr>
<td style = "color:white"><h3> Address </h3></td>
<td><textarea rows="3" cols="30" id = "t7" placeholder="Enter address" name = "address" ></textarea></td>
</tr>




<tr class="clearfix">
       <td> <button type="button" onclick="document.getElementById('id01')" class="signbtn">Cancel</button></td>
       <td><button type="submit" class="signupbtn" >Sign Up</button></td>
	   <!--<td><button >Due</button></td>
	   <td><button onclick="printPage()"> <b>Pint Page</b></button></td>-->
</tr>

<!-- <script>
 function printPage()
 {
window.print();
 }
 </script> -->


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