<?php

require_once __DIR__ . "/helpers.php";

session_start();

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hiro Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <h1 class="text-xl font-semibold mx-auto w-fit mt-6">
        Login User
    </h1>

    <form action="<?= route('/process.php?action=login') ?>" method="post" class="p-6 mx-auto w-fit">

        <div>
            <!-- action response -->
            <?php
            if (isset($_SESSION['action_response']) && !$_SESSION['action_response']['status']) {

                echo '<div class="mb-2 p-2 bg-red-50 border border-red-700 text-red-700">' . $_SESSION['action_response']['message'] . '</div>';

                unset($_SESSION['action_response']);
            }
            ?>
        </div>

        <input type="email" name="email" placeholder="Email" class="border px-2 py-3 block mb-2">

        <input type="password" name="password" placeholder="Password" class="border px-2 py-3 block mb-2">

        <button type="submit" class="border px-2 py-3 bg-gray-50 block cursor-pointer">Login</button>

    </form>

</body>

</html>