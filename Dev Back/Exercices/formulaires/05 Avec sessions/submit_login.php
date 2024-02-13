<?php
    $users = [
        [
            'full_name' => 'Claire Simoes',
            'email' => 'claire.simoes@gmail.com',
            'age' => 35,
            'password' => '0123456789',
        ],
    ];
    
    function redirectToUrl(string $url): never
    {
        header("Location: {$url}");
        exit();
    }

    // Démarre une session PHP
    session_start();

    // Récupère les données POST dans une variable
    $postData = $_POST;

    // Validation du formulaire : s'il y a bien un email et un mot de passe
    if (isset($postData['email']) &&  isset($postData['password'])) {
        // Vérifie si l'email est valide en utilisant FILTER_VALIDATE_EMAIL
        if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
            // Stocke un message d'erreur dans la session si l'email n'est pas valide
            $_SESSION['LOGIN_ERROR_MESSAGE'] = 'Il faut un email valide pour soumettre le formulaire.';
        } else {
            // Boucle à travers la liste des utilisateurs 
            foreach ($users as $user) {
                // Vérifie si l'email et le mot de passe correspondent à un utilisateur existant
                if (
                    $user['email'] === $postData['email'] &&
                    $user['password'] === $postData['password']
                ) {
                    // Stocke les informations de l'utilisateur dans la session s'il est identifié
                    $_SESSION['LOGGED_USER'] = [
                        'email' => $user['email'],
                        'user_id' => $user['user_id'],
                    ];
                }
            }

            // Vérifie si l'utilisateur a été identifié, sinon stocke un message d'erreur
            if (!isset($_SESSION['LOGGED_USER'])) {
                // Utilise sprintf pour générer un message d'erreur avec les valeurs de l'email et du mot de passe
                $_SESSION['LOGIN_ERROR_MESSAGE'] = sprintf(
                    // Chaîne de format avec deux espaces réservés (%s) pour les valeurs de l'email et du mot de passe
                    'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                    // Première valeur : l'email provenant du formulaire
                    $postData['email'],
                    // Deuxième valeur : le mot de passe avec les balises HTML retirées
                    strip_tags($postData['password'])
                );
            }
        }

        // Redirige vers la page 'index.php'
        redirectToUrl('index.php');
    }