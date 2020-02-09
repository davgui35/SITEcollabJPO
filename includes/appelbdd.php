<?php // Inclusion de la base de donnée au site
try{
	$bdd = new PDO('mysql:host=localhost;dbname=homecodesign;charset=utf8', 'root', '');
  }
catch (Exception $e)
  {
    die('Erreur : ' . $e ->getMessage()); //erreur spécifique si accès imopossible à la bdd
  }
?>