<?php
include('includes/bootstrap.php');

if(isset($_GET['id']) AND $_GET['id'] > 0){
    $get_id = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($get_id));
    $userinfo = $requser->fetch();

?>


<!DOCTYPE html>
<?= include(DIR_TEMPLATES . 'header.php'); ?>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
            <br />
            <a href="editionprofil.php">Editer mon profil</a>
            <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
<?= include(DIR_TEMPLATES . 'footer.php'); ?>
<?php   
}
?>