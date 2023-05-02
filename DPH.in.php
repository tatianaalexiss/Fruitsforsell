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


mysqli_close($conn);
?>
