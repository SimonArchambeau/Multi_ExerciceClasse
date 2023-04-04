<?php

require_once "Model/modelUtilisateur.php";

$uri = $_SERVER['REQUEST_URI'];


if ($uri === "/connexion") {
    if (isset ($_POST ['btnEnvoi'])) {
        var_dump("toto");
        $messageErrorLogin = verifData();
        var_dump($messageErrorLogin);
        if(!$messageErrorLogin){
            connectUser($pdo);
            header('location:/');
        }
    }
    require_once "Templates/users/connexion.php";
} elseif ($uri === "/inscription") {
    if (isset ($_POST ['btnEnvoi'])) {
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin){
            createUser($pdo);
            header('location:/connexion');
        }
    }
    require_once "Templates/users/inscription.php";
} elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/connexion');
} elseif ($uri === "/profil") {
    require_once "Templates/users/profil.php";
}elseif ($uri === "/modifyProfil") {
    if(isset($_POST["btnEnvoi"])){
        var_dump("cliqued");
        updateUser($pdo);
        reloadSession($pdo);
        header("location:/profil");
    }
    require_once "Templates/users/inscription.php";
}

function verifData() {
    foreach ($_POST as $key => $value) {
        if(empty(str_replace(' ','', $value))) {
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
        }
    }
    if(isset($messageErrorLogin)){
        return $messageErrorLogin;
    }
    else {
        return false;
    }
}