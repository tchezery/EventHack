<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once'../connection.php';

    $id_adm = $_POST['id_adm'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $date_event = $_POST['date_event'];
    $date_payment = $_POST['date_payment'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (empty($id) || empty($name) || empty($address) || 
    empty($date_event) || empty($date_payment) || empty($date_payment)) {
        die('Is empty!');
    }

    $query = "INSERT INTO event (id_adm, name, address, date_event, date_payment, description, price) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $id, $name, $address, $date_event, $date_payment, $description, $price);
    $stmt->execute();
}
?>