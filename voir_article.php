<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<?php
if (empty($_GET['id']) || !$article = getArticle($_GET['id'])) {
    // On redirige vers la page series.php avec une erreur
    // Header('Location: series.php?alert=' . urlencode('Série introuvable !') . '&type=danger');
    return Header('Location: index.php');
}

?>

<div class="container" style="background-color: #657F9C;">
    <div  style="color: white;">
        <h3>HTML / ARTICLE</h3>
        <h2><?= $article['title']; ?></h2>
        <div class="d-flex">
            <img src="<?= $article['avatar']; ?>" alt="avatar" width="100px">
            <h3><?= $article['auteur'] . '<br />' . $article['date']?></h3>
        </div>
        <blockquote><?= $article['description']; ?></blockquote>
    </div>
</div>















<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>