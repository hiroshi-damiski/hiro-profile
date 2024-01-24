<?php

session_start();

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
        <div class="text-xl font-semibold text-black">Your Profile</div>
        <div>
            <div class="text-sm text-gray-400">Email:
                <?php echo $_SESSION["email"] ?>
            </div>
            <div class="text-sm text-gray-400">Password:
                <?php echo $_SESSION["password"] ?>
            </div>
        </div>
    </div>

</body>

</html>