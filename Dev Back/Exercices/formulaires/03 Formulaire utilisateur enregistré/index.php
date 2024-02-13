<?php
    $users = [
        [
            'full_name' => 'Claire Simoes',
            'email' => 'claire.simoes@gmail.com',
            'age' => 35,
            'password' => '0123456789',
        ],
    ];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de connexion</title>
        <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                rel="stylesheet"
        >
    </head>
    <body class="d-flex flex-column min-vh-100">
        <div class="container">
            <h1>Formulaire de connexion</h1>
            <?php require_once(__DIR__ . '/login.php'); ?>
        </div>
    </body>
</html>
