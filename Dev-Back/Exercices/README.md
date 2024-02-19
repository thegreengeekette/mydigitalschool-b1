# Exercices "Boucles & tableaux"

## EXERCICE 1

- Créer une variable qui stocke le nom de l'utilisateur et une autre variable qui stocke son prénom.
- Faire une concaténation entre les deux pour créer une variable qui stocke le nom complet.
- Afficher à l'écran "Bonjour" puis le nom complet.

## EXERCICE 2

- Créer 3 variables stockant le prix de 3 articles et une variable avec la devise.
- Afficher (grâce à echo) le contenu du panier qui contient les 3 prix ajoutés les uns aux autres avec la devise choisie.

## EXERCICE 3

- Créer un tableau à double entrée où il y a une chausette qui coûte 3€, un pull qui coûte 30€ et des chaussures qui coûtent 50€.
- Grâce à une boucle for, afficher le tableau à double entrée.

## EXERCICE 4

- Créer un tableau associatif qui associe une valeur (à droite de la =>) à un attribut (à gauche).
- En reprenant le tableau précédent, il y aura désormais 3 attributs : nomArticle, prixArticle, stockArticle.
- Si le compte des articles présents dans la liste est supérier à 0, affichez un message de disponobilité, sinon afficher une erreur.
- Parcourir le tableau (avec une boucle for) et écrire pour chaque article "L'article **\_** coûte **\_**€."
- Créer un variable avec un article à chercher et boucler sur le tableau pour chercher une correspondance.
- Pour cela comparer le nom de chaque article de la liste et la variable de l'article à chercher.
- Si on le trouve enlever 1 du stock et mettre à jour la liste qu'on affiche à nouveau.

# Exercices "Lecture & écriture de fichiers"

## EXERCICE 1

- Stocker le nom du fichier dans une variable qui soit une chaîne de caractères.
- Avec la fonction fopen (https://www.php.net/manual/fr/function.fopen.php), ouvrir le fichier en mode écriture + lecture.
- Si le fichier n'existe pas il doit être créé automatiquement.
- Avec la fonction fwrite (https://www.php.net/manual/fr/function.fwrite.php) écrire dans le ficher et récupérer le nombre d'octets écrits dans le fichier pour l'afficher.
- Avec la fonction fclose, refermer le fichier pour libérer la mémoire.

## EXERCICE 2

- Vérifier qu'un fichier existe avec la fonction file_exists (https://www.php.net/manual/fr/function.file-exists.php).
- Récupérer la taille d'un fichier avec filesize (https://www.php.net/manual/fr/function.filesize.php)
- Lire un fichier avec fread (https://www.php.net/manual/fr/function.fread.php)   