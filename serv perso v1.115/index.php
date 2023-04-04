<?php
    require_once "Config/databaseconnexion.php";
    /*$sth = $dbh->prepare("SELECT * FROM utilisateur");
    $sth->execute();

    $result = $sth->fetchAll();
    print_r($result);*/
?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon</title>
</head>

<body>
    <header>
        <a href="/">Accueil</a>
        <a href="connexion">Connexion</a>
        <a href="inscription">Inscription</a>
    </header>
    <main>
        <?php
            require_once "Controllers/voitureController.php";
            require_once "Controllers/usersController.php";
        ?>
    </main>
    <footer>
        <h1>Ce sera un footer</h1>
    </footer>
</body>
</html>