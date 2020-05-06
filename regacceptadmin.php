 <?php
	 
	$con = mysql_connect("localhost","root","");

	$db = mysql_select_db("jewellery");

	$userid = $_POST["userid"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$contact = $_POST["contact"];
	$address = $_POST["address"];
	
	

	$query = mysql_query("SELECT *  FROM admin_reg where userid='$userid'");

	if(mysql_num_rows($query)>0) {
		header("location:regadmin.php?wrong_info");
	}else {
		
		mysql_query("insert into admin_reg values('$userid','$password','$name','$email','$contact','$address')");
		header("location:adminhome.php");
		
	}
	
	
	?>