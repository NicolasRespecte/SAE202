<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<h1>Connexion</h1>

<form action="user/verifFormConnexion.php" method="post"> 
        Adresse e-mail : <input type="text" name="email" /><br />  
        Mot de passe : <input type="password" name="mdp" /><br />  
        <input type="submit" value="Envoyer"> 
    </form> 
<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
<?php require 'fin.php' ?>