<?php 
include('includes/bootstrap.php');

if(isset($_POST['formconnexion'])){
    $mail_connect = htmlspecialchars($_POST['mail_connect']);
    //$mdp_connect = password_hash($_POST['mdp_connect'], PASSWORD_DEFAULT);  
    $mdp_connect = sha1($_POST['mdp_connect']);
    if(!empty($_POST['mail_connect']) AND !empty($_POST['mdp_connect'])){
        $requsers = $bdd->prepare('SELECT * from membres WHERE mail = ? AND mdp = ?');
        $requsers->execute(array($mail_connect, $mdp_connect));
        $userexist = $requsers->rowCount();
        echo $mdp_connect;
        if($userexist == 1){
            $userinfos = $requsers->fetch();
            $_SESSION['id'] = $userinfos['id'];
            $_SESSION['pseudo'] = $userinfos['pseudo'];
            $_SESSION['mail'] = $userinfos['mail'];
            Header('Location: profil.php?id=' . $_SESSION['id']);
        } else {
            $erreur = 'Mauvais mail ou mot de passe !';
        }
    } else {
        $erreur = 'Vous devez avoir remplis tout les champs pour vous inscrire';
    }

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
                        <label for="mail">Mail</label>
                    </td>
                    <td>
                        <input type="email" placeholder="E-mail" id="mail_connect" name="mail_connect" value="<?php if(isset($mail_connect)){echo $mail_connect;}?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="password">Mot de passe </label>
                    </td>
                    <td>
                        <input type="password" placeholder="Mot de passe" id="mdp_connect" name="mdp_connect"/>
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