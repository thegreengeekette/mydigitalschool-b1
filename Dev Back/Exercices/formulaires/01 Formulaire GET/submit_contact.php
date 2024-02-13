<?php
    // Récupération des données du formulaire GET dans la variable $getData
    $getData = $_GET;
    // Vérification des conditions pour valider les données du formulaire
    if (
        !isset($getData['email']) // Vérifie si la clé 'email' est définie
        || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL) // Vérifie si l'email est au format valide
        || empty($getData['message']) // Vérifie si la clé 'message' n'est pas vide
        || trim($getData['message']) === '' // Vérifie si le message n'est pas vide après suppression des espaces
    ) {
        // Affichage d'un message d'erreur si les conditions ne sont pas remplies
        echo('Il faut un email et un message valides pour soumettre le formulaire.');
        return; // Arrêt de l'exécution du script
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact reçu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Message bien reçu !</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informations envoyées :</h5>
                    <p class="card-text"><b>Email</b> : <?php echo($getData['email']); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo($getData['message']); ?></p>
                </div>
            </div>
        </div>
    </body>
</html>