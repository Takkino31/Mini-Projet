<?php

require_once "fonctions.php";
// chemin d'accès à votre fichier JSON
$file = 'identifiants.json';
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file);
// décoder le flux JSON
$identifiants_array = json_decode($data, true);
// accéder à l'élément approprié

foreach ($identifiants_array as $role => $value) {
    
        echo $value[0]."<br>";
}
?>