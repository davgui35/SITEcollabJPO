<?php 
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=homecodesign', 'root', '');
  }
catch (Exception $e)
  {
    die('Erreur : ' . $e ->getMessage());
  }
?>