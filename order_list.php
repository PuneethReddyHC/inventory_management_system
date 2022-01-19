
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-Customer-Inventory</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/order_lis-css.css"/>
	<script defer src="./js/sales_Modify-js.js"></script>
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
      		<h1 id="Order-title" class="w3-text-black>List Orders</h1>
      		<h6 class="w3-text-black"><b>View all the pending orders here</b></h6>
      		<hr><br>
      		<div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <?php
      include 'include/db.php';
      $orders_query = "SELECT O.order_id, C.c_name, O.prod_count, P.discount, P.price FROM orders AS O,cust AS C,orderref AS ODR, products AS P WHERE O.order_id=ODR.order_id AND O.cust_id=C.custid AND ODR.p_id= P.p_id ";
                $run_query = mysqli_query($con,$orders_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $order_id    = $row['order_id'];
                        $c_name    = $row['c_name'];
                        $prod_count   = $row['prod_count'];
                        $discount = $row['discount'];
                        $price = $row['price'];
                        $max_discount = $discount*$prod_count;
                        $tot_price = $price*$prod_count - $max_discount; 
                        echo "
				
                        
                                
                        <div class='w3-container'>
                        <div id= 'Order' class='w3-display-container'>
                            <p>order Id :- $order_id </p>
                            <p>customer name :- $c_name </p>
                            <p>Quantity :- $prod_count </p>
                            <p>Max Discount :- $max_discount</p>
                              <p>Price :- $price</p>
                            <p>total cost: $tot_price</p>
                          <span class='w3-tag w3-display-topleft'>Order No </span>
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