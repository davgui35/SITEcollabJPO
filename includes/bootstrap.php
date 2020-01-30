<?php
/**
 * Fonctions pour gérer l'affichage de notre site
 */

// Début de la page


function start_page($title)
{
	$html = '

    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="' . DIR_ASSETS . 'bootstrap.css">
        <link rel="stylesheet" href="' . DIR_CSS . 'style.css">
        <title>'. NAME_APP .'</title>
    </head>
    <body>
        <!-- menu navigation -->
    <header class="img-fluid">
            <div class="container d-flex justify-content-around" id="menu" >
            <a href="index.php">
                <figure>
                    <img class="logo" src="images/logos/logo.png" alt="Mon logo" width="150px">
                    <figcaption>H0me C0design / <br />'. $title .'</figcaption>
                </figure>
            </a>
            <nav class="navbar navbar-expand-lg">
                <div class="container lien-techno d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="pageHTML.php">Html</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageCSS.php">Css</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageWP.php">WordPress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagePHP.php">Php</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagePS.php">PS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageAI.php">Ai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageAPP.php">A propos</a>
                        </li>
                    </ul>
                </div> 
                </div>
            </nav>
        </div>
    </header>
    <main>
	
	';

	return $html;
}


function end_page()
{
	$html = '
	
</main>
<footer>
      <div class="container d-flex justify-content-between" id="footer">
        <p class="copyright">Copyright &copy ' . date('Y') . ' ' . NAME_APP .', All Rights Reserved.</p>
        <div class="img_footer">
          <img src="images/iconesButtons/Fbicon.png" alt="facebook">
          <img src="images/iconesButtons/Twittericon.png" alt="twitter">
          <img src="images/iconesButtons/icons8-instagram-30.png" alt="instagram">
        </div>
      </div>
</footer>
<script src="' . DIR_ASSETS . 'jquery.js"></script>
<script src="' . DIR_ASSETS . 'bootstrap.js "></script>
</body>
</html>

';

	return $html;
}



function a_propos(){
    $html = '
    <div class="container" id="apropos">
    <div class="col12 apropos_lea">
      <div class="media lea">
        <img src="images/logos/DessinPerso.png" class="align-self-center mr-3"  width="150px" height="150px" alt="logo">
        <div class="media-body">
          <h5 class="mt-0">A propos de Léa</h5>
          <p>Plus jeune que mon binome, je possède déjà des qualités numérique en graphisme et une sensibilité intéressante.Je suis captivée par tous les logiciels Adobe, le design des sites modernes, et accessoirement les sphynx.</p>
          <p class="mb-0">Ce site est notre nouveau projet où la simplicité, la découverte, et l\'échange sont les mots clés.Alors si vous aimez apprendre simplement chers débutants suivez-nous.</p>
        </div>
      </div>
    </div>
        <div class="col12 apropos_david">
            <div class="media david">
                <img src="images/logos/DessinPerso.png" class="align-self-center mr-3"  width="150px" height="150px" alt="logo">
                <div class="media-body">
                    <h5 class="mt-0">A propos de David</h5>
                    <p>Après un parcours dans différents domaines,je consacre mon temps à la recherche de la culture web, de la vieille numérique, et à l\'apprentissage dans le développement.Je souhaite échanger avec vous, les connaissances que je possède, mais nous allons grâce à notre site, progresser ensemble.</p>
                    <p class="mb-0">Ce site est un partage de connaissances et un échange humain sur un univers passionnant en éternelle évolution.</p>
                </div>
            </div>
        </div>
    </div>
    </main>
    ';

	return $html;
}
