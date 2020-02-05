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
      foreach($cardsHTML as $card): ?>
      <div class="carousel-item<?php if($counter <= 1){echo " active"; } ?>" data-interval="10000"> 
        <a href="#"><h3><?= 'Par ' . $card['auteur'] . ' publier le ' .  $card['date']; ?></h3>
        <p><?= $card['description']; ?></p></a>
      </div>
    <?php $counter++;
    endforeach; ?>
  </div>
</div>



<div class="container">
<div class="row row-cols-1 row-cols-md-2">
<?php foreach ($cardsHTML as $carte) : ?>
  <div class="col mb-4">
    <div class="card">
    <a href="voir_article.php?id=<?= $carte['id'] ?>">
      <div class="card-body">
        <div class="d-flex">
            <div>
              <img src="<?=$carte['avatar'] ?>" alt="avatar" width="50px" style="margin-right: 20px;">
            </div>
            <div>
            <h5 class="card-title"><?= $carte['title'] . ' -- ' . $carte['date'] .'<br />' . $carte['auteur']; ?></h5>
            </div>
        </div>
        <p class="card-text"><?= $carte['description']; ?></p>
      </div>
    </a>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>