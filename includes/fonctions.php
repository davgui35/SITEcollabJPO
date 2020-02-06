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
    global $cards;


    foreach ($cards as $key => $article) {
        if ($article['id'] == $id) {
            return $article;
        }
    }

    // On retourne false dans le cas on trouve pas la serie
    return false;
}


function creatCards($cards, $type)
{
  $html = '';
  $html .='
  <div class="container">
  <div class="row row-cols-1 row-cols-md-2">';
    foreach ($cards as $carte) {
      if($carte['type'] == $type){
        $html .= 
          '<div class="col mb-4">
            <div class="card">
            <a href="voir_article.php?id=' . $carte['id'] . '">
            <div class="card-body">
              <div class="d-flex">
                <div>
                <img src="'. $carte['avatar'] . '" alt="avatar" width="50px" style="margin-right: 20px;">
                </div>
                <div>
                <h5 class="card-title">' . $carte['title'] . ' -- ' . $carte['date'] .'<br />' . $carte['auteur'] . '</h5>
                </div>
              </div>
              <p class="card-text">' . $carte['description'] . '</p>
            </div>
            </a>
            </div>
          </div>' ;
      }
    }
    $html .='
    </div>
  </div>';
  
  return $html;

}



function createCarousel($carousel, $type)
{
  $html = '';
  $counter = 1; 
  $html .= '
  <div class="container">
    <h2 style="text-align: center;">LES MEILLEURS ARTICLES</h2>
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">';
            foreach($carousel as $slide){
              if($counter <= 1){
                $active = ' active'; 
              } else {
                $active = ''; 
              }
              if($slide['type'] == $type){
              $html .= '
              <div class="carousel-item' . $active . '" data-interval="10000"> 
                <a href="#"><h3>Par ' . $slide['auteur'] . ' publier le ' .  $slide['date'] .'</h3>
                <p>' . $slide['description'] . '</p></a>
              </div>';
              $counter++;
              }
            }
          $html .= '</div>
    </div>';
  return $html;
}


?>