
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-Customer-EditDetails</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/Edit-Details-css.css"/>
	
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
      		<h1 id="Order-title" class="w3-text-black">New customer </h1>
      		<h6 class="w3-text-black"><b> New customer details</b></h6>
      		<hr>
			
      		<div id="edits" class="w3-container">
			  <form id="signup_form" onsubmit="return false">
				<span id="Edit">Enter name: -<span style="margin-left: 100px"></span> <input type='text' name="name" id="name" class="register-field" placeholder="Name"></span><br>
				<span id="Edit">Enter id: -<span style="margin-left: 55px"></span> <input type="text" name="id" id="id" class="register-field" placeholder="customer id"></span><br>
				<span id="Edit">Enter Password: -<span style="margin-left: 62px"></span>  <input type="password" name="password" id="password" class="register-field" placeholder="Password"></span><br>
				<span id="Edit">Enter Password again: -<span style="margin-left: 0px"></span> <input type="password" name="repassword" id="repassword" class="register-field" placeholder="Re-Enter Password"></span><br>
				<span id="Edit">Enter Phone Number: - <span style="margin-left: 7px"></span> <input type='number' name="phoneno" id="phone" class="register-field" placeholder="Phone"></span><br>
				<span id="Edit">Enter Email-Id: - <span style="margin-left: 70px"></span> <input type='text' name="email" id="email" class="register-field" placeholder="Email-Id"></span><br><br>
				<span id="Edit">Enter address: - <span style="margin-left: 70px"></span> <input type='text' name="address" id="address" class="register-field" placeholder="address"></span><br><br>
				<p style="margin-left:31%; padding:20px"><input type="submit" name="create_cust" id="register-submit"></p>
				<div class="col-md-8" id="signup_msg"></div>
				</form>
				
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/register.js"></script>

</body>