<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Archambeau</title>
</head>
<body>
    <?php
    //étape 0
        echo"<p>hello world</p>";
    //étape 1
    echo "------------------------étape 1-----------------------";
        for ($x = 1; $x <= 10; $x++) {
            echo "<p>Le nombre vaut $x</p>";
        }
    //étape 2
    echo "------------------------étape 2-----------------------";
        for ($x=1; $x<=10; $x++) {
            if ($x == 3) continue;
            echo '<p>le nombre vaut ' . $x .'</p>';
        }
    // étape 3
    echo "------------------------étape 3-----------------------";
        for ($x=1; $x<=10; $x++) {
            if (3< $x && $x < 8) continue;
            echo '<p>le nombre vaut ' . $x .'</p>';
        }
    // étape 4
    echo "------------------------étape 4-----------------------";
    $a = -5;
    $b = 10;
    echo "<p>la valeur absolue de $a vaut " . abs($a) . "</p>";
    echo "<p>la valeur absolue de $b vaut " . abs($b) . "</p>";
    ?>
</body>
</html>