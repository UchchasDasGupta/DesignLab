<?php

session_start();
if(!isset($_SESSION['userid']))
{
	header('location:loginadmin.php');
}



	include ("includes/connection.php");
	
		$search = $_POST["search"];
		
		$_SESSION["search"] = $search;

		if(isset($_POST["search"]))
		{


			$sql1 = "select * from customer_details where 
			contact = '$search'";
	
	
			$result1 = mysql_query($sql1);
			$count1 = mysql_num_rows($result1);
			
?>
<html>
<head>
<title>Customer Statement</title>
<link rel="stylesheet" style type = "text/css" href="css/designadmin.css">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/table.css">


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



<div>
<?php 
if($count1 == 0){
	header("location:search.php?wrong_info");
}else{
while ($row1 = mysql_fetch_array($result1))
	{
		
	 echo "
	 <h3>Name : $row1[name]</h3>
	 <h3>Email : $row1[email]</h3>
	 <h3>Address : $row1[address]</h3>
	
	";
		
	}
	
}
?>
</div>


<body>


<table>
                <tr style="background:white;color:black">
                    <th>Date</th>
					<th>Jewellery Description</th>
                    <th>Payment Method</th>
                    <th>Total Amount</th>
                	<th>Paid Amount</th>
                	<th>Due Amount</th>
            
                </tr>

<?php

		$sql = "select * from calculation where 
		contact_id = '$search'";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		if($count == 0){
              echo "<th colspan='6' style='text-align:center;'>There is no data</th>";	
}else{
		while ($row = mysql_fetch_array($result))
			{
				echo "<tr>
			<th>$row[date]</th>
			<th>$row[jewellery]</th>
			<th>$row[payment]</th>
			<th>$row[total]</th>
			<th>$row[paid]</th>
			<th>$row[due]</th>
			</tr>";
				
			}
			
		}




	}

		?>

	
<br>
            </table style="color:black;background:white;">



</body>

</div>
<?php
	include ("includes/footerreg.php");
?>

</div>
</center>
</body>
</html>