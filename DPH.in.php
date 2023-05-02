<?php


$servername = "127.0.0.1";
$username = "root@localhost";
$password = "NO";
$dbname = "fruit for sell";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM exotics_fruit_inventory ORDER BY fruit_name ASC;");
$result = mysqli_query($conn, "SELECT `orders`.`order_id`, `order_details`.`fruit_id`, `exotics_fruit_inventory`.`fruit_name` FROM `orders` LEFT JOIN `order_details` ON `order_details`.`order_id` = `orders`.`order_id` LEFT JOIN `exotics_fruit_inventory` ON `order_details`.`fruit_id` = `exotics_fruit_inventory`.`fruit_id` WHERE `exotics_fruit_inventory`.`fruit_name` = 'pineapple';");



mysqli_close($conn);
?>
