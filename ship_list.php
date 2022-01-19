<!DOCTYPE html>
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
	<?php include "include/shipment_nav.php"; ?>
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row w3-padding-64">
    	<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
      		<h1 id="Order-title" class="w3-text-black>List Orders</h1>
      		<h6 class="w3-text-black"><b>View all the pending shipments here</b></h6>
          <hr><br>
          <?php
          include 'include/db.php';
          $shipments_query = "SELECT * FROM shipments";
                $run_query = mysqli_query($con,$shipments_query);
                if(mysqli_num_rows($run_query) > 0){
                  echo '<div class="w3-row w3-grayscale">
                          <div class="w3-col l3 s6">';
                    while($row = mysqli_fetch_array($run_query)){
                      $sh_id = $row['sh_id'];
                      $s_date = $row['s_date'];
                      $s_status = $row['s_status']; //get input text
                      $agent_id = $row['agent_id'];
                      $emp_id = $row['emp_id'];
                      $est_delivery = $row['est_delivery'];
                        
                        echo "
				
                                
                        <div class='w3-container'>
                        <div id='shipment' class='w3-display-container'>
                            <p>sh_Id :-$sh_id </p>
                            <p>s_date :- $s_date</p>
                            <p>s_status :-$s_status </p>
                            <p>agent id :- $agent_id</p>
                              <p>emo_id :- $emp_id </p>
                            <p>est_delivery $est_delivery</p>
                          <span class='w3-tag w3-display-topleft'>sh_id </span>
                        </div>
                      </div>
                      <br>
                      <br>           
                    
                              
            ";
          }
              echo"</div>
              </div>";
            
      }
      ?>
    
        </div>
      </div>
    </div>
</body>