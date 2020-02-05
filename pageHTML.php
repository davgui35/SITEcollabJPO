<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<!-- Liste des tutos html ajouter par les utilisateurs (apercu) + lien vers une page avec l'article complet + commentaires des utilisateurs   -->
<div class="container">
<h2>Les meilleurs articles</h2>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000"> 
      <a href="#"><h3><?= 'Par ' . $carouselHTML[0]['auteur'] . ' publier le ' .  $carouselHTML[0]['date']; ?></h3>
      <p><?= $carouselHTML[0]['description']; ?></p></a>
    </div>
    <div class="carousel-item" data-interval="2000">   
    <a href="#"><h3><?= 'Par ' . $carouselHTML[1]['auteur'] . ' publier le ' .  $carouselHTML[1]['date']; ?></h3>
      <p><?= $carouselHTML[1]['description']; ?></p></a>
    </div>
    <div class="carousel-item">
    <a href="#"><h3><?= 'Par ' . $carouselHTML[2]['auteur'] . ' publier le ' .  $carouselHTML[2]['date']; ?></h3>
      <p><?= $carouselHTML[2]['description']; ?></p></a>
    </div>
    </div>
  </div>
</div>
</div>
<div class="container">
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>