<?php
include 'db.php';

$name = $_POST['name'];
$address = $_POST['address'];
$item = $_POST['item'];
$qty = $_POST['qty'];
$payment = $_POST['payment'];

$sql = "INSERT INTO orders (name, address, item, qty, payment)
VALUES ('$name', '$address', '$item', '$qty', '$payment')";

if ($conn->query($sql) === TRUE) {
    echo "Order Successful!";
} else {
    echo "Error";
}
?>