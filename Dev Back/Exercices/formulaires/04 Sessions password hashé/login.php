<?php
session_start();

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les informations de connexion
    $username = 'claire';
    $hashedPassword = password_hash('123', PASSWORD_DEFAULT); // Hashage automatique du mot de passe

    if ($_POST['username'] == $username && password_verify($_POST['password'], $hashedPassword)) {
        // Authentification réussie, démarrer la session
        $_SESSION['username'] = $_POST['username'];
        header('Location: index.php'); // Rediriger vers la page d'accueil
        exit;
    } else {
        $errorMessage = 'Identifiants incorrects. Veuillez réessayer.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Se connecter">
    </form>
    <?php
    if (isset($errorMessage)) {
        echo "<p>$errorMessage</p>";
    }
    ?>
</body>
</html>