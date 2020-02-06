<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>


<!-- Liste des tutos wp ajouter par les utilisateurs (apercu) + lien vers une page avec l'article complet + commentaires des utilisateurs   -->
<?= createCarousel($carousel, 'WP');?>

<?= creatCards($cards, 'WP'); ?>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>