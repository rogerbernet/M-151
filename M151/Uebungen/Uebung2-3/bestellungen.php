<?php
if(isset($_GET["id"])){
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
    $id = $_GET["id"];
    $sql="SELECT * FROM orders WHERE customer_id = :id";
    $statement = $conn->prepare($sql);
    $params = [
        ':id' => $id
    ];
    $statement->execute($params);
    $result = $statement->fetchAll();
    ?>
    <table>
    <tr>
        <th>Id</th>
        <th>Order_date</th>
        <th>Ship_date</th>
        <th>Name</th>
        <th>Shipping fee</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($result as $order)
    {
        ?>
            <tr>
                <td><?= $order["id"]?></td>
                <td><?= $order["order_date"]?></td>
                <td><?= $order["shipped_date"]?></td>
                <td><?= $order["ship_name"]?></td>
                <td><?= $order["shipping_fee"]?></td>
                <td><a href="delete.php?id=<?=$order["id"]?>">Delete</a></td>
            </tr>
        <?php
    }

}


?>
</table>