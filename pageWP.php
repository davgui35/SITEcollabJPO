<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>


<!-- Liste des tutos wp ajouter par les utilisateurs (apercu) + lien vers une page avec l'article complet + commentaires des utilisateurs   -->
<?php 
  $req = $bdd->query('SELECT * FROM articles WHERE type = \'WP\'');
  echo createCarousel($req); 
  $req->closeCursor(); 
  
  $req = $bdd->query('SELECT * FROM articles WHERE type = \'WP\'');
  echo createCards($req); 
  $req->closeCursor(); 
?>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>