<?php
include 'include/db.php';
$message= '';
if(isset($_POST['order_insert'])){ //check if form was submitted
	$order_id = $_POST['o_id'];
	$o_date = $_POST['o_date'];
	$prod_count = $_POST['p_quantity'];
	$cust_id = $_POST['c_id']; //get input text
	$o_status = $_POST['status'];
	$p_id = $_POST['p_id'];
	$order_query = "INSERT INTO `orders` (`order_id`, `o_date`, `prod_count`, `cust_id`, `o_status`) VALUES ('$order_id', '$o_date', '$prod_count', '$cust_id', '$o_status')";
	$orderref_query = "INSERT INTO `orderref` (`order_id`, `p_id`) VALUES ('$order_id', '$p_id')";
	
	if (mysqli_query($con, $order_query) && mysqli_query($con, $orderref_query)) {
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
		<title>Order Management System-Customer-Inventory</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/sales_Main-css.css"/>
	<script defer src="./js/Customer_Edit-js.js"></script>
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
		<div class="w3-row w3-padding-64">
		<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
		<?php echo $message ?>
      		<h1 id="Order-title" class="w3-text-black">New order</h1>
      		<h6 class="w3-text-black"><b>Enter the details</b></h6>
      		<hr>
      		<div id="edits" class="w3-container">
			  <form action="" method="post">
    			<span id="Products">Enter the order Id: -<span style="margin-left: 142px"></span> <input type='text' name="o_id" id="o_id" class="register-field" placeholder="order ID"></span><br>
				<span id="Products">Enter the customer id: -<span style="margin-left: 105px"></span> <input type="text" name="c_id" id="c_id" class="register-field" placeholder="customer id"></span><br>
				<span id="Products">Enter the product ID: - <span style="margin-left: 105px"></span> <input type='text' name="p_id" id="p_id" class="register-field" placeholder="product Id"></span><br><br>
				<span id="Products">Enter the quantity: -<span style="margin-left: 138px"></span> <input type="text" name="p_quantity" id="o_quantity" class="register-field" placeholder="Quantity"></span><br>
				<span id="Products">Enter the order date: - <span style="margin-left: 115px"></span> <input type='date' name="o_date" id="o_date" class="register-field" placeholder="order date"></span><br>
                
                <span id="Products">Enter order status: - <span style="margin-left: 140px"></span> <input type='text' name="status" id="status" class="register-field" placeholder="status"></span><br><br>

				<p style="margin-left:41%; padding:20px"><input type="submit" name="order_insert" id="order-submit"></p>
			</form>
			</div>
		</div>
	</div>
</div>
</body>