<?php
session_start();
// Demarage de la session utilisateur 

// Constantes de base de mon programme
define('DIR_ASSETS', 'assets/');
define('DIR_INCLUDE', 'includes/');
define('DIR_CSS', 'css/');
define('DIR_ITEMS', 'items/');
define('DIR_TEMPLATES', 'templates/');
define('NAME_APP', 'H0me C0design');

// Récupération des fonctions diverses
include(DIR_INCLUDE . 'fonctions.php');
include(DIR_INCLUDE . 'appelbdd.php'); 