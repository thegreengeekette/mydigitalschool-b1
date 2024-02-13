# To-Do Liste sans base de données (stockage en fichier JSON)

Le terme "application web" est ici employé pour parler de notre site web. :)

## Fonctionnalités attendues :
- L'application web doit possèder un header avec un menu permettant d'accèder à ses différentes pages : login/logout, profil (lorsque la personne est connectée), to-do-liste affichée par défaut.
- La page d'accueil doit permettre la connexion d'un·e utilisateur·ice grâce à un identifiant (adresse mail) et un mot de passe sécurisé. Les utilisateur·ice·s de cette application web sont stocké·e·s dans un fichier externe JSON, avec les informations suivantes : identifiant unique, adresse mail, mot de passe, couleur de background choisie (thème clair ou thème sombre).
- Un système de session permet à l'utilisateur·ice de se connecter. Lorsque la personne est connectée, apparaît dans le menu la page "Profil" qui permet à l'utilisateur·ice de modifier son profil et de l'enregistrer. (cela implique de mettre à jour le fichier JSON des utilisateur·ice·s pour que les changements soient sauvegardés)
