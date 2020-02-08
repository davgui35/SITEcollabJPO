<?php
include('includes/bootstrap.php');
?>
<!DOCTYPE html>
<!-- header -->
<?= include(DIR_TEMPLATES . 'header.php'); ?>

<?= createCarousel($carousel, 'IA');?>

<?= creatCards($cards, 'IA'); ?>
<!-- footer -->
<?= include(DIR_TEMPLATES . 'footer.php'); ?>