# To-Do Liste sans base de données (stockage en fichier JSON)

Le terme "application web" est ici employé pour parler de notre site web. :)

## Fonctionnalités attendues :
- L'application web doit possèder un header avec un menu permettant d'accèder à ses différentes pages : login/logout, profil (lorsque la personne est connectée), to-do-liste affichée par défaut. Elle a également un footer qui affiche un copyright.
- La page d'accueil doit permettre la connexion d'un·e utilisateur·ice grâce à un identifiant (adresse mail) et un mot de passe sécurisé. Les utilisateur·ice·s de cette application web sont stocké·e·s dans un fichier externe JSON, avec les informations suivantes : identifiant unique, prénom, nom, genre, adresse mail, mot de passe, couleur de background choisie (thème clair ou thème sombre).
- Un système de session permet à l'utilisateur·ice de se connecter. Lorsque la personne est connectée, apparaît dans le menu la page "Profil" qui permet à l'utilisateur·ice de modifier chaque information de son profil et de l'enregistrer. (cela implique de mettre à jour le fichier JSON des utilisateur·ice·s pour que les changements soient sauvegardés)
- Une fois l'utilisateur·ice connectée, sa to-do-liste s'affiche automatiquement sur la page d'accueil. Sous forme de liste, chaque tâche a un intitulé, une date limite, un niveau de priorité, une catégorie et un niveau d'avancement (non commencé, en cours ou terminée). Seul le champ intitulé est obligatoire, les autres sont facultatifs, et le niveau d'avancement est par défaut non commencé. La date doit s'afficher soit un format date, le niveau de priorité ne peut être que "basse/moyenne/haute".
- Un formulaire en dessous de la liste des tâches permet de créer une nouvelle tâche.
- Chaque tâche a des liens/boutons permettant de la modifier ou la supprimer, ainsi qu'un menu déroulant permettant de modifier son niveau d'avancement. Quand on modifie, alors le contenu de la tâche se charge dans le formulaire en dessous qui sert également à créer une nouvelle tâche. Dans ce cas là l'intitulé du bouton "créer" de ce formulaire change pour devenir "modifier".

## Points d'attention :
- Offrez une interface utilisateur conviviale permettant de modifier le contenu des tâches existantes facilement. Le CSS est encouragé pour que votre design soit attractif, mais non obligatoire. L'important c'est le code PHP, même si vos compétences en UI/US seront appréciées en bonus.
- Assurez-vous que les tâches restent persistantes même après la fermeture et le redémarrage de l'application en lisant et en écrivant le contenu du fichier JSON au chargement et à la modification de la page, respectivement.
- Veillez à la validation des données entrées par les utilisateur·ice·s pour garantir la sécurité et l'intégrité des données stockées dans le fichier JSON.
- Votre code sera commenté pour les fonctionnalités importantes.

## Bonus :
- Créer une page pour gérer les catégories disponibles pour les tâches. Un formulaire permet de créer/modifier/supprimer une catégorie. Si on supprimer une catégorie et quelle avait des tâches assignées, il faut changer la catégorie de ces tâches restantes à "defaut". Ces catégories relatives à l'utilisateur·ice seront stockés dans le fichier JSON des utilisateur·ice·s dans le profil de l'utilisateur·ice qui est connecté·e.
- Une fonctionnalité de recherche permet aux utilisateur·ice·s de rechercher des tâches par mot-clé ou par date limite.
