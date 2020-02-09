<?php
/**
 * Cette fonction permet de debuger une variable de type tableau 
 *
 * @return void
 */
function dd($data)
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
function getArticle($id, $bdd) 
{
    $req = $bdd->query('SELECT * FROM articles WHERE id = ' . $id);
    $article = $req->fetch();
    $req->closeCursor(); 
    if (!empty($article)) {
      return $article;
    }

    // On retourne false dans le cas on trouve pas la serie
    return false;
}

/**
 * Cette fonction permet de créer les cartes des article sur chaque page avec un domaine spécifique 
 * grâce à son identifiant
 *
 * @return 
 */
function createCards($req)
{
  $html = '';
  $html .='
  <div class="container">
  <div class="row row-cols-1 row-cols-md-2">';
    while($carte = $req->fetch()) { 
        $html .= 
          '<div class="col mb-4">
            <div class="card">
            <a href="voir_article.php?id=' . $carte['id'] . '">
            <div class="card-body">
              <div class="d-flex">
                <div>
                '/*<img src="'. $carte['avatar'] . '" alt="avatar" width="50px" style="margin-right: 20px;">*/.'
                </div>
                <div>
                <h5 class="card-title">' . $carte['titre'] . ' -- ' . $carte['date'] .'<br /></h5>
                </div>
              </div>
              <p class="card-text">' . $carte['description'] . '</p>
            </div>
            </a>
            </div>
          </div>' ;
      }
    
    $html .='
    </div>
  </div>';
  
  return $html;

}

/**
 * Cette fonction permet de créer un carousel sur la chaque page de domaine différent 
 * pour voir les trois articles du moment 
 *
 * @return 
 */

function createCarousel($req)
{
  $html = '';
  $counter = 1; 
  $html .= '
  <div class="container" style="text-align: center;">
    <h2>LES MEILLEURS ARTICLES</h2>
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">';
            while($carte = $req->fetch()) { 
              if($counter <= 1){
                $active = ' active'; 
              } else {
                $active = ''; 
              }
              $html .= '
              <div class="carousel-item' . $active . '" data-interval="10000"> 
                <a href="#"><h3>Par ' . $carte['auteur'] . ' publier le ' .  $carte['date'] .'</h3>
                <p>' . $carte['description'] . '</p></a>
              </div>';
              $counter++;

            }
          $html .= '</div>
    </div>';
  return $html;
}


?>