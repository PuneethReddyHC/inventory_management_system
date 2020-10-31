<?php
include "include/db.php";

session_start();
#Login script is begin here
#If user given credential matches successfully with the data available in database then we will echo string login_success
#login_success string will go back to called Anonymous funtion $("#login").click() 

if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = $_POST["password"];
	$sql = "SELECT * FROM cust WHERE email_id = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);
	
	$ip_add = getenv("REMOTE_ADDR");
		//we have created a cookie in login_form.php page so if that cookie is available means user is not login
    
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
            $_SESSION["custid"] = $row["custid"];
            $_SESSION["c_name"] = $row["c_name"];
			//if user is login from page we will send login_success
			echo "login_success";
			echo "<script> location.href='Customer.php'; </script>" ;// default page

            exit;
            

		}else{
                if( $_POST["email"] =="inventory@gmail.com" && $_POST["password"] =='inventory@123' ){
                    $_SESSION["inventory_id"] = "1";
                    $_SESSION["inventory_name"] = "inventory";
                    echo "<script> location.href='inventory_Main.php'; </script>";
                }else if($_POST["email"] =="salesperson@gmail.com" && $_POST["password"] =='salesperson@123' ){
                    $_SESSION["sales_id"] = "1";
                    $_SESSION["sales_name"] = "Inventory";
                    echo "<script> location.href='sales_Main.php'; </script>";
                }
                else if($_POST["email"] =="shippement@gmail.com" && $_POST["password"] =='shippement@123' ){
                    $_SESSION["ship_id"] = "1";
                    $_SESSION["ship_name"] = "Shippement";
                    echo "<script> location.href='ship_Main.php'; </script>";
                }else{
                    echo "<script> location.href='Login.php'; </script>";
                }
    
	
}
    
	
}

?>