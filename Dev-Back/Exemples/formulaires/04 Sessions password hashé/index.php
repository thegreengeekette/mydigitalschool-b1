<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<h1>Bienvenue, $username !</h1>";
    echo '<a href="logout.php">Se déconnecter</a>';
} else {
    echo '<h1>Page d\'accueil</h1>';
    echo '<a href="login.php">Se connecter</a>';
}
?>