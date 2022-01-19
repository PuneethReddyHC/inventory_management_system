<?php
include 'include/db.php';
$message= '';
if(isset($_POST['shipment_update'])){ //check if form was submitted
	$sh_id = $_POST['s_id'];
	$s_date = $_POST['s_date'];
	$s_status = $_POST['s_status']; //get input text
	$agent_id = $_POST['agent_id'];
	$emp_id = $_POST['emp_id'];
	$est_delivery = $_POST['est_delivery'];
	$update_query = "UPDATE `shipments`
	 SET `s_date` = '$s_date', `s_status` = '$s_status', `agent_id` = '$agent_id', `emp_id` = '$emp_id', `est_delivery` = '$est_delivery' WHERE `shipments`.`sh_id` = '$sh_id'";
	
	if (mysqli_query($con, $update_query)) {
		$message = "<p style='color:green'>Record updated successfully</p>";
	  } else {
		$message = "<p style='color:green'>Error updating record: </p>" . mysqli_error($con);
	  }
}
	
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-Customer-Inventory</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/sales_Modify-css.css"/>
	<script defer src="./js/sales_Modify-js.js"></script>
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
      		<h1 id="Order-title" class="w3-text-white">Edit consignment details</h1>
			  <h6 class="w3-text-white"><b>Edit the consignment here</b></h6>
			  <?php echo $message; ?>
      		<hr><br><br><br>
      		<div id="edits" class="w3-container">
				
				<form action='' method='post'>
    			<center><span id="order">Enter the consignment Id (you want to modify)</span><br><br>
    			<input type='text' name="sh_id" id="sh_id" class="register-field" placeholder="ship ID"><br>
				<p style="padding:20px"><input type="submit" name="submit" id="submit"></p></center>
				</form>
			</div>
		</div>
	</div>
	<?php
		
		if(isset($_POST['submit'])){ //check if form was submitted
			$sh_id = $_POST['sh_id']; //get input text
			$shipment_query = "SELECT * FROM shipments WHERE sh_id = '$sh_id'";
			$run_query = mysqli_query($con, $shipment_query);
			
			if (mysqli_num_rows($run_query) > 0)
				{
					while($row = mysqli_fetch_assoc($run_query)) 
						{
		
							$sh_id = $row['sh_id'];
							$s_date = $row['s_date'];
							$s_status = $row['s_status']; //get input text
							$agent_id = $row['agent_id'];
							$emp_id = $row['emp_id'];
							$est_delivery = $row['est_delivery'];
							  
							
						echo "
							<div class='w3-twothird w3-container' id='Customer-content' style='width:100%'>
								<h1 id='Order-title' class='w3-text-black'>Edit Product</h1>
								<h6 class='w3-text-black'><b>Enter the details</b></h6>
								<hr>
								<div id='edits' class='w3-container'>
								 <form action='' method='post'>
									<span id='shipments'>Enter the consignment Id: -<span style='margin-left: 100px'></span> <input type='text' name='s_id' value='$sh_id' id='s_id' class='register-field' placeholder='shipment ID'></span><br>
									<span id='shipments'>Enter the date: -<span style='margin-left: 182px'></span> <input type='date' name='s_date' id='s_date' value='$s_date' class='register-field' placeholder='sdate'></span><br>
									<span id='shipments'>Enter the agent id: -<span style='margin-left: 152px'></span> <input type='text' name='agent_id' id='agent id' value='$agent_id' class='register-field' placeholder='agent id'></span><br>
									<span id='shipments'>Enter the empolyee id: -<span style='margin-left: 122px'></span> <input type='text' name='emp_id' id='empolyee id' value='$emp_id' class='empolyee id' placeholder='empolyee id'></span><br>
									<span id='shipments'>Enter est_delivery: - <span style='margin-left: 150px'></span> <input type='date' name='est_delivery' id='est_delivery' value='$est_delivery' class='register-field' placeholder='est_delivery'></span><br>
									<span id='shipments'>Enter status: - <span style='margin-left: 200px'></span> <input type='text' name='s_status' id='status' class='register-field' value='$s_status' placeholder='status'></span><br><br>
				
									<p style='margin-left:41%; padding:20px'><input type='submit' name='shipment_update' id='order-submit'></p>
								</form>
							</div>
						";
					}
				
			}else{
				echo "<p>No product with product id \"$sh_id \" exists</p>";
			}
		}
?>
</div>
</body>