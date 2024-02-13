<?php

    echo "<h2>FGETS</h2>";
    /*    
    string fgets(resource $handle [, int $length ]) [] = c'est optionnel
    La fonction feof($file) est utilisée pour déterminer si le pointeur de fichier 
    associé à la ressource de fichier spécifiée a atteint la fin du fichier. 
    Elle renvoie true si le pointeur de fichier est à la fin du fichier, 
    indiquant ainsi la fin du contenu du fichier, et false dans le cas contraire.
    Utilisé pour lire une ligne à partir d'un pointeur de fichier,
    Elle lit jusqu'au caractère de nouvelle ligne (\n) ou jusqu'à la fin du fichier.
    */
    $file = fopen("exemple.txt", "r");
    while (!feof($file)) {
        $line = fgets($file);
        echo $line;
    }
    fclose($file);

    echo "<h2>FREAD</h2>";
    /*
    string fread(resource $handle , int $length ), 
    Utilisé pour lire une quantité spécifique d'octets à partir d'un pointeur de fichier, 
    Elle lit le nombre spécifié d'octets, ou jusqu'à la fin du fichier.
    */
    $file = fopen("exemple.txt", "r");
    $content = fread($file, filesize("exemple.txt"));
    echo $content;
    fclose($file);

    echo "<h2>FILE</h2>";
    /*
    array file(string $filename [, int $flags = 0 [, resource $context ]] )
    Utilisé pour lire le contenu d'un fichier dans un tableau. 
    Chaque élément du tableau représente une ligne du fichier. 
    Elle lit le fichier ligne par ligne et stocke chaque ligne dans un élément du tableau.  
    */
    $lines = file("exemple.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        echo $line . "<br>";
    }

    echo "<h2>FSEEK</h2>";
    /*
    int fseek(resource $handle, int $offset, int $whence)
    Déplace le pointeur de fichier vers un emplacement spécifié.
    @param $handle : La ressource du fichier, obtenue avec fopen.
    @param $offset : Le nombre d'octets à déplacer, relatif à la position spécifiée par $whence.
    @param $whence : La position à partir de laquelle $offset est mesuré. Peut prendre l'une des constantes suivantes :
        ▪ SEEK_SET : Déplace le pointeur au début du fichier.
        ▪ SEEK_CUR : Déplace le pointeur à partir de la position actuelle.
        ▪ SEEK_END : Déplace le pointeur à partir de la fin du fichier.
    */
    $file = fopen("exemple.txt", "r");
    fseek($file, 10, SEEK_SET); // Déplace le pointeur à 10 octets du début du fichier
    $content = fread($file, 20); // Lit les 20 octets suivants
    echo $content;
    fclose($file);

    echo "<h2>FTELL</h2>";
    /*
    int ftell(resource $handle)
    Retourne la position actuelle du pointeur dans le fichier.
    @param $handle : La ressource du fichier, obtenue avec fopen.
    */
    $file = fopen("exemple.txt", "r");
    fseek($file, 10, SEEK_SET); // Déplace le pointeur à 10 octets du début du fichier
    echo ftell($file); // Affiche la position actuelle (devrait être 10)
    fclose($file);

    echo "<h2>REWIND</h2>";
    /*
    void rewind(resource $handle)
    Remet le pointeur de fichier au début du fichier.
    @param $handle : La ressource du fichier, obtenue avec fopen.
    */
    $file = fopen("exemple.txt", "r");
    fseek($file, 30, SEEK_SET); // Déplace le pointeur à 30 octets du début du fichier
    rewind($file); // Remet le pointeur au début du fichier
    $content = fread($file, 20); // Lit les 20 octets suivants à partir du début
    echo $content;
    fclose($file);

    echo "<h2>FWRITE</h2>";
    /* 
    La fonction fwrite permet d'écrire dans un fichier ouvert avec fopen. 
    @param $handle : ressource du fichier ouvert à écrire (pointeur de fichier retourné par fopen).
    @param $string : chaîne de caractères à écrire dans le fichier.
    @param $length (optionnel) : longueur maximale de la chaîne à écrire. Si ce paramètre est omis, toute la chaîne sera écrite. 
    Si spécifié, seuls les premiers octets de la chaîne seront écrits. Si length est 0, rien ne sera écrit.
    */
    $filename = "fwrite.txt";
    // Ouvre le fichier en mode écriture
    $file = fopen($filename, "w");
    if ($file) {
        $content = "Contenu à écrire dans le fichier.";
        // Écriture dans le fichier
        $bytesWritten = fwrite($file, $content);
        if ($bytesWritten !== false) {
            echo "$bytesWritten octets écrits dans le fichier $filename.";
        } else {
            echo "Erreur lors de l'écriture dans le fichier $filename.";
        }
        fclose($file);
    } else {
        echo "Erreur lors de l'ouverture du fichier $filename en écriture.";
    }

    echo "<h2>file_put_contents</h2>";
    /*
    La fonction file_put_contents permet d'écrire dans un fichier en une seule ligne, 
    simplifiant le processus d'écriture. Offre une syntaxe plus concise pour les cas simples où
    l'ouverture du fichier et la gestion manuelle du pointeur de fichier ne sont pas nécessaires.
    @param $filename : le nom du fichier dans lequel écrire les données.
    @param $data : les données à écrire dans le fichier. Cela peut être une chaîne de caractères, un tableau ou une ressource. 
    Si le type de données passé est un tableau, il sera automatiquement converti en une chaîne au format JSON si l'extension JSON est activée.
    @param $flags (optionnel) : les indicateurs de contrôle du comportement de la fonction. 
    C'est un masque d'options facultatif. Les options courantes comprennent :    • 
        ▪ FILE_USE_INCLUDE_PATH : Permet la recherche du fichier dans le chemin d'inclusion PHP.
        ▪ FILE_APPEND : Si le fichier existe, les données seront ajoutées à la fin du fichier plutôt que de le remplacer.
        ▪ LOCK_EX : Exclusivement verrouille le fichier pendant l'écriture.
    @param $context (optionnel) : un contexte de flux, généralement créé avec stream_context_create().
    */
    $filename = "fichier.txt";
    $content = "Contenu à écrire dans le fichier.";
    // Écriture dans le fichier en une seule ligne
    file_put_contents($filename, $content);
    echo "Écriture réussie dans le fichier $filename.";

    /*******************************************************************************
    *************** Travailler avec des fichiers CSV, JSON, XML, etc ***************
    *******************************************************************************/

    /* 
    La fonction fgetcsv  permet de lire une ligne du fichier CSV et la diviser en champs. 
    array fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]]] )
    @param handle : C'est la ressource du fichier à partir de laquelle lire. Il s'agit généralement du pointeur de fichier retourné par fopen.
    @param length (optionnel) : Il s'agit de la longueur maximale de la ligne à lire. Si ce paramètre est 0, la ligne est lue jusqu'à la fin.
    @param delimiter (optionnel) : Il s'agit du caractère délimiteur de champ dans le fichier CSV. Par défaut, c'est une virgule (,).
    @param enclosure (optionnel) : Il s'agit du caractère d'encadrement des champs. Par défaut, c'est une double quote (").
    @param escape (optionnel) : Il s'agit du caractère d'échappement utilisé pour échapper le délimiteur s'il apparaît dans un champ. Par défaut, c'est la barre oblique inversée (\).
    */
    echo "<h2>Fichier CSV</h2>";
    $filenameCSV = "exemple.csv";
    // le fichier CSV est ouvert en mode lecture ("r")
    if (($handle = fopen($filenameCSV, "r")) !== false) {
        // les champs séparés par des virgules (",") sont stockés dans le tableau $data.
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            // $data contient les champs de la ligne
            print_r($data);
        }
        fclose($handle);
    } else {
        echo "Erreur lors de l'ouverture du fichier CSV.";
    }    

    /* La fonction file_get_contents permet d'obtenir le contenu du fichier 
    et json_decode pour décoder le contenu JSON en un tableau PHP */
    echo "<h2>Fichier JSON</h2>";
    $filenameJSON = "exemple.json";

    // Vérifier si le fichier n'existe pas
    if (!file_exists($filenameJSON)) {
        // Créer un fichier vide
        touch($filenameJSON);

        echo "Le fichier a été créé avec succès.";
    } else {
        echo "Le fichier existe déjà.";
    }

    $contentJSON = file_get_contents($filenameJSON);
    $dataJSON = json_decode($contentJSON, true);
    if ($dataJSON !== null) {
        // $dataJSON contient le tableau associatif avec les données JSON
        print_r($dataJSON);
    } else {
        echo "Erreur lors de la lecture du fichier JSON.";
    }

    /* 
    La librairie SimpleXML permet de parser le fichier XML.
    Le fichier XML est chargé à l'aide de simplexml_load_file.
    */
    echo "<h2>Fichier XML</h2>";
    $filenameXML = "exemple.xml";
    if (file_exists($filenameXML)) {
        $xml = simplexml_load_file($filenameXML);
        if ($xml !== false) {
            // Utilisation de $xml pour accéder aux éléments XML
            print_r($xml);
        } else {
            echo "Erreur lors du chargement du fichier XML.";
        }
    } else {
        echo "Le fichier XML n'existe pas.";
    }

    /* Script de vérification des droits en écriture */
    $filename = "exemple3.txt";
    // Vérifier si le fichier existe
    if (!file_exists($filename)) {
        // Vérifier si le répertoire a les permissions nécessaires
        $directory = dirname($filename);
        if (is_writable($directory)) {
            // Ouvrir le fichier en mode écriture
            $file = fopen($filename, "w");
            if ($file !== false) {
                // Écrire dans le fichier
                fwrite($file, "Contenu à écrire dans le fichier.");
                // Fermer le fichier
                fclose($file);
                echo "Le fichier a été créé avec succès.";
            } else {
                echo "Erreur lors de l'ouverture du fichier en écriture.";
            }
        } else {
            echo "Le répertoire n'a pas les permissions nécessaires.";
        }
    } else {
        echo "Le fichier existe déjà.";
    }

    /***************************************************************************** */

    echo "<h2>Utilisation du bloc try...finally pour la fermeture des fichiers</h2>";
    $file = fopen("exemple.txt", "r");
    try {
        // Traitement du fichier
    } finally {
        fclose($file); // Assure la fermeture du fichier même en cas d'exception
    }

    echo "<h2>Vérification de la réussite de l'ouverture du fichier</h2>";
    $file = fopen("exemple.txt", "r");
    if (!$file) {
        die("Impossible d'ouvrir le fichier.");
    }

    echo "<h2>Utilisation des constantes pour les modes d'ouverture</h2>";
    // Définir FILE_READ_MODE ailleurs dans le code avec la valeur "r" permet une gestion plus facile des modes d'ouverture.
    //$file = fopen("exemple.txt", FILE_READ_MODE);

    echo "<h2>Validation des opérations réussies</h2>";
    $content = fread($file, 1000);
    if ($content === false) {
        die("Erreur lors de la lecture du fichier.");
    }

    echo "<h2>Nettoyage des ressources non utilisées avec unset</h2>";
    // Bien que la fermeture explicite soit préférable, unset peut être utilisé pour libérer la ressource immédiatement si nécessaire.
    unset($file);

    echo "<h2>Utilisation de la structure file_get_contents pour une lecture concise</h2>";
    // Cette fonction simplifie la lecture complète d'un fichier en une seule ligne.
    $content = file_get_contents("exemple.txt");

    echo "<h2>Utilisation de la fonction file_exists pour vérifier l'existence d'un fichier</h2>";
    if (file_exists("exemple.txt")) {
        // Traitement du fichier
    } else {
        die("Le fichier n'existe pas.");
    }

    echo "<h2>Gestion des exceptions pour les opérations de fichiers</h2>";
    try {
        $file = fopen("exemple.txt", "r");
        // Traitement du fichier
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    } finally {
        if (isset($file)) {
            fclose($file);
        }
    }
?>