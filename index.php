<?php

require_once __DIR__ . "/helpers.php";

session_start();

?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hiro Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="p-6">

    <h1 class="text-xl font-semibold mb-2 block">Welcome to Hiro Profile!</h1>

    <a href="<?= route('/login.php') ?>" class="text-base text-blue-700 mb-1 block">Login Now</a>

    <a href="<?= route('/register.php') ?>" class="text-base text-blue-700 mb-1 block">Register Now</a>

  </div>
</body>

</html>