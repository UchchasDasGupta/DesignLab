<html>
<head>
<title>Update Animal</title>
<link rel="stylesheet" style type = "text/css" href="css/designreganimal.css">
<link rel="stylesheet" href="css/reganimal.css">
<script type = "text/Javascript">
	function validate()
  {
		var RE_UID = /^(\w)+$/;
		var RE_PASS = /^(\w)+$/;
		var RE_NAME = /^[A-Za-z]+(\s)+[A-Za-z]+$/;
		var RE_CONTACTNO = /^\d{10,11}$/;
		var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
  
  
  
	var uid=document.getElementById("t1").value;
	if(uid=="")
	{
	alert("User id cann't be blank");
	return false;
	}
	if (!RE_UID.test(uid))
		{
			alert("User id has to be alphanumeric");
			 return false;
		}
		
		
	var pwd=document.getElementById("t2").value;
	if(pwd=="")
	{
	alert("Password cann't be blank");
	return false;
	}
	if (!RE_PASS.test(pwd))
		{
			alert("Password has to be alphanumeric");
			 return false;
		}
	var cpwd=document.getElementById("t3").value;
	if(cpwd=="")
	{
	alert("Confirm Password cann't be blank");
	return false;
	}
	//Compare Validation
	if(pwd!=cpwd)
	{
	alert("Password and Confirm password should match");
	return false;
	}
	
	
	var name=document.getElementById("t4").value;
	if(name=="")
	{
	alert("Name cann't be blank");
	return false;
	}
	if (!RE_NAME.test(name))
		{
			alert("Name has to be alphanumeric");
			 return false;
		}
		
		
	var email=document.getElementById("t5").value;
	if(email=="")
	{
	alert("Email cann't be blank");
	return false;
	}
	if (!RE_EMAIL.test(email))
		{
			alert("Email has to be alphanumeric");
			 return false;
		}
		
		
	var cont=document.getElementById("t6").value;
	if(cont=="")
	{
	alert("Contact cann't be blank");
	return false;
	}
	if (!RE_CONTACTNO.test(cont))
		{
			alert("Contact number has to be within 10-11 digits");
			 return false;
		}
	
	var adr=document.getElementById("t7").value;
	if(adr=="")
	{
	alert("Address cann't be blank");
	return false;
	}
  
  
  //Radio Button(Gender)
  var radioSelected = false;
	for(i = 0; i < f1.gender.length; i++)
	{
	if (f1.gender[i].checked)
	radioSelected = true;
	}
	if (!radioSelected)
	{
	alert("Please select one of the \"Gender\" options.");
	return (false);
	}
	
	//Drop Down(Last Qualification)
	if (f1.lq.selectedIndex <= 0)
	{
	alert("Please select a valid Last Qualification.");
	//f1.lq.focus();
	return (false);
	}
	
	//Checkbox(hobby)
		var checked = false;
		var elements = document.getElementsByName("hobby[]");
		for(var i = 0; i < elements.length; i++)
		{
			if(elements[i].checked)
		{
			checked = true;
			}
		}
		if (!checked)
		{
			alert('Select at least one hobby');
		}
		return checked;
		
		
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

<body>


<?php

	session_start();
	
	include ("includes/connection.php");
	
		$userid = $_POST["userid"];
		
		$_SESSION["userid"] = $userid;

		if(isset($_POST["userid"]))
		{
		$sql = "select * from user_reg where 
		userid = '$userid'";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result))
		{
			if ($result);
			{
				$userid = $row['userid'];
				$name = $row['name'];
				$email = $row['email'];
				$contact = $row['contact'];
				$address = $row['address'];

			}
			
		}
		
		?>

<form name = "f1" action = "updateuser1.php" method = "post" enctype = "multipart/form-data" onsubmit = "return validate()">

<table>
<h1> Update Form </h1>
<tr>
<td> <b>User Id </b></td>
<td> <input type = "text" name = "userid"  id = "t1" value = "<?php echo $userid ?>"readonly ></td>
</tr>


<tr>
<td> <b> Name </b></td>
<td> <input type = "text" name = "name" id = "t4" value = "<?php echo $name ?>"></td>
</tr>

<tr>
<td> <b> Email </b></td>
<td> <input type = "text" name = "email"  id = "t5" value = "<?php echo $email ?>"> </td>
</tr>

<tr>
<td><b> Contact </b></td>
<td> <input type = "text" name = "contact" id = "t6" value = "<?php echo $contact ?>"></td>
</tr>

<tr>
<td><b> Address </b></td>
<td><textarea rows="5" cols="45" name = "address" id = "t7"><?php echo $address ?></textarea></td>
</tr>


<tr>
<td> <input type = "submit" value ="Update" id = "t12" ></td>

<td> <input type = "button" value = "Cancel" id = "t13" ></td>
</tr>




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
		<?php } ?>