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
                        <a class="nav-link" href="#">Html</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Css</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Php</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">A propos</a>
                        </li>
                    </ul>
                </div> 
                </div>
            </nav>
        </div>
    </header>
	
	';

	return $html;
}