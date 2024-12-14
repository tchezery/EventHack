<?php
session_start();

if (!isset($_SESSION["name"]) || !isset($_SESSION["id"])) {
    header("Location: ../login/login.php");
    exit;
}

$name = $_SESSION['name'];
$id = $_SESSION['id'];
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
        <div class="sampling" id="sampling">

        </div>
        <div class="footContainer">
            <div class="eventSubscribed" id="eventSubscribed">

            </div>
            <button class="buttonCreate" id="buttonCreate">
                <div class="nameCreate">
                    <p>Create Event</p>
                </div>
                
                <div class="iconCreate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </div>
            </button>
        </div>
    </div>
    <div class="placeCreateEvent" id="plpaceCreateEvent">
        <form action="home_inviteForm.php" method="post" class="craftForm" id="craftForm">
            <input type="hidden" name="form_type" value="craftForm">
            <input type="hidden" name="id_adm" id="id_adm" value="<?php echo $id ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
            <label for="date_event">Event Date:</label>
            <input type="date" name="date_event" id="date_event">
            <label for="date_payment">Payment Date:</label>
            <input type="date" name="date_payment" id="date_payment">
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" id="price">
            <button type="submit">send</button>        
        </form>
    </div>
</body>
</html>