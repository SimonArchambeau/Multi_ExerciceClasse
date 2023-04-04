<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theismann Benjamin</title>
</head>
<body>
    <form action="" method="">
        <h1>Un Super Formulaire</h1>
        <fieldset>
            <legend>Données Personelles</legend>
            <div>
                <label for="prenom">Votre Prénom :</label>
                <input type="text" id=prenom placeholder="Prénnom">
            </div>
            <div>
                <label for="nom">Votre Nom :</label>
                <input type="text" id=nom placeholder="Nom">
            </div>
            <div>
                <label for="age">Votre date de Naissance :</label>
                <input type="date" id="age">
            </div>
        </fieldset>
        <fieldset>
            <legend>Les Nouveaux Input</legend>
            <div>
                <label for="url">URL :</label>
                <input type="url">
            </div>
            <div>
                <label for="numero de telephone">Votre numero de téléphone :</label>
                <input type="tel">
            </div>
            <div>
                <label for="appreciation">Votre appréciation (entre 10 et 20) :</label>
                <input type="range">
            </div>
            <div>
                <label for="couleur">Votre couleur préférée :</label>
                <input type="color">
            </div>
            <div>
                <label for="recherche">Votre recherche :</label>
                <input type="search">
            </div>
            <div>
                <label for="fichier">Choisis un fichier :</label>
                <input type="file">
            </div>
            <div>
                <label for="heure">Choisis une heure :</label>
                <input type="time">
            </div>
            <div>
                <label for="mois">Choisis un mois :</label>
                <input type="month">
            </div>
            <div>
                <label for="semaine">Choisis une semaine :</label>
                <input type="week">
            </div>
            <div> 
                <label for="explication">Vos explication :</label>       
                <input type="textarea">
            </div>
            <div>
                <label for="reset">Votre recherche :</label>
                <input type="reset">
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton envoi</legend>
            <div>
                <input type="submit">
            </div>
        </fieldset>
    </form>
</body>
</html>