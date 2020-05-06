<html>
<head>
<title>Invoice</title>

<link rel="stylesheet" style type = "text/css" href="css/designafter.css">
<link rel="stylesheet" style type = "text/css" href="css/buttonregafter.css">
<link rel="stylesheet" href="css/buttonsign.css">
<link rel='stylesheet' type='text/css' href='css/invoice.css' />


</head>

<body>
<center>
<div id = "wrapper">
<div id = "header">
<div id = "h1">
<a href="adminhome.php">
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


<div id="customer">
<table id="meta">

                <tr>
                    <td class="meta-head" style="background:white;color:black">Date</td>
                    <td style="background:white;color:black"><?php echo $myarray[0]?></td>
                </tr>

                <tr>
                    <td class="meta-head" style="background:white;color:black">Name</td>
                    <td style="background:white;color:black"><?php echo $myarray[1]?></td>
                </tr>

                <tr>
                    <td class="meta-head" style="background:white;color:black">Email</td>
                    <td id="date" style="background:white;color:black"><?php echo $myarray[2]?></td>
                </tr>
                <tr>
                    <td class="meta-head" style="background:white;color:black">Contact</td>
                    <td style="background:white;color:black"><div class="due"><?php echo $myarray[3]?></div></td>
                </tr>

                <tr>
                    <td class="meta-head" style="background:white;color:black">Address</Address></td>
                    <td style="background:white;color:black"><div class="due"><?php echo $myarray[4]?></div></td>
                </tr>

            </table>

  </div>


<table id="items">
		
		  <tr>
		      <th>Jewellery Description</th>
          <th>Payment Method</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <th class="total-line balance"><div style="background:white;color:black"><h5><?php echo $myarray[5]?></h5></div></th>
		      <th class="total-line balance"><div style="background:white;color:black"><h5><?php echo $myarray[6]?></h5></div></th>
          <th class="total-line balance"><div style="background:white;color:black"><?php echo $myarray[7]?></div></th>
		  </tr>
		
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row"></a></td>
		  </tr>

		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td colspan="1" class="total-line balance" style="background:white;color:black">Subtotal</td>
		      <td class="total-line balance"><div id="subtotal" style="background:white;color:black"><?php echo $myarray[7]?></div></td>
		  </tr>
		  <tr>

		      <td colspan="1" class="blank"> </td>
		      <td colspan="1" class="total-line balance" style="background:white;color:black">Total</td>
		      <td class="total-line balance"><div id="total" style="background:white;color:black"><?php echo $myarray[7]?></div></td>
		  </tr>
      
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td colspan="1" class="total-line balance" style="background:white;color:black">Amount Paid</td>

		      <td class="total-line balance"><div id="paid" style="background:white;color:black"><?php echo $myarray[8]?></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td colspan="1" class="total-line balance" style="background:white;color:black"> Balance Due</td>
		      <td class="total-line balance"><div class="due" style="background:white;color:black"><?php echo $myarray[9]?></div></td>
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


