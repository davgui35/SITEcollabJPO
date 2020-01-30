<?php
include('start.php');
?>
<!DOCTYPE html>
<?= start_page('Acceuil'); ?>
<main>
  <!-- cartes du haut -->
  <div class="container" id="menu">
    <div class="row">
      <div class="col-sm">
        <div class="card html" style="width: 19rem;">
            <img src="images/logos/HTML.png" class="card-img-top" alt="html">
            <div class="card-body">
              <h5 class="card-title">HTML</h5>
              <p class="card-text">Langage de balisage utilisé pour la création de pages web, permettant notamment de définir des liens hypertextes.
              </p>
              <a href="#" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card css" style="width: 19rem;">
            <img src="images/logos/css.png" class="card-img-top" alt="Css">
            <div class="card-body">
              <h5 class="card-title">CSS</h5>
              <p class="card-text">Langage de feuilles de styles en cascade, servant à mettre en forme des documents web, type page HTML ou XML</p>
              <a href="#" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card wordpress" style="width: 19rem;">
            <img src="images/logos/WordPress.png" class="card-img-top" alt="WordPress">
            <div class="card-body">
              <h5 class="card-title">WORDPRESS</h5>
              <p class="card-text">WordPress est un logiciel très populaire qui est utilisé sur le web pour créer un site ou un blog.</p>
              <a href="#" class="btn">GO</a>
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
            <img class="ps-img" src="images/logos/PS.png" class="card-img-top" alt="PS">
            <div class="card-body">
              <h5 class="card-title">PHOTOSHOP</h5>
              <p class="card-text">Photoshop est un logiciel de retouche, de traitement et de dessin assisté par ordinateur.</p>
              <a href="#" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card ia" style="width: 19rem;">
            <img src="images/logos/IA.png" class="card-img-top" alt="IA">
            <div class="card-body">
              <h5 class="card-title">ILLUSTRATOR</h5>
              <p class="card-text">Adobe Illustrator est un logiciel de création graphique vectorielle.</p>
              <a href="#" class="btn">GO</a>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card php" style="width: 19rem;">
            <img src="images/logos/PHP.png" class="card-img-top" alt="Php">
            <div class="card-body">
              <h5 class="card-title">PHP</h5>
              <p class="card-text">Un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP.</p>
              <a href="#" class="btn">GO</a>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  <!-- A propos -->
  <div class="container" id="apropos">
    <div class="col12 apropos_lea">
      <div class="media lea">
        <img src="images/logos/DessinPerso.png" class="align-self-center mr-3"  width="150px" height="150px" alt="logo">
        <div class="media-body">
          <h5 class="mt-0">A propos de Léa</h5>
          <p>Plus jeune que mon binome, je possède déjà des qualités numérique en graphisme et une sensibilité intéressante.Je suis captivée par tous les logiciels Adobe, le design des sites modernes, et accessoirement les sphynx.</p>
          <p class="mb-0">Ce site est notre nouveau projet où la simplicité, la découverte, et l'échange sont les mots clés.Alors si vous aimez apprendre simplement chers débutants suivez-nous.</p>
        </div>
      </div>
    </div>
    <div class="col12 apropos_david">
      <div class="media david">
        <img src="images/logos/DessinPerso.png" class="align-self-center mr-3"  width="150px" height="150px" alt="logo">
        <div class="media-body">
          <h5 class="mt-0">A propos de David</h5>
          <p>Après un parcours dans différents domaines,je consacre mon temps à la recherche de la culture web, de la vieille numérique, et à l'apprentissage dans le développement.Je souhaite échanger avec vous, les connaissances que je possède, mais nous allons grâce à notre site, progresser ensemble.</p>
          <p class="mb-0">Ce site est un partage de connaissances et un échange humain sur un univers passionnant en éternelle évolution.</p>
        </div>
      </div>
    </div>
  </div>
</main>
    
<!-- footer -->
<footer>
      <div class="container d-flex justify-content-between" id="footer">
        <p class="copyright">Copyright &copy 2020 NotreSite, All Rights Reserved.</p>
        <div class="img_footer">
          <img src="images/iconesButtons/Fbicon.png" alt="facebook">
          <img src="images/iconesButtons/Twittericon.png" alt="twitter">
          <img src="images/iconesButtons/icons8-instagram-30.png" alt="instagram">
        </div>
      </div>
</footer>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>