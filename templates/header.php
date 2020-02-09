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
                        <li class="nav-item">
                            <a class="nav-link" href="pageAPP.php">A propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Matières
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="pageHTML.php">HTML</a>
                                <a class="dropdown-item" href="pageCSS.php">CSS</a>
                                <a class="dropdown-item" href="pagePHP.php">PHP</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pageWP.php">Wordpress</a>
                                <a class="dropdown-item" href="pagePS.php">Photoshop</a>
                                <a class="dropdown-item" href="pageIA.php">Illustrator</a>
                            </div>
                        </li>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </ul>
                </div> 
                </div>
            </nav>
        </div>

    </header>
    <main>