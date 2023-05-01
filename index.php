<?php
    include_once 'includes/DPH.in.php'  
?>

<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: white;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"> Exotic Fruits </a>
  <div class="header-right">
    <a href= "fruit.html">Fruits</a>
    <a href="orders.html">Orders</a>
  </div>
</div>
<style>
    body {
        background-image: url ('fruits.jpg');
        background-size: cover;
      }
</style>
  </head>
   
    <body>
        <form action="DPH.php" method="get">
      <label for="search">Search:</label>
      <input type="text" name="search" id="search">
      <button type="submit">Search</button>
        </form>
$conn;
    </body>
</html>
