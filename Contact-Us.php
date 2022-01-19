<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-ContactUs</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" type="text/css" href="./css/Contact-Us-css.css"/>
</head>
<body>
	<div class="w3-top" id="Header">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    		<h3 id="company-title">404-Still Beta</h3>
  		</div>
	</div>
	<?php include "include/customer_nav.php"; ?>
	
	<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	<div class="w3-main" style="margin-left:250px">
		<div class="w3-row w3-padding-64">
    	<div class="w3-twothird w3-container" id="Customer-content" style="width:100%">
      		<h1 id="Order-title" class="w3-text-black">Contact Us</h1>
      		<h6 class="w3-text-black"><b>Get our contact details</b></h6>
      		<hr>
    <div id="ContactUs" class="w3-container">
      <h1 class="w3-text-teal">Write to us at:-</h1>
      <h2 style="margin-left: 50px"> admin_technical@404StillBeta.com</h2>
      <br>
      <br>
      <br>
      <h1 class="w3-text-teal">Call Us at:-</h1>
      <h2 class="w3-text-white" style="margin-left: 50px"> +91 9025408016</h2>
      <p class="w3-text-white" style="margin-left: 50px">(Available from 9am to 6pm)</p>
    </div>
</body>