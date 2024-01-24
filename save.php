<?php

session_start();

$email = $_POST['email'];

$password = $_POST['password'];

$_SESSION["email"] = $email;

$_SESSION["password"] = $password;

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="http://localhost:8080/profile.php">
        Open Profile
    </a>

</body>

</html>