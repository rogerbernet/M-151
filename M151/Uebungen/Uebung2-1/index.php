<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";

$conn = mysqli_connect($servername, $username, $password, 'northwind');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";


$sql = "SELECT * FROM customers;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo $result->num_rows . " Resultate";
  
} else {

  echo "Keine Resultate vorhanden";
}

mysqli_close($conn);
?>