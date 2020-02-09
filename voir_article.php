<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<?php
if (empty($_GET['id']) || !$article = getArticle($_GET['id'], $bdd)) { //test si l'artcile demander existe bien dans la base 
    // On redirige vers la page index.php
    return Header('Location: index.php');
}

?>

<div class="container" style="background-color: #657F9C;">
    <div  style="color: white;">
        <h3><?=$article['type']; ?> / ARTICLE</h3>
        <h2><?= $article['titre']; ?></h2>
        <div class="d-flex">
            <!--<img src="<?= $article['avatar']; ?>" alt="avatar" width="100px">-->
            <h3><?= $article['auteur'] . '<br />' . $article['date']?></h3>
        </div>
        <blockquote><?= $article['description']; ?></blockquote>
    </div>
</div>



<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>