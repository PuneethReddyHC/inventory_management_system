<?php
include 'include/db.php';
$message= '';
if(isset($_POST['product_update'])){ //check if form was submitted
	$p_name = $_POST['p_name'];
	$p_price = $_POST['p_price'];
	$p_id = $_POST['p_id'];
	$p_quantity = $_POST['p_quantity']; //get input text
	$p_category = $_POST['p_category'];
	$p_discount = $_POST['p_discount'];
	$update_query = "UPDATE products SET price='$p_price',p_name='$p_name', quantity='$p_quantity', catid='$p_category', discount='$p_discount' WHERE p_id = '$p_id'";
	
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
	<link rel="stylesheet" type="text/css" href="./css/Inventory_Modify-css.css"/>
	
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
	<?php include "include/inventory_nav.php"; ?>
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row ">
		
    	<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
      		<h1 id="Order-title" class="w3-text-white">Edit Product</h1>
      		<h6 class="w3-text-white"><b>Edit the Products here</b></h6>
			  <hr><br><br><br>
			  <?php echo $message; ?>
      		<div id="edits" class="w3-container">
				<form method="post" action="">
					<center><span id="Products" style="color:#000">Enter the Product Id of the Product you want to modify</span><br><br>
					<input type='text' name="p_id" id="p_id" class="register-field" placeholder="Product ID"><br>
					<p style="padding:20px"><input type="submit" name="submit"></p></center>
				</form>

			</div>
		</div>
	</div>
	<?php
		
		if(isset($_POST['submit'])){ //check if form was submitted
			$p_id = $_POST['p_id']; //get input text
			$products_query = "SELECT * FROM products WHERE p_id = '$p_id'";
			$run_query = mysqli_query($con, $products_query);
			
			if (mysqli_num_rows($run_query) > 0)
				{
					while($row = mysqli_fetch_assoc($run_query)) 
						{
		
						$quantity   = $row['quantity'];
						$discount = $row['discount'];
						$price = $row['price'];
						$cat_id = $row['catid'];
						$p_name    = $row['p_name'];
							
						echo "
							<div class='w3-twothird w3-container' id='Customer-content' style='width:100%'>
								<h1 id='Order-title' class='w3-text-black'>Edit Product</h1>
								<h6 class='w3-text-black'><b>Enter the details</b></h6>
								<hr>
								<div id='edits' class='w3-container'>
								 <form action='' method='post'>
									<span id='Products'>Enter the Product Id: -<span style='margin-left: 142px'></span> <input type='text' name='p_id' id='p_id' class='register-field' value='$p_id'></span><br>
									<span id='Products'>Enter the Product name: -<span style='margin-left: 107px'></span> <input type='text' name='p_name' id='p_name' class='register-field' value='$p_name' placeholder='Product Name'></span><br>
									<span id='Products'>Enter the category id: -<span style='margin-left: 130px'></span>  <input type='text' name='p_category' id='p_catergory' class='register-field' value='$cat_id' placeholder='Category'></span><br>
									<span id='Products'>Enter the quantity coming in: -<span style='margin-left: 57px'></span> <input type='text' name='p_quantity' id='p_quantity' class='register-field' value='$quantity' placeholder='Quantity'></span><br>
									<span id='Products'>Enter the max Discount applicable: - <span style='margin-left: 0px'></span> <input type='number' name='p_discount' id='p_discount' class='register-field' value='$discount' placeholder='Discount'></span><br>
									<span id='Products'>Enter the Price: - <span style='margin-left: 195px'></span> <input type='text' name='p_price' id='p_price' class='register-field' placeholder='Price' value='$price'></span><br><br>
									<p style='margin-left:41%; padding:20px'><input type='submit' name='product_update' id='register-submit'></p>
								</form>
							</div>
						";
					}
				
			}else{
				echo "<p>No product with product id \"$p_id \" exists</p>";
			}
		}
?>
</div>
</body>