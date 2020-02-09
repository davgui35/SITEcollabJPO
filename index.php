
<?php
include('includes/bootstrap.php');

  try{
      $bdd = new PDO ('mysql:host=localhost;dbname=homecodesign', 'root', '');
    }
  catch (Exception $e)
    {
      die('Erreur : ' . $e ->getMessage());
    }

  
?>
<!DOCTYPE html>
<?= include(DIR_TEMPLATES . 'header.php'); ?>
<?php
$req = $bdd->query('SELECT * FROM cartes');
?>

<div class="container" id="menu">
  <div class="row">
    <?php while($carte = $req->fetch()) { ?>
                <div class="col-sm">
                  <div class="card <?= $carte['type']?>" style="width: 19rem;">
                    <a href="page<?= $carte['type']?>.php">
                      <img src="images/logos/<?= $carte['type']?>.png" class="card-img-top" alt="<?= $carte['titre']?>_logo">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><?= $carte['titre']?></h5>
                      <p class="card-text"><?= $carte['description']?>
                      </p>
                      <a href="page<?= $carte['type']?>.php" class="btn">GO</a>
                    </div>
                  </div>
                </div>
    <?php } ?>
  </div>
</div>

  <!-- A propos -->
  <?= include(DIR_TEMPLATES . 'propos.php'); ?>
    
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>

