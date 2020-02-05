<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<!-- Liste des tutos html ajouter par les utilisateurs (apercu) + lien vers une page avec l'article complet + commentaires des utilisateurs   -->
<div class="container">
<h2 style="text-align: center;">LES MEILLEURS ARTICLES</h2>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php $counter = 1; 
      foreach($carousel as $slide){
        if($slide['type'] == 'HTML'){
            echo createCarousel($slide, $counter);
          $counter++;
        }
      } ?>
  </div>
</div>



<div class="container">
  <div class="row row-cols-1 row-cols-md-2">
    <?php  foreach ($cards as $carte) : 
      if($carte['type'] == 'HTML'){
        echo creatCards($carte);
      }
    endforeach; ?>
  </div>
</div>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>

