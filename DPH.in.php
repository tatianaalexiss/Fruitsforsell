<?php


$servername = "localhost";
$username = "root@localhost";
$password = "NO";
$dbname = "fruit for sell";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql_file = file_get_contents("https://raw.githubusercontent.com/tatianaalexiss/Fruitsforsell/main/127_0_0_1.sql");
$conn->multi_query($sql_file);


$conn->close();



