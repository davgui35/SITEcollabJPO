<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= DIR_ASSETS ?>bootstrap.css">
        <link rel="stylesheet" href="<?= DIR_CSS ?>style.css">
        <title><?= NAME_APP ?></title>
    </head>
    <body>
        <!-- menu navigation -->
    <header class="img-fluid">
            <div class="container d-flex justify-content-around" id="menu" >
            <a href="index.php">
                <figure>
                    <img class="logo" src="images/logos/logo.png" alt="Mon logo" width="150px">
                    <figcaption><?= NAME_APP ?><br /><?php //nom de la page  ?></figcaption>
                </figure>
            </a>
            <nav class="navbar navbar-expand-lg">
                <div class="container lien-techno d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="pageHTML.php">HTML</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageCSS.php">CSS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageWP.php">WordPress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagePHP.php">PHP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagePS.php">PS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageIA.php">AI</a>
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