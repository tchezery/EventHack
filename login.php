<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once'connection.php';

    $form_type = $_POST['form_type'];

    switch ($form_type) {
        case 'userSignIn':
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                
                if ($password === $user["password"]) {
                    $_SESSION["id"] = $user["id"];
                    $_SESSION["name"] = $user["name"];
                    header("Location: home.php");
                    exit;
                } else {
                    echo "Incorrect PassWorld!";
                }
            } else {
                echo "Not Found This Email, bru!";
            }
        break;    

        case 'userSignUp':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            if (empty($name) || empty($email) || empty($phone) || empty($password)) {
                die('Nha, is empty, bro!');
            }

            $query = "INSERT INTO user (name, email, phone, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssss", $name, $email, $phone, $password);
            $stmt->execute();
        break;

        case 'admSignIn':
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM adm WHERE email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $adm = $result->fetch_assoc();

                if ($password === $adm["password"]) {
                    $_SESSION["id"] = $adm["id"];
                    $_SESSION["name"] = $adm["name"];
                    header("Location: home.php");
                }  else {
                    echo "Incorrect PassWorld!";
                } 
            } else {
                echo "Not Found This Email, bru!";
            }
        break;

        case 'admSignUp':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($name) || empty($email) || empty($password)) {
                die('Nha, is empty, bro!');
            } 

            $query = "INSERT INTO adm (name, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sss', $name, $email, $password);
            $stmt->execute();
        break;

        default: 
            echo "Form do not found!";
    }
}
?>
