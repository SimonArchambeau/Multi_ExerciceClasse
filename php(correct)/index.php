<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Archambeau</title>
</head>
<body>
    
    <p>étape 0</p>
        <p>hello world</p>
    <p>------------------------étape 1-----------------------</p>
       <?php  for ($x = 1; $x <= 10; $x++) : ?>
            <p>Le nombre vaut <?=$x ?> </p>
        <?php endfor ?>
    
    <p>------------------------étape 2-----------------------</p>
        <?php for ($x=1; $x<=10; $x++) : ?>
            <?php if ($x == 3) : ?>
                <p>le nombre vaut  <?=$x ?> </p>
            <?php endif ?>
        <?php endfor ?>
    <p>------------------------étape 3-----------------------</p>
        <?php for ($x=1; $x<=10; $x++) : ?>
            <?php if (3< $x && $x < 8) continue ?>
            <p>le nombre vaut <?=$x ?> </p>   
        <?php endfor ?>
    <p>------------------------étape 4-----------------------</p>
    <?php
        $a = -5;
        $b = 10;
    ?>
        <p>la valeur absolue de <?=$a ?> vaut  <?= abs($a) ?> </p>
        <p>la valeur absolue de <?=$b ?> vaut  <?= abs($b) ?> </p>
</body>
</html>