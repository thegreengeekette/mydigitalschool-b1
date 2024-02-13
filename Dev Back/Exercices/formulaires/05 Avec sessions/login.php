<!-- Si l'utilisateur/trice n'est pas identifié(e), on affiche le formulaire de connexion -->
<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
    <form action="submit_login.php" method="POST">
        <!-- Si un message d'erreur est présent, on l'affiche dans une alerte de danger -->
        <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    // Affiche le message d'erreur
                    echo $_SESSION['LOGIN_ERROR_MESSAGE'];
                    // Nettoie la variable de session après affichage du message
                    unset($_SESSION['LOGIN_ERROR_MESSAGE']);
                ?>
            </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@example.com">
            <div id="email-help" class="form-text">L'email utilisé lors de la création du compte.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <!-- Si l'utilisateur/trice est bien connecté(e), on affiche un message de succès -->
<?php else : ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $_SESSION['LOGGED_USER']['email']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>
<!-- Si l'utilisateur/trice est bien connecté(e), on affiche le bouton de déconnexion -->
<?php if (isset($_SESSION['LOGGED_USER'])) : ?>
    <a class="nav-link" href="logout.php">Déconnexion</a>
<?php endif; ?>