<?php 
session_start();
$cust_name =$_SESSION["inventory_name"];
?>
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  		<a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    	<i class="fa fa-remove"></i>
  		</a>
  		<div style="background-color: #ffc107; margin-top: -10px;margin-bottom:30px;">
  		<?php echo "<h4 class='w3-bar-item'><b>$cust_name</b></h4>";?>
  		</div>
  		<a class="w3-bar-item w3-button w3-hover-black" href="Inventory_Main.php">New Product</a>
  		<a class="w3-bar-item w3-button w3-hover-black" href="Inventory_Modify.php">Modify Product</a>
		  <a class="w3-bar-item w3-button w3-hover-black" href="Inventory_List.php">List Products</a>
		  <a class="w3-bar-item w3-button w3-hover-black" href="logout.php">logout</a>
	</nav>