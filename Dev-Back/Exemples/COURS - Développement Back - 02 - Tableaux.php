<?php
    echo "<h2>Tableaux numérotés</h2>";
    /* 
    Tableaux numérotés 
    Les tableaux numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. 
    Chaque élément du tableau contiendra alors un prénom.
    */
    $books[0] = 'Le Comte de Monte-Cristo';
    $books[1] = '1984';
    $books[2] = 'Orgueil et Préjugés';
    $books[3] = 'L\'Étranger';

    for ($i = 0; $i <= count($books) - 1; $i++)
        echo $books[$i]."<br>";

    $books[] = 'Le Comte de Monte-Cristo'; // Créera $books[0]
    $books[] = '1984'; // Créera $books[1]
    $books[] = 'Orgueil et Préjugés'; // Créera $books[2]
    $books[] = 'L\'Étranger'; // Créera $books[3]

    echo "<h2>Tableaux associatifs</h2>";
    /* 
    Tableaux associatifs 
    Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. 
    Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…
    */

    $book['title'] = 'Le Comte de Monte-Cristo';
    $book['author'] = 'Alexandre Dumas';
  
    /*
    Définissez un tableau en PHP contenant quatre livres. 
    Chaque livre devrait avoir un titre et un auteur.
    Utilisez une boucle pour parcourir le tableau de recettes.
    Pour chaque livre, affichez le titre et l'auteur dans des balises HTML appropriées.
    */
    $books = [
        [
            'title' => 'Le Comte de Monte-Cristo',
            'author' => 'Alexandre Dumas',
        ],
        [
            'title' => '1984',
            'author' => 'George Orwell',
        ],
        [
            'title' => 'Orgueil et Préjugés',
            'author' => 'Jane Austen',
        ],
        [
            'title' => 'L\'Étranger',
            'author' => 'Albert Camus',
        ],
    ];

    // Afficher le tableau de livres
    echo '<table border="1">';
    echo '<tr><th>Titre</th><th>Auteur</th></tr>';

    foreach ($books as $book) {
        echo '<tr>';
        echo '<td>' . $book['title'] . '</td>';
        echo '<td>' . $book['author'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    echo "<h2>print_r</h2>";
    /* 
    Si vous n'avez pas besoin d'une mise en forme spéciale et que vous voulez juste savoir ce que contient le tableau, 
    vous pouvez faire appel à la fonction print_r. C'est une sorte de echo  spécialisé dans les tableaux.
    Il faut utiliser la balise HTML <pre> pour avoir un affichage plus correct.
    */
    echo '<pre>';
    print_r($books);
    echo '</pre>';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Affichage des livres</title>
    </head>
    <body>
        <ul>
            <?php for ($i = 0; $i <= 3; $i++) : ?>
                <li><?php echo $books[$i]['title'] . ' (' . $books[$i]['author'] . ')'; ?></li>
            <?php endfor; ?>
        </ul>
    </body>
</html>


<?php

    echo "<h2>array_key_exists()</h2>";
    /* Vérifier si une clé existe dans un tableau avec array_key_exists */
    if (array_key_exists('title', $books))
        echo 'La clé "title" existe.<br>';
    else
        echo 'La clé "title" n\'existe pas.<br>';

    if (array_key_exists('commentaires', $books))
        echo 'La clé "commentaires" existe.<br>';
    else
        echo 'La clé "commentaires" n\'existe pas.<br>';

    echo "<h2>in_array()</h2>";
    /* Vérifier si une valeur existe dans un tableau avec in_array */
    $bookExists = false;
    foreach ($books as $book) {
        if ($book['title'] === '1984') {
            $bookExists = true;
            break;
        }
    }

    if ($bookExists) 
        echo 'Ce livre existe bien.<br>';
    else 
        echo 'Ce livre n\'existe pas.<br>';

    echo "<h2>array_search()</h2>";
    /*  Récupérer la clé d'une valeur dans un tableau avec array_search 
    Voici ce que renvoie la fonction :
    Si elle a trouvé la valeur, array_search renvoie la clé correspondante 
    (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).
    Si elle n'a pas trouvé la valeur, array_search renvoie false  .*/

    // Chercher la position de l'auteur 'Jane Austen'
    $position = array_search('Jane Austen', array_column($books, 'author'));

    // Vérifier si l'auteur a été trouvé
    if ($position !== false) {
        echo 'Jane Austen se trouve en position ' . $position . PHP_EOL;
    } else {
        echo 'Jane Austen n\'a pas été trouvé dans le tableau.' . PHP_EOL;
    }

    echo "<h2>DATE</h2>";
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $hour = date('H');
    $minute = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
    echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour. ' h ' . $minute;

    echo "<h2>EXERCICE</h2>";
    /*
    Rajouter les propriétés "isAvailable", "dateOfBooking", "endDateOfBooking"
    A partir d'un tableau de livres, cherchez lesquels sont disponibles et les réserver pour 3 semaines
    */
    $books = [
        [
            'title' => 'Le Comte de Monte-Cristo',
            'author' => 'Alexandre Dumas',
            'isAvailable' => '1',
            'dateOfBooking' => 'NULL',
            'endDateOfBooking' => 'NULL',
        ],
        [
            'title' => '1984',
            'author' => 'George Orwell',
            'isAvailable' => '0',
            'dateOfBooking' => 'NULL',
            'endDateOfBooking' => 'NULL',
        ],
        [
            'title' => 'Orgueil et Préjugés',
            'author' => 'Jane Austen',
            'isAvailable' => '0',
            'dateOfBooking' => 'NULL',
            'endDateOfBooking' => 'NULL',
        ],
        [
            'title' => 'L\'Étranger',
            'author' => 'Albert Camus',
            'isAvailable' => '1',
            'dateOfBooking' => 'NULL',
            'endDateOfBooking' => 'NULL',
        ],
    ];

    setlocale(LC_TIME, 'fr_FR');
    // Livres à rechercher
    $booksToFind = ['1984', 'Le Comte de Monte-Cristo'];

    // Parcourir le tableau pour trouver les livres
    foreach ($booksToFind as $bookToFind) {
        $found = false; // Variable pour indiquer si le livre a été trouvé
        foreach ($books as &$book) {
            if ($book['title'] === $bookToFind && $book['isAvailable'] === '1') {
                // Le livre est disponible, mettre à jour les informations
                $book['isAvailable'] = '0';
                $book['dateOfBooking'] = date('d-m-Y');
                // Calculer la date de fin de réservation dans 3 semaines
                $endDate = date('d-m-Y', strtotime('+3 weeks'));
                $book['endDateOfBooking'] = $endDate;
                echo 'Le livre "' . $bookToFind . '" a été réservé avec succès jusqu\'au ' . $endDate.'.';
                $found = true;
                break; // Arrêter la boucle après la réservation
            } elseif ($book['title'] === $bookToFind && $book['isAvailable'] === '0') {
                // Le livre n'est pas disponible
                echo 'Le livre "' . $bookToFind . '" n\'est pas disponible pour réservation.<br>';
                $found = true;
                break; // Arrêter la boucle après la vérification
            }
        }

        // Afficher un message si le livre n'a pas été trouvé
        if (!$found) {
            echo 'Le livre "' . $bookToFind . '" n\'a pas été trouvé dans le tableau.<br>';
        }
    }

    echo "<h2>AVEC DES FONCTIONS</h2>";
   
    // Livres à rechercher
    $booksToFind = ['L\'Étranger'];

    /**
     * Réserve un livre en mettant à jour les informations.
     *
     * @param array   $book       Le livre à réserver.
     * @param string  $startDate  La date de début de réservation.
     * @param string  $endDate    La date de fin de réservation.
     */
    function bookReservation(array &$book, string $startDate, string $endDate): void {
        $book['isAvailable'] = '0';
        $book['dateOfBooking'] = $startDate;
        $book['endDateOfBooking'] = $endDate;
        echo 'Le livre "' . $book['title'] . '" a été réservé avec succès jusqu\'au ' . $endDate . '.' . PHP_EOL;
    }

    /**
     * Affiche un message indiquant qu'un livre n'est pas disponible pour réservation.
     *
     * @param string $bookTitle Le titre du livre.
     */
    function bookNotAvailableMessage(string $bookTitle): void {
        echo 'Le livre "' . $bookTitle . '" n\'est pas disponible pour réservation.' . PHP_EOL;
    }

    /**
     * Affiche un message indiquant qu'un livre n'a pas été trouvé dans le tableau.
     *
     * @param string $bookTitle Le titre du livre.
     */
    function bookNotFoundMessage(string $bookTitle): void {
        echo 'Le livre "' . $bookTitle . '" n\'a pas été trouvé dans le tableau.' . PHP_EOL;
    }

    /**
     * Vérifie si un livre est disponible.
     *
     * @param string $bookTitle Le titre du livre à vérifier.
     * @param array  $books     Le tableau de livres.
     *
     * @return bool True si le livre est disponible, sinon false.
     */
    function isBookAvailable(string $bookTitle, array $books): bool {
        foreach ($books as $book) {
            if ($book['title'] === $bookTitle && $book['isAvailable'] === '1') {
                return true; // Le livre est disponible
            }
        }
        return false; // Le livre n'est pas disponible ou n'a pas été trouvé
    }

    /**
     * Trouve et réserve des livres à partir d'une liste.
     *
     * @param array  $booksToFind La liste des livres à trouver et réserver.
     * @param array  $books       Le tableau de livres.
     */
    function findAndReserveBooks(array $booksToFind, array &$books): void {
        foreach ($booksToFind as $bookToFind) {
            if (isBookAvailable($bookToFind, $books)) {
                $found = false;
                foreach ($books as &$book) {
                    if ($book['title'] === $bookToFind) {
                        $startDate = date('d-m-Y');
                        $endDate = date('d-m-Y', strtotime('+3 weeks'));
                        bookReservation($book, $startDate, $endDate);
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    bookNotFoundMessage($bookToFind);
                }
            } else {
                bookNotAvailableMessage($bookToFind);
            }
        }
    }

    findAndReserveBooks($booksToFind, $books);    
        
?>