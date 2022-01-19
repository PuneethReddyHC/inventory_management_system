<?php
include 'include/db.php';
$message= '';
if(isset($_POST['order_update'])){ //check if form was submitted
	$o_id = $_POST['o_id'];
	$o_date = $_POST['o_date'];
	$p_id = $_POST['p_id'];
	$p_quantity = $_POST['p_quantity']; //get input text
	$c_id = $_POST['c_id'];
	$status = $_POST['status'];
	$updateord_query = "UPDATE `orders` SET `o_date` = '$o_date', `prod_count` = '$p_quantity', `cust_id` = '$c_id', `o_status` = '$status' WHERE `orders`.`order_id` = '$o_id'";
	$updateordref_query= "UPDATE orderref SET p_id='$p_id'WHERE o_id = '$o_id'";
	if (mysqli_query($con, $updateord_query) && mysqli_query($con, $updateordref_query)) {
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
	<style>
		#Products{
			color:#000;
		}
	</style>
</head>
<body>
	<div class="w3-top" id="Header">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    		<h3 id="company-title">404-Still Beta</h3>
  		</div>
	</div>
	<?php include "include/sales_nav.php"; ?>
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row=">
		<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
		<?php echo $message; ?>
      		<h1 id="Order-title" class="w3-text-white">Edit order</h1>
      		<h6 class="w3-text-white"><b>Edit the orders here</b></h6>
      		<hr><br><br><br>
      		<div id="edits" class="w3-container">
			  <form method="post" action="">
    			<center><span id="order">Enter the order Id (you want to modify)</span><br><br>
    			<input type='text' name="o_id" id="o_id" class="register-field" placeholder="order ID"><br>
				<p style="padding:20px"><input type="submit" name="submit" id="submit"></p></center>
			</form>
			</div>
		</div>
	</div>
	<?php
		
		if(isset($_POST['submit'])){ //check if form was submitted
			$o_id = $_POST['o_id']; //get input text
			$orders_query = "SELECT * FROM orders WHERE order_id = '$o_id'";
			$orderref_query = "SELECT * FROM orderref WHERE order_id = '$o_id'";
			$runord_query = mysqli_query($con, $orders_query);
			$runordref_query = mysqli_query($con, $orderref_query);
			$p_id='';
			if (mysqli_num_rows($runord_query) > 0 && mysqli_num_rows($runordref_query) > 0)
				{
					
					while($row = mysqli_fetch_assoc($runord_query)) 
						{
						$ordrefrow = mysqli_fetch_assoc($runordref_query);
						$o_id   = $row['order_id'];
						$o_date = $row['o_date'];
						$prod_count = $row['prod_count'];
						$cust_id = $row['cust_id'];
						$o_status    = $row['o_status'];
						$p_id   = $ordrefrow['p_id'];
							
						echo "
							<div class='w3-twothird w3-container' id='Customer-content' style='width:100%'>
							
							<h1 id='Order-title' class='w3-text-black'>Edit order</h1>
							<h6 class='w3-text-black'><b>Enter the details</b></h6>
							<hr>

							<div id='edits' class='w3-container'>
								<form action='' method='post'>
								<span id='Products'>Enter the order Id: -<span style='margin-left: 142px'></span> <input type='text' name='o_id' value='$o_id' id='o_id' class='register-field' placeholder='order ID'></span><br>
								<span id='Products'>Enter the customer id: -<span style='margin-left: 105px'></span> <input type='text' name='c_id' value='$cust_id' id='c_id' class='register-field' placeholder='customer id'></span><br>
								<span id='Products'>Enter the product ID: - <span style='margin-left: 105px'></span> <input type='text' name='p_id' value='$p_id' id='p_id' class='register-field' placeholder='product Id'></span><br><br>
								<span id='Products'>Enter the quantity: -<span style='margin-left: 138px'></span> <input type='text' name='p_quantity' value='$prod_count' id='o_quantity' class='register-field' placeholder='Quantity'></span><br>
								<span id='Products'>Enter the order date: - <span style='margin-left: 115px'></span> <input type='date' name='o_date' value='$o_date' id='o_date' class='register-field' placeholder='order date'></span><br>
								
								<span id='Products'>Enter order status: - <span style='margin-left: 140px'></span> <input type='text' name='status' value='$o_status' id='status' class='register-field' placeholder='status'></span><br><br>
				
								<p style='margin-left:41%; padding:20px'><input type='submit' name='order_update' id='order-submit'></p>
							</form>
						  </div></div>
						";
					}
				
			}else{
				echo "<p>No orders with order id \"$o_id \" exists</p>";
			}
		}
?>
</div>
</body>