<h1>Page d'Acceuil</h1>
<p>Ce sera une superbe page d'accueil</p>
<?php foreach ($voitures as $voiture) : ?> 
<h2><?= $voiture -> voitureNom ?></h2>
<p><?= $voiture -> voiturePrix ?></p>
<?php endforeach ?>