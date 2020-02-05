<?php

function debug($data)
{
	echo '<pre>';
	print_r($data);
    echo '</pre>';
}


/**
 * Cette fonction permet de récupérer un seul article
 * grâce à son identifiant
 *
 * @return void
 */
function getArticle($id)
{
    // Le mot clé global permet d'accèder à la variable stockée dans datas/series.php
    global $cardsHTML;


    foreach ($cardsHTML as $key => $article) {
        if ($article['id'] == $id) {
            return $article;
        }
    }

    // On retourne false dans le cas on trouve pas la serie
    return false;
}



?>