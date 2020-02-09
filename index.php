
<?php
include('includes/bootstrap.php');  
?>
<!DOCTYPE html>
<?= include(DIR_TEMPLATES . 'header.php'); ?>
<?php
$req = $bdd->query('SELECT * FROM cartes'); // on selectionne toutes les cartes de présentaion de chaque domaine dans la base de données (inclus dans bootstrap.php)
?>

<div class="container" id="menu">
  <div class="row">
    <?php while($carte = $req->fetch()) { ?> <!--On boucle sur le nombre de domaine présents pour afficher toutes les cartes de présentation -->
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

<!--Penser à ajouter les messages d'erreur lors de la redirection d'une page vers la page précédane ou le menu -->