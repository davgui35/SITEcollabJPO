<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<!-- Liste des tutos css ajouter par les utilisateurs (apercu) + lien vers une page avec l'article complet + commentaires des utilisateurs   -->
<?php 
  $req = $bdd->query('SELECT * FROM articles WHERE type = \'CSS\'');
  echo createCarousel($req); 
  $req->closeCursor(); 
  
  $req = $bdd->query('SELECT * FROM articles WHERE type = \'CSS\'');
  echo createCards($req); 
  $req->closeCursor(); 
?>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>

