<?php
session_start();
include 'include/db.php';
$message = "";
$c_id = $_SESSION["custid"];
$c_name = $_SESSION["c_name"];
if(isset($_POST['cust_update'])){ //check if form was submitted
	$name = $_POST["name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['phone'];
	$address = $_POST['address'];
	$update_query = "UPDATE `cust` 
	SET  `c_name` = '$name', `phoneno` = '$mobile', `c_address` = '$address', `email_id` = '$email', `password` = '$password' 
	WHERE `cust`.`custid` = '$c_id'";
	$_SESSION["c_name"] = $name;
	if (mysqli_query($con, $update_query)) {
		$message = "<p style='color:green'>Record updated successfully</p>";
	  } else {
		$message = "<p style='color:red'>Error updating record: </p>" . mysqli_error($con);
	  }
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-Customer-EditDetails</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/Edit-Details-css.css"/>
	<script defer src="./js/Customer_Edit-js.js"></script>
</head>
<body>
	<div class="w3-top" id="Header">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    		<h3 id="company-title">404-Still Beta</h3>
  		</div>
	</div>
	<?php include "include/customer_nav.php"; ?>
	
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row w3-padding-64">
			
		<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
		<?php echo $message; ?>
      		<h1 id="Order-title" class="w3-text-black">Edit Details</h1>
			  <h6 class="w3-text-black"><b>Edit your details</b></h6>
			  
			  <hr>
			  <?php
			  $sql = "SELECT * FROM cust WHERE custid = '$c_id'";
			  $run_query = mysqli_query($con,$sql);
			  if (mysqli_num_rows($run_query) > 0)
			  {
				  
				  while($row = mysqli_fetch_assoc($run_query)) 
					  {
						$name = $row["c_name"];
						$id = $row["custid"];
						$email = $row['email_id'];
						$password = $row['password'];
						$mobile = $row['phoneno'];
						$address = $row['c_address'];
					  
						  
					  echo "
					<div id='edits' class='w3-container'>
					  <form action='' method='post'>
						<span id='Edit'>Enter your name: -<span style='margin-left: 100px'></span> <input type='text' name='name' id='name' value='$c_name' class='register-field' placeholder='Name'></span><br>
						<span id='Edit'>Enter your Username: -<span style='margin-left: 55px'></span> <input type='text' name='id' value='$id' id='username' class='register-field' placeholder='customer id' disabled></span><br>
						<span id='Edit'>Enter your Password: -<span style='margin-left: 62px'></span>  <input type='password' name='password' value='$password' id='password' class='register-field' placeholder='Password'></span><br>
						<span id='Edit'>Enter your Phone Number: - <span style='margin-left: 7px'></span> <input type='number' name='phone' value='$mobile' id='phone' class='register-field' placeholder='Phone'></span><br>
						<span id='Edit'>Enter your Email-Id: - <span style='margin-left: 70px'></span> <input type='text' name='email' value='$email' id='email' class='register-field' placeholder='Email-Id'></span><br><br>
						<span id='Edit'>Enter your address: <span style='margin-left: 70px'></span> <input type='text' name='address' value='$address' id='address' class='register-field' placeholder='address'></span><br><br>
						<p style='margin-left:31%; padding:20px'><input type='submit' name='cust_update' id='register-submit'></p>
					</form>
					</div>
					  ";
				  }
			  
				}else{
					echo "<p>No customer with cust id \"$c_id \" exists</p>";
				}
			  ?>
      		
		</div>
	</div>
</div>
</body>