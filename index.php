<?php
session_start();
if(isset($_SESSION["custid"])){ //if login in session is not set
    header("Location: Customer.php");
}else if(isset($_SESSION["inventory_id"])){ //if login in session is not set
    header("Location: inventory_Main.php");
}else if(isset($_SESSION["sales_id"])){ //if login in session is not set
    header("Location: sales_Main.php");
}else if(isset($_SESSION["ship_id"])){ //if login in session is not set
    header("Location: ship_Main.php");
}
else{
    header("Location: Login.php");
}
?>