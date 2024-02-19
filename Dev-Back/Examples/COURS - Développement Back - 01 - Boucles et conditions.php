<?php

    echo "<h2>BOUCLE FOR</h2>";
    /*
    La boucle for s'initialise avec $i égal à 1. Tant que la condition $i <= 5 est vraie, 
    le bloc de code à l'intérieur de la boucle est exécuté. 
    Après chaque itération, l'instruction $i++ incrémente la valeur de $i. 
    La boucle s'arrête lorsque la condition n'est plus vraie.
    */
    for ($i = 1; $i <= 5; $i++) {
        echo "Cette phrase est répétée " . $i . " fois.<br>";
    }

    echo "<h2>BOUCLE WHILE</h2>";
    /* 
    La boucle while s'exécute tant que la condition spécifiée est vraie.
    Ici, on affiche la phrase tant que la variable $compteur est inférieure ou égale à 5. 
    À chaque itération, le compteur est incrémenté.
    */
    $compteur = 1;
    while ($compteur <= 5) {
        echo "Cette phrase est répétée " . $compteur . " fois.<br>";
        $compteur++;
    }

    echo "<h2>BOUCLE DO WHILE</h2>";
    /* 
    La boucle do-while s'exécute au moins une fois, même si la condition est fausse, 
    puis elle continue tant que la condition reste vraie.
    Ici, on affiche la phrase au moins une fois, puis tant que la condition
    (ici, $compteur inférieur ou égal à 5) est vraie.
    */
    $compteur = 1;
    do {
        echo "Cette phrase est répétée " . $compteur . " fois.<br>";
        $compteur++;
    } while ($compteur <= 5);

    echo "<h2>IF, ELSE IF, ELSE</h2>";
    /*
    La variable $note est évaluée selon plusieurs conditions : 
    Si... Sinon si... Sinon (si aucune des conditions précédentes n'est vraie).
    Celà permet de gérer différentes situations en fonction des conditions spécifiées.
    */
    $note = 15;    
    if ($note >= 16) {
        echo "Mention très bien !";
    } else if ($note >= 14) {
        echo "Mention bien.";
    } else if ($note >= 12) {
        echo "Mention assez bien.";
    } else if ($note >= 10) {
        echo "Tu as la moyenne.";
    }  else {
        echo "Malheureusement, tu n'as pas l'examen.";
    }

    echo "<h2>SWITCH</h2>";
    /*
    L'instruction break  demande à PHP de sortir du  switch.
    Dès que PHP tombe sur break , il sort des accolades et donc il ne lit pas les case qui suivent.
    Le mot-clé default à la fin est un peu l'équivalent du  else.
    Pour une condition simple et courte, on utilise le  if.
    Quand on a une série de conditions à analyser, on préfère utiliser switch pour rendre le code plus clair.
    */
    $ceinture = "orange";
    switch ($ceinture) {
        case "blanche":
            echo "La ceinture blanche représente le débutant.";
            break;

        case "jaune":
            echo "La ceinture jaune indique une connaissance de base des techniques.";
            break;

        case "orange":
            echo "La ceinture orange montre un niveau intermédiaire de compétence.";
            break;

        case "verte":
            echo "La ceinture verte témoigne d'une maîtrise avancée des techniques.";
            break;

        default:
            echo "Ceinture non spécifiée.";
    }

    echo "<h2>CONDITION TERNAIRE</h2>";
    /*$userAge = 24;
    if ($userAge >= 18) {
        $isAdult = true;
    }
    else {
        $isAdult = false;
    }*/
  
    $userAge = 24;
    $isAdult = ($userAge >= 18) ? "est adulte." : "n'est pas adulte.";
    echo '<p>Ton âge est de '.$userAge.'ans et tu '.$isAdult."</p>";

    $userAge = 16;
    $isAdult = ($userAge >= 18) ? "est adulte." : "n'est pas adulte.";
    echo '<p>Ton âge est de '.$userAge.'ans et tu '.$isAdult."</p>";
?>

<!--  COMMENT INSERER AUTREMENT DU CODE PHP -->
<?php $isConnected = true; ?>
    <?php if ($isConnected): ?> <!-- Ne pas oublier le ":" -->
    <h1>Vous êtes connecté</h1>
<?php endif; ?><!-- Ni le ";" après le endif -->