<?php


$servername = "127.0.0.1";
$username = "root@localhost";
$password = "NO";
$dbname = "fruit for sell";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM your_table");

?>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php
mysqli_close($conn);
?>
