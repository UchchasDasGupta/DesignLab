<?php

session_start();
if(!isset($_SESSION['userid']))
{
	header('location:loginadmin.php');
}
?>
<html>
<head>
<title>Update Invoice</title>
<link rel="stylesheet" style type = "text/css" href="css/designadmin.css">
<link rel="stylesheet" href="css/contact.css">
<script type = "text/Javascript">
	function validate()
  {
	
		var RE_NAME = /^[A-Za-z]+(\s)+[A-Za-z]+$/;
		var RE_CONTACTNO = /^\d{10,11}$/;
		var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
  
  
  

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
  
		
		}
		
		
</script>


</head>

<body>
<center>
<div id ="wrapper">
<header id = "header">
<div id = "h1">
<a href="adminhome.php">
<img border="0" alt="logo" src="logo.jpg" width="150" height="100">
</a>

</div>
<div id = "h2">

</div>

</header>
<div id ="content">

<body>


<?php

	

	include ("includes/connection.php");
	
		$contact = $_POST["contact"];
		
		$_SESSION["contact"] = $contact;

		if(isset($_POST["contact"]))
		{
		$sql = "select * from customer_details where 
		contact = '$contact'";


		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		if($count == 0){
			header("location:searchuser.php?wrong_info");
		}else{
		while ($row = mysql_fetch_array($result))
			{
				$name = $row['name'];
				$email = $row['email'];
				$contact = $row['contact'];
				$address = $row['address'];

			}
			
		}

		$sql1 = "select * from calculation where 
		contact_id = '$contact'";


		$result1 = mysql_query($sql1);
		$count1 = mysql_num_rows($result1);
		if($count1 == 0){
			$due = 0;
		}else{
		while ($row = mysql_fetch_array($result1))
			{
				$due = $row['due'];

			}
			
		}



	}

		?>

<form name = "f1" action = "updateuser1.php" method = "post" enctype = "multipart/form-data" onsubmit = "return validate()">

<table>
<h1> INVOICE </h1>

<tr>
<td style = "color:white"> <h3> Date </h3></td>
<td> <input type = "text" name = "date" id = "t0" value = "<?php 

$mydate=getdate(date("U"));
echo "$mydate[month] $mydate[mday], $mydate[year]"; 
?>"></td>
</tr>


<tr>
<td style = "color:white"> <h3> Name </h3></td>
<td> <input type = "text" name = "name" id = "t4" value = "<?php echo $name ?>"readonly ></td>
</tr>

<tr>
<td style = "color:white"> <h3> Email </h3></td>
<td> <input type = "text" name = "email"  id = "t5" value = "<?php echo $email ?>"> </td>
</tr>

<tr>
<td style = "color:white"><h3> Contact </h3></td>
<td> <input type = "text" name = "contact" id = "t6" value = "<?php echo $contact ?>"readonly></td>
</tr>

<tr>
<td style = "color:white"><h3> Address </h3></td>
<td><textarea rows="2" cols="30" name = "address" id = "t7"><?php echo $address ?></textarea></td>
</tr>

<tr>
<td style = "color:white"><h3> Jewellery Descriptions </h3></td>
<td><textarea rows="2" cols="30" id = "t8" name = "jewellery" ></textarea></td>
</tr>

<tr>
<td style = "color:white"><h3> Payment Method </h3></td>
<td>
<input type="radio" name="payment" id="t9" value="Cash"><b>Cash</b>
<input type="radio" name="payment" id="t10" value="Card"><b>Card</b>
</td>
</tr>


<tr>
<td style = "color:white"><h3> Total Amount </h3></td>
<td> <input type = "text" name = "total" id = "t11" value = "" onInput="getPrice()"></td>
</tr>

<tr>
<td style = "color:white"><h3> Paid Amount </h3></td>
<td> <input type = "text" name = "paid" id = "t12" value = "" onInput="getPrice()"></td>
</tr>

<tr>
<td style = "color:white"><h3> Due Amount </h3></td>
<td> <input type = "text" name = "due" id = "t13" placeholder ="<?php echo $due ?>" value = ""readonly></td>
</tr>

<script>

	
        getPrice = function() {
            var total = Number(document.getElementById("t11").value);
            var pay = Number(document.getElementById("t12").value);
            var due = <?php echo $due; ?>;
			console.log(total);
			console.log(pay);
			console.log(due);

			total = total + due;
			due = total - pay;

            document.getElementById("t13").value = due;
        }
    </script>

<tr>

<td><input type="submit" class="signupbtn" onclick=""></td>
<!--<td> <input type = "button" value = "Cancel" id = "t13" ></td>
<td> <input type = "submit" value ="Update" id = "t12" ></td>
<td><input type = "submit" value ="Due" onclick="getPrice()"></td>-->
</tr>

<script>
 function printPage()
 {
window.print();
 }
 </script>


</table>
</body>

</div>
<?php
	include ("includes/footerreg.php");
?>

</div>
</center>
</body>
</html>