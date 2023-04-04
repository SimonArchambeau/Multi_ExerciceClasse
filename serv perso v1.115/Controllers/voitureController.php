<?php

require_once "Model/modelVoiture.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/index.php" || $uri === "/") {
        $voitures = SelectAllVoiture($pdo);
        require_once "Templates/vehicules/pageAccueil.php";
}

/* elif ($uri === "/voiture") {
        require_once "Templates/Champions/voirLeChampion.php";
}*/

