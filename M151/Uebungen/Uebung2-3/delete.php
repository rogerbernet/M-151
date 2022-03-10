<?php
$id = $_GET["id"];
if(!$id){
    die();
}else{
    ?>
    <h1>Bestellung Gelöscht</h1>
    <?php
    loschen();
    header("Location: http://localhost:8001");
}
function loschen(){
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
    $sql="DELETE FROM order_details WHERE order_details.order_id = :id;";
    $statement = $conn->prepare($sql);
    $params = [
        ':id' => $id
    ];
    $statement->execute($params);
    $sql="DELETE FROM invoices WHERE invoices.order_id = :id;";
    $statement = $conn->prepare($sql);
    $params = [
    ':id' => $id
    ];
    $statement->execute($params);
    $sql="DELETE FROM orders WHERE orders.id = :id;";
    $statement = $conn->prepare($sql);
    $params = [
    ':id' => $id
    ];
    $statement->execute($params);
    

}
?>