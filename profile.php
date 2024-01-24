<?php

require_once __DIR__ . "/helpers.php";

session_start();

$user = authenticate('/login.php', 'user-id');

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="p-6">

        <div>
            <!-- action response -->
            <?php
            if (isset($_SESSION['action_response'])) {

                if ($_SESSION['action_response']['status']) {
                    $class = "bg-green-50 border-green-700 text-green-700";
                } else {
                    $class = "bg-red-50 border-red-700 text-red-700";
                }

                echo '<div class="mb-3 p-2 border ' . $class . '">' . $_SESSION['action_response']['message'] . '</div>';

                unset($_SESSION['action_response']);
            }
            ?>
        </div>

        <div class="text-xl font-semibold text-black">Your Profile</div>
        <div class="mt-2">
            <div class="text-sm text-gray-400">Name:
                <span class="text-gray-600">
                    <?= $user['name'] ?>
                </span>
            </div>
            <div class="text-sm text-gray-400">Email:
                <span class="text-gray-600">
                    <?= $user['email'] ?>
                </span>
            </div>
            <div class="text-sm mt-2">
                <a href="<?= route('/logout.php') ?>" class="text-blue-700 mb-1 block">Logout</a>
            </div>
        </div>
    </div>

</body>

</html>