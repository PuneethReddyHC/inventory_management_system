<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-Customer-Inventory</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/Inventory_list-css.css"/>
	<script defer src="./js/Inventory_Modify-js.js"></script>
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
      		<h1 id="Order-title" class="w3-text-white">List Orders</h1>
      		<h6 class="w3-text-white"><b>View all the pending orders here</b></h6>
      		<hr><br>
      		<div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
	<?php
      include 'include/db.php';
      $products_query = "SELECT C.category,P.quantity, P.discount,P.p_name, P.price, P.p_id FROM categ AS C, products AS P WHERE P.catid=C.cat_id";
                $run_query = mysqli_query($con,$products_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $p_id    = $row['p_id'];
                        $p_name    = $row['p_name'];
                        $quantity   = $row['quantity'];
                        $discount = $row['discount'];
						$price = $row['price'];
						$category = $row['category'];
                        echo "
				
                                
                        <div class='w3-container'>
                        <div id= 'Order' class='w3-display-container'>
                            <p>Product Id :- $p_id</p>
                            <p>Product name :- $p_name </p>
							<p>Category :- $category </p>
							<p>Quantity :- $quantity </p>
                            <p>Max Discount :- $discount</p>
                            <p>Price :- $price</p>
                          <span class='w3-tag w3-display-topleft'>Product No </span>
                        </div>
                      </div>
                      <br>
                      <br>           
                    
                              
            ";
          }
              ;
            
      }
      ?>
      
</body>