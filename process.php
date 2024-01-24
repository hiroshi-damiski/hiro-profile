<?php

require_once __DIR__ . "/helpers.php";

session_start();

$redirectUrl = route();

$action = isset($_GET['action']) ? $_GET['action'] : null;

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: ' . $redirectUrl);
}

if($action == 'login'){

}elseif($action == 'register'){

}

switch ($action) {

    case 'login':

        $email = null;
        $password = null;

        $redirectUrl = route("/login.php");

        // Form data validation
        try {

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                throw new Exception("Email is required.");
            }

            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                throw new Exception("Password is required.");
            }

        } catch (Exception $e) {

            $_SESSION['action_response'] = [
                'status' => false,
                'message' => $e->getMessage(),
            ];

            break;
        }

        // User login
        try {

            require_once __DIR__ . "/db/connection.php";

            // Retrieve user data from the database based on the email
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Check if the user exists and the password is correct
            if ($user && password_verify($password, $user['password'])) {

                $redirectUrl = route("/profile.php");

                $_SESSION['action_response'] = [
                    'status' => true,
                    'message' => "Login successful! Welcome, {$user['name']}.",
                ];

                setcookie('user-id', $user['id'], time() + 3600, '/');

            } else {

                $_SESSION['action_response'] = [
                    'status' => false,
                    'message' => 'Credentials do not match!',
                ];
            }

        } catch (PDOException $e) {

            $_SESSION['action_response'] = [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }

        break;

    case 'register':

        $name = null;
        $email = null;
        $password = null;

        $redirectUrl = route("/register.php");

        // Form data validation
        try {

            if (isset($_POST['name'])) {
                $name = $_POST['name'];
            } else {
                throw new Exception("Name is required.");
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                throw new Exception("Email is required.");
            }

            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                throw new Exception("Password is required.");
            }

            $password = password_hash($password, PASSWORD_DEFAULT);

        } catch (Exception $e) {

            $_SESSION['action_response'] = [
                'status' => false,
                'message' => $e->getMessage(),
            ];

            break;
        }

        // User registration
        try {

            require_once __DIR__ . "/db/connection.php";

            // Insert data into the database
            $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$name, $email, $password]);

            // Fetch user data after insertion
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $redirectUrl = route("/profile.php");

            $_SESSION['action_response'] = [
                'status' => true,
                'message' => 'Registration successful!',
            ];

            setcookie('user-id', $user['id'], time() + 3600, '/');

        } catch (PDOException $e) {

            if ($e->getCode() == '23000') {

                $_SESSION['action_response'] = [
                    'status' => false,
                    'message' => "Email address already exists.",
                ];

            } else {

                $_SESSION['action_response'] = [
                    'status' => false,
                    'message' => $e->getMessage(),
                ];

            }
        }

        break;
}

header('Location: ' . $redirectUrl);