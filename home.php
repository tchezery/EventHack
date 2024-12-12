<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home-EventHack</title>
</head>
<body>
    <div class="navBar" id="navBa">
        <div class="logo" id="logo">

        </div>
        <div class="anchorBar" id="anchorBar">

        </div>
        <div class="perfil" id="perfil">
            <p>
                <?php 
                    echo $name;
                ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="createEvent" id="createEvent">
        
        </div>
        <div class="filter" id="filter">

        </div>
        <div class="sampling" id="sampling">

        </div>
        <div class="eventSubscribed" id="eventSubscribed">

        </div>       
    </div>
</body>
</html>