<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";



try {
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);



$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//if etwas falsch => exeption (php wird gemeldet)
echo "Connected successfully <br><br>";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
die();
}
?>
<form action="post">
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
<input></input>
</form>


<a href="hinzufuegen.php"></a>
<table>
<tr>
<th>Id</th>
<th>Vorname</th>
<th>Nachname</th>
<th>Bestellung</th>
</tr>
<?php
$sql = "SELECT * FROM customers;";
foreach ($conn->query($sql) as $row) {
?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['first_name']; ?></td>
<td><?= $row['last_name']; ?></td>
<td><a href="bestellungen.php?id=<?=$row["id"]?>">Bestellungen</a></td>
</tr>
<?php
}
?>
</table>