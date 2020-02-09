<?php 
include('includes/bootstrap.php');

function exist($variable_test, $name, $bdd){
    $req = $bdd->prepare('SELECT * FROM membres WHERE ' . $name . ' = ?');
    $req->execute(array($variable_test));
    $exist = $req->rowCount();

    return $exist;
}


if(isset($_POST['forminscription'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']); // Hashage du mot de passe 
    $mdp2 = sha1($_POST['mdp2']);

    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])){ //tester si ça marche avec $mdp, $mdp2...
        if(strlen($pseudo) <= 255){
            if($mail == $mail2){
                if(exist($pseudo, 'pseudo', $bdd) == 0){
                    if(strlen($pseudo) <= 255){
                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){ //test e-mail valide ou non ? 
                            if(exist($mail, 'mail', $bdd) == 0){
                                if($mdp == $mdp2){
                                    $insertmail = $bdd->prepare('INSERT INTO membres(pseudo, mail, mdp) VALUES(?, ?, ?)');
                                    $insertmail->execute(array($pseudo, $mail, $mdp));
                                    $erreur = 'Votre compte à bien été créer !';
                                } else {
                                    $erreur = 'Vos mots de passe ne correspondent pas !';
                                }
                            } else {
                                $erreur = 'Ce mail existe déjà, vous avez peut-être déjà un compte ? ';
                            }
                        } else {
                            $erreur = 'Votre mail n\'est pas valide';
                        }
                    } else {
                        $erreur ='Votre mail ne doit pas dépasser 255 caractères';
                    }
                } else {
                    $erreur ='Votre pseudo est déjà utilisé trouvez en un autre !';
                }
            } else {
                $erreur ='Vos mails ne correspondent pas !';
            }
        } else {
            $erreur ='Votre pseudo ne doit pas dépasser 255 caractères';
        }
    } else {
        $erreur = 'Vous devez avoir remplis tout les champs pour vous inscrire';
    }

}

?> 



<!DOCTYPE html>
<html lang="fr  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=div">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSCRIPTION</title>
</head>
<body>
    <div align="center">
        <h2>Inscription</h2>
        <br />
        <form action="" method="POST"> <!--formulaire d'inscription -->
            <table> <!--Meilleur alignement des éléments dans une table -->
                <tr>
                    <td align="right">
                        <label for="pseudo">Pseudo</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;}?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail">E-mail</label>
                    </td>
                    <td>
                        <input type="email" placeholder="E-mail" id="mail" name="mail" value="<?php if(isset($mail)){echo $mail;}?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail2">Confirmation de votre e-mail</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Confirmer votre e-mail" id="mail2" name="mail2" value="<?php if(isset($mail2)){echo $mail2;}?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp">Mot de passe </label>
                    </td>
                    <td>
                        <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp2">Confirmation de votre mot de passe </label>
                    </td>
                    <td>
                        <input type="password" placeholder="Votre mot de passe" id="mdp2" name="mdp2"/>
                    </td>
                </tr>
                
                <tr>
                
                    <td align="center">
                    <br />
                        <input type="submit" name="forminscription" value="Inscription"/>
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
</body>
</html>