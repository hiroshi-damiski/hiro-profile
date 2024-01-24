<?php

function route(string $baseUrl = "/")
{

    // Check if the request is using HTTPS
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

    // Get the server name (domain) from the request
    $host = $_SERVER['HTTP_HOST'];

    $hostUrl = $protocol . $host . $baseUrl;

    return $hostUrl;
}

function authenticate(string $redirectUrl = '/', string $cookie = 'user-id')
{
    $redirectUrl = route($redirectUrl);

    // Retrieve the user ID from the cookie
    if (isset($_COOKIE[$cookie])) {

        $userId = $_COOKIE[$cookie];

        // User authentification
        try {

            require_once __DIR__ . "/db/connection.php";

            // Retrieve user data from the database based on the email
            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$userId]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;

        } catch (PDOException $e) {

            $_SESSION['action_response'] = [
                'status' => false,
                'message' => $e->getMessage(),
            ];

            header('Location: ' . $redirectUrl);
        }

    } else {
        header('Location: ' . $redirectUrl);
    }
}