<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Archambeau</title>
</head>
<body>
    <form action="" method="">
        <fieldset>
            <legend>Vous coordonnées</legend>
            <div>
                <label for="nom">
                    Nom:
                </label>
                <input type="text" id="nom" placeholder="Votre nom">
            </div>
            <div>
                <label for="prénom">
                    Prénom
                </label>
                <input type="text" id=prénom placeholder="Votre prénom">
            </div>
            <div>
                <label for="date">
                    Date de naissance:
                </label>
                <input type="date" id="date">
            </div>
            <div>
                <label for="email">
                    Email:
                </label>
                <input type="email" id="email" placeholder="Votre email">
            </div>
            <div>
                <label for="pays">
                    Pays:
                </label>
                <select name="pays" id="pays">
                <optgroup label="Europe">
                    <option value="belgique">Belgique</option>
                </optgroup>
                <optgroup label="Amerique du nord">
                    <option value="etats-unis">Etats-Unis</option>
                    <option value="canada">Canada</option>
                </optgroup>
                <optgroup label="Asie">
                    <option value="japon">Japon</option>
                    <option value="chine">Chine</option>
                </optgroup>
                </select>
            </div>
            <div>
                <label for="copie">
                    Nombre de copies:
                </label>
                <input type="number">
            </div>
        </fieldset>
        <fieldset>
            <legend>Périodicité</legend>
            <div>
                <input type="radio" id="newsletter"  name="periodicite" value="hebdo">
                <label for="newsletter">
                    Newsletter hebdomadaire
                </label>
            </div>
            <div>
                <input type="radio" id="newsletter" name="periodicite" value="mensu">
                <label for="newsletter">
                    Newsletter mensuelle
                </label>
            </div>
            <div>
                <input type="radio" id="newsletter"  name="periodicite" value="trimes">
                <label for="newsletter">
                    Newsletter trimestrielle
                </label>
            </div>
        </fieldset>
        <fieldset>
            <legend>Version papier - informatique</legend>
            <div>
                <input type="checkbox" id="version" name="version" value="papier">
                <label for="version">
                    Recevoir la version papier
                </label>
            </div>
            <div>
                <input type="checkbox" id="version" name="version" value="informatique">
                <label for="version">
                    Recevoir la version informatique
                </label>
            </div>
        </fieldset>
        <input type="submit" value="envoyer">
    </form>
</body>
</html>