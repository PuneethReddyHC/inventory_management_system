<?php
include 'include/db.php';
$message= '';
if(isset($_POST['shipment_insert'])){ //check if form was submitted
	$sh_id = $_POST['s_id'];
	$s_date = $_POST['s_date'];
	$s_status = $_POST['s_status']; //get input text
	$agent_id = $_POST['agent_id'];
	$emp_id = $_POST['emp_id'];
	$est_delivery = $_POST['est_delivery'];
	$insert_query = "INSERT INTO `shipments` (`sh_id`, `s_date`, `s_status`, `agent_id`, `emp_id`, `est_delivery`) 
	VALUES ('$sh_id', '$s_date', '$s_status', '$agent_id', '$emp_id', '$est_delivery ')";
	
	if (mysqli_query($con, $insert_query)) {
		$message = "<p style='color:green'>Record inserted successfully</p>";
	  } else {
		$message = "<p style='color:green'>Error inserting record: </p>" . mysqli_error($con);
	  }
	  
}
	
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-clerk-shipment</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/ship_Main.css"/>
	<script defer src="./js/Customer_Edit-js.js"></script>
</head>
<body>
	<div class="w3-top" id="Header">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    		<h3 id="company-title">404-Still Beta</h3>
  		</div>
	</div>
	<?php include "include/shipment_nav.php"; ?>
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row w3-padding-64">
		<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
			<?php echo $message ?>
      		<h1 id="Order-title" class="w3-text-black">New consignment</h1>
      		<h6 class="w3-text-black"><b>Enter the details</b></h6>
      		<hr>
      		<div id="edits" class="w3-container">
				<form action="" method="post">
					<span id="shipments">Enter the consignment Id: -<span style="margin-left: 100px"></span> <input type='text' name="s_id" id="s_id" class="register-field" placeholder="shipment ID"></span><br>
					<span id="shipments">Enter the date: -<span style="margin-left: 182px"></span> <input type="date" name="s_date" id="s_date" class="register-field" placeholder="sdate"></span><br>
					<span id="shipments">Enter the agent id: -<span style="margin-left: 152px"></span> <input type="text" name="agent_id" id="agent id" class="register-field" placeholder="agent id"></span><br>
					<span id="shipments">Enter the empolyee id: -<span style="margin-left: 122px"></span> <input type="text" name="emp_id" id="empolyee id" class="empolyee id" placeholder="empolyee id"></span><br>
					<span id="shipments">Enter est_delivery: - <span style="margin-left: 150px"></span> <input type='date' name="est_delivery" id="est_delivery" class="register-field" placeholder="est_delivery"></span><br>
					<span id="shipments">Enter status: - <span style="margin-left: 200px"></span> <input type='text' name="s_status" id="status" class="register-field" placeholder="status"></span><br><br>

					<p style="margin-left:41%; padding:20px"><input type="submit" name="shipment_insert" id="order-submit"></p>
				</form>
			</div>
		</div>
	</div>
</div>
</body>