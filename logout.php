<?php

require_once __DIR__ . "/helpers.php";

session_start(); // Start the session

// Clear all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Clear user id cookie
setcookie('user-id', '', time() - 3600, '/'); // set expiration time in the past

$redirectUrl = route('/login.php');

// Redirect or perform any other actions after clearing sessions and cookie
header("Location: $redirectUrl");

exit();