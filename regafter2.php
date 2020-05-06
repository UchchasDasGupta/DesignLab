<html>
<head>
<title>Invoice</title>

<link rel="stylesheet" style type = "text/css" href="css/designafter.css">
<link rel="stylesheet" style type = "text/css" href="css/table.css">
<link rel="stylesheet" style type = "text/css" href="css/buttonregafter.css">
<link rel="stylesheet" href="css/buttonsign.css">


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

</div>

</div>

<div id = "content">
<body>
<table>
<h1 style = "color:white"> INVOICE !</h1>

<img src="correct.png" alt="Italian Trulli">

</table>

<?php
	if(!empty($_GET['data'])) {
		$message = $_GET['data'];
	$myarray = json_decode($message);

	}
	?>

<table id="customers" style="background:white;color:black">
  <tr>
    <th>Name</th>
    <th><?php echo $myarray[0]?></th>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $myarray[1]?></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><?php echo $myarray[2]?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $myarray[3]?></td>
  </tr>
  <tr>
    <td>Jewellery Description</td>
    <td><?php echo $myarray[4]?></td>
  </tr>
  <tr>
    <td>Payment Method</td>
    <td><?php echo $myarray[5]?></td>
  </tr>
  <tr>
    <td>Total Amount</td>
    <td><?php echo $myarray[6]?></td>
  </tr>
  <tr>
    <td>Paid Amount</td>
    <td><?php echo $myarray[7]?></td>
  </tr>
  <tr>
    <td>Due Ammount</td>
    <td><?php echo $myarray[8]?></td>
  </tr>
  

</table>


<button type="submit" align = "center" "class="signupbtn" onClick="window.print()" >Print</button>
<!-- <input type = "submit" value ="Print" onClick="window.print()" id = "t3" > -->

</body>

	
</div>
<?php
	include ("includes/footerreg.php");
?>

</div>
</center>

 
	
	
</body>
</html>


