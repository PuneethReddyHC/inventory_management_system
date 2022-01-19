<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "order_mgmt";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// $servername = "ordermgmtproj.cnmo0b9trdmj.us-east-1.rds.amazonaws.com";
// $username = "admin";
// $password = "3UPSGKkHacEkrMwF73xd";
// $db = "order_mgmt";
// try {
//   $con = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
//   // set the PDO error mode to exception
//   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

?>