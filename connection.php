<?php 
$hostnome = "localhost";
$username = "root";
$password = "";
$database_name = "EventHack";

$conn = new mysqli($hostnome, $username, $password, $database_name);    

if ($conn->connect_error) {
    die("Connection Failed:". $conn->connect_error);  
}
?>