<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<h2>All Orders</h2>

<?php
$result = $conn->query("SELECT * FROM orders");

while($row = $result->fetch_assoc()){
    echo $row['name']." - ".$row['item']." - ".$row['qty']."<br>";
}
?>==