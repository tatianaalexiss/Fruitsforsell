<?php


$servername = "localhost";
$username = "root@localhost";
$password = "NO";
$dbname = "fruit for sell";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql_queries = $_POST['sql_queries'];

if (mysqli_multi_query($conn, $sql_queries)) {
  echo "SQL queries executed successfully";
} else {
  echo "Error executing SQL queries: " . mysqli_error($conn);
}
?>


