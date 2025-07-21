<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $product = htmlspecialchars($_POST['product']);
    $payment = htmlspecialchars($_POST['payment']);

    // Save order to a text file (orders.txt)
    $order = "Name: $name\nPhone: $phone\nAddress: $address\nProduct: $product\nPayment: $payment\n---\n";
    file_put_contents("orders.txt", $order, FILE_APPEND);

    // Redirect to success page
    header("Location: success.php");
    exit();
} else {
    // If not submitted by form, redirect to cancel page
    header("Location: cancel.php");
    exit();
}
?>