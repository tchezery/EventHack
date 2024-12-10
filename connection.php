<?php 
$hostnome = "localhost";
$username = "root";
$password = "";
$database_name = "EventHack";

$conn = new mysqli($hostnome, $username, $password, $database_name);    

if ($conn->connect_error) {
    die("BRUH, Connection Failed:". $conn->connect_error);  
} else {
    echo "LEG'S GOOOOOO!";
}
?>