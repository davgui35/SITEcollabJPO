<?php 
include('includes/bootstrap.php');

if(isset($_POST['formconnexion'])){
    $pseudo_connect = htmlspecialchars($_POST['pseudo_connect']);
    $mail_connect = htmlspecialchars($_POST['mail_connect']);


}

?> 


<!DOCTYPE html>
<?= include(DIR_TEMPLATES . 'header.php'); ?>
    <div align="center">
        <h2>Connexion</h2>
        <br />
        <form action="" method="POST"> <!--formulaire d'inscription -->
            <table> <!--Meilleur alignement des éléments dans une table -->
                <tr>
                    <td align="right">
                        <label for="pseudo">Pseudo</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Pseudo" id="pseudo_connect" name="pseudo_connect" value="<?php if(isset($pseudo_connect)){echo $pseudo_connect;}?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail">E-mail</label>
                    </td>
                    <td>
                        <input type="email" placeholder="E-mail" id="mail_connect" name="mail_connect" value="<?php if(isset($mail_connect)){echo $mail_connect;}?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                    <br />
                        <input type="submit" name="formconnexion" value="Connexion"/>
                    </td>
                </tr>
            </table>
        </form>
        <br /><br /> 
        <?php if(isset($erreur)){
            echo '<font color="red">' . $erreur . '</font>';
        }
        ?>
    </div>
<?= include(DIR_TEMPLATES . 'footer.php'); ?>