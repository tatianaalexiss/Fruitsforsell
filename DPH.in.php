<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fruit for sell";


$conn = mysqli_connect ($dbservername, $dbusername, $dbpassword, $dbname);



if (isset($_GET['search'])) {
  $search = $_GET['search'];
  // TODO: process the search query
  echo "You searched for: " . $search;
}



