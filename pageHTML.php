<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<!-- Liste des tutos html ajouter par les utilisateurs (apercu) + lien vers une page avec l'article complet + commentaires des utilisateurs   -->
<h2>Les meilleurs articles</h2>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000"> 
      <a href="#"><h3>Auteur et date</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magnam voluptatibus dolor dolorum. Corrupti dicta illo omnis cumque atque totam sed iusto eos quod sapiente enim quisquam, exercitationem molestiae ipsa?</p></a>
    </div>
    <div class="carousel-item" data-interval="2000">   
    <a href="#"><h3>Auteur et date</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magnam voluptatibus dolor dolorum. Corrupti dicta illo omnis cumque atque totam sed iusto eos quod sapiente enim quisquam, exercitationem molestiae ipsa?</p></a>
    </div>
    <div class="carousel-item">
    <a href="#"><h3>Auteur et date</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magnam voluptatibus dolor dolorum. Corrupti dicta illo omnis cumque atque totam sed iusto eos quod sapiente enim quisquam, exercitationem molestiae ipsa?</p></a>
    </div>
    </div>
  </div>
</div>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>