<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<?php 
  $req = $bdd->query('SELECT * FROM articles WHERE type = \'IA\'');
  echo createCarousel($req); 
  $req->closeCursor(); 
  
  $req = $bdd->query('SELECT * FROM articles WHERE type = \'IA\'');
  echo createCards($req); 
  $req->closeCursor(); 
?>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>