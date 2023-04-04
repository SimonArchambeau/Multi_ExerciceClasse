<?php

function createUser($pdo)
{
    try{
        $query = "insert into utilisateur (utilisateurNom, utilisateurPrenom, utilisateurPseudo, utilisateurEmail, utilisateurMdp, utilisateurRole) values (:utilisateurNom, :utilisateurPrenom, :utilisateurPseudo, :utilisateurEmail, :utilisateurMdp, :utilisateurRole)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'utilisateurNom' => $_POST["nom"],
            'utilisateurPrenom' => $_POST["prenom"],
            'utilisateurPseudo' => $_POST["pseudo"],
            'utilisateurEmail' => $_POST["email"],
            'utilisateurMdp' => $_POST["mot_de_passe"],
            'utilisateurRole' => $_POST ["role"]
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function connectUser($pdo){
    try {
        $query = "select * from utilisateur where utilisateurPseudo = :utilisateurPseudo and utilisateurMdp = :utilisateurMdp";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'utilisateurPseudo' => $_POST['pseudo'],
            'utilisateurMdp' => $_POST['mot_de_passe'],
        ]);
        $user = $connectUser->fetch();
        if($user) {
            $_SESSION['user'] = $user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function updateUser($pdo)
{
    try {
        $query = "UPDATE utilisateur SET utilisateurNom = :utilisateurNom, utilisateurPrenom = :utilisateurPrenom, utilisateurPseudo = :utilisateurPseudo, utilisateurMdp = :utilisateurMdp, emailUser = :emailUser WHERE id = :id";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'utilisateurNom' => $_POST['nom'],
            'utilisateurPrenom' => $_POST['prenom'],
            'utilisateurPseudo' => $_POST['pseudo'],
            'utilisateurEmail' => $_POST["email"],
            'utilisateurMdp' => $_POST['mot_de_passe'],
            'id' => $_SESSION["user"]->id
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function reloadSession($pdo)
{
    try {
        $query = "select * from utilisateur where id = :id";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'id' => $_SESSION["user"]->id
        ]);
        $user=$connectUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}