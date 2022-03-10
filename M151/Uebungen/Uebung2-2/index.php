<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully<br><br><br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<lu>
<?php
$sql = "SELECT * FROM customers";
foreach($conn->query($sql) as $row){
    echo "Id: ".$row["id"]." ";
    echo "Company: ".$row["company"]." ";
    echo "Firstname: ".$row["first_name"]."<br>";
}
?>
</lu>