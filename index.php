<?php
include('start.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body>
  <!-- menu navigation -->
<header class="img-fluid">
      <div class="container d-flex justify-content-around" id="menu" >
      <figure>
          <img class="logo" src="images/logos/logo.png" alt="Mon logo" width="150px">
          <figcaption>H0me C0design</figcaption>
      </figure>
      <nav class="navbar navbar-expand-lg">
          <div class="container lien-techno d-flex justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Accueil</a>
                </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="items/pageHTML.php">Html</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="items/pageCSS.php">Css</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="items/pageWP.php">Php</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="items/pagePS.php">PS</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="items/pageAI.php">Ai</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="items/pagePHP.php">Php</a>
                  </li>
                </ul>
          </div> 
          </div>
        </nav>
  </div>
</header>
<main>
  <!-- cartes du haut -->
  <div class="container" id="menu">
    <div class="row">
      <div class="col-sm">
        <div class="card html" style="width: 19rem;">
            <a href="pageHTML.php">
              <img src="images/logos/HTML.png" class="card-img-top" alt="html">
            </a>
            <div class="card-body">
              <h5 class="card-title">HTML</h5>
              <p class="card-text">Langage de balisage utilisé pour la création de pages web, permettant notamment de définir des liens hypertextes.
              </p>
              <a href="pageHTML.php" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card css" style="width: 19rem;">
            <a href="pageCSS.php">
              <img src="images/logos/css.png" class="card-img-top" alt="Css">
            </a>
            <div class="card-body">
              <h5 class="card-title">CSS</h5>
              <p class="card-text">Langage de feuilles de styles en cascade, servant à mettre en forme des documents web, type page HTML ou XML</p>
              <a href="pageCSS.php" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card wordpress" style="width: 19rem;">
            <a href="pageWP.php">
              <img src="images/logos/WordPress.png" class="card-img-top" alt="WordPress">
            </a>
            <div class="card-body">
              <h5 class="card-title">WORDPRESS</h5>
              <p class="card-text">WordPress est un logiciel très populaire qui est utilisé sur le web pour créer un site ou un blog.</p>
              <a href="pageWP.php" class="btn">GO</a>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- cartes du bas -->
  <div class="container" id="menu">
    <div class="row">
      <div class="col-sm">
        <div class="card ps" style="width: 19rem;">
            <a href="pagePS.php">
              <img class="ps-img" src="images/logos/PS.png" class="card-img-top" alt="PS">
            </a>
            <div class="card-body">
              <h5 class="card-title">PHOTOSHOP</h5>
              <p class="card-text">Photoshop est un logiciel de retouche, de traitement et de dessin assisté par ordinateur.</p>
              <a href="pagePS.php" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card ia" style="width: 19rem;">
            <a href="pageAI.php">
              <img src="images/logos/IA.png" class="card-img-top" alt="IA">
            </a>
            <div class="card-body">
              <h5 class="card-title">ILLUSTRATOR</h5>
              <p class="card-text">Adobe Illustrator est un logiciel de création graphique vectorielle.</p>
              <a href="pageAI.php" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card php" style="width: 19rem;">
            <a href="pagePHP.php">
              <img src="images/logos/PHP.png" class="card-img-top" alt="Php">
            </a>
            <div class="card-body">
              <h5 class="card-title">PHP</h5>
              <p class="card-text">Un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP.</p>
              <a href="pagePHP.php" class="btn">GO</a>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  <!-- A propos -->
  <?= a_propos(); ?>
    
<!-- footer -->
<?= end_page(); ?>