
<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<div class="container" id="menu">
  <div class="row">
    <?php foreach ($cartes as $carte) : ?>
                <div class="col-sm">
                  <div class="card <?= $carte['type_page']?>" style="width: 19rem;">
                    <a href="pageHTML.php">
                      <img src="images/logos/<?= $carte['type_page']?>.png" class="card-img-top" alt="<?= $carte['title_page']?>_logo">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><?= $carte['title_page']?></h5>
                      <p class="card-text"><?= $carte['description']?>
                      </p>
                      <a href="page<?= $carte['type_page']?>.php" class="btn">GO</a>
                    </div>
                  </div>
                </div>
    <?php endforeach; ?>
  </div>
</div>

  <!-- A propos -->
  <?= include(DIR_TEMPLATES . 'propos.php'); ?>
    
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>

