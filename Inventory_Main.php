
<?php
include 'include/db.php';
$message= '';
if(isset($_POST['product_insert'])){ //check if form was submitted
	$p_name = $_POST['p_name'];
	$p_price = $_POST['p_price'];
	$p_id = $_POST['p_id'];
	$p_quantity = $_POST['p_quantity']; //get input text
	$p_category = $_POST['p_category'];
	$p_discount = $_POST['p_discount'];
	$insert_query = "INSERT INTO `products` (`p_id`, `p_name`, `quantity`, `catid`, `discount`, `price`) VALUES ('$p_id', '$p_name', '$p_quantity', '$p_category', '$p_discount', '$p_price')";
	
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
		<title>Order Management System-Customer-Inventory</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/Inventory_Main-css.css"/>
	<script defer src="./js/Customer_Edit-js.js"></script>
</head>
<body>
	<div class="w3-top" id="Header">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    		<h3 id="company-title">404-Still Beta</h3>
  		</div>
	</div>
	<?php include "include/inventory_nav.php"; ?>
	
	
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row w3-padding-64">
		<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
			<?php echo $message ?>
      		<h1 id="Order-title" class="w3-text-black">New Product</h1>
      		<h6 class="w3-text-black"><b>Enter the details</b></h6>
      		<hr>
      		<div id="edits" class="w3-container">
			  
			  <form action="" method="post">
			  		
					<span id="Products">Enter the Product Id: -<span style="margin-left: 142px"></span> <input type="text" name="p_id" id="p_id" class="register-field" placeholder="Product ID"></span><br>
					<span id="Products">Enter the Product name: -<span style="margin-left: 107px"></span> <input type="text" name="p_name" id="p_name" class="register-field" placeholder="Product Name"></span><br>
					<span id="Products">Enter the category id: -<span style="margin-left: 130px"></span>  <input type="text" name="p_category" id="p_catergory" class="register-field"  placeholder="Category"></span><br>
					<span id="Products">Enter the quantity coming in: -<span style="margin-left: 57px"></span> <input type="text" name="p_quantity" id="p_quantity" class="register-field"  placeholder="Quantity"></span><br>
					<span id="Products">Enter the max Discount applicable: - <span style="margin-left: 0px"></span> <input type="number" name="p_discount" id="p_discount" class="register-field" placeholder="Discount"></span><br>
					<span id="Products">Enter the Price: - <span style="margin-left: 195px"></span> <input type="text" name="p_price" id="p_price" class="register-field" placeholder="Price"></span><br><br>
					<p style="margin-left:41%; padding:20px"><input type="submit" name="product_insert" id="register-submit"></p>
				</form>
			</div>
		</div>
	</div>
</div>
</body>