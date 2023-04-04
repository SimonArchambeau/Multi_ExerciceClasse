<?php 

function selectAllVoiture ($pdo)
{
    try{
        $query = "selet * from voiture";
        $selectAllVoiture = $pdo -> prepare($query);
        $selectAllVoiture -> execute();
        $voitures = $selectAllVoiture -> fetchAll();
        return($voitures);
    } catch (PDOException $e) {
        $message = $e-> getMessage();
        die($message);
    }
}