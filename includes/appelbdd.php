<?php // Inclusion de la base de donnée au sité 
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=homecodesign', 'root', '');
  }
catch (Exception $e)
  {
    die('Erreur : ' . $e ->getMessage()); //erreur spécifique si accès imopossible à la bdd
  }
?>