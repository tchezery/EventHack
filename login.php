<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once'connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    
}
?>