<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>
<main>
<h1>Inscription</h1>

<form action="user/validFormInscription.php" method="post"> 
        Adresse e-mail : <input type="text" name="email" /><br />  
        Mot de passe : <input type="password" name="mdp" /><br />  
        <input type="submit" value="Envoyer"> 
    </form> 
</main>
<?php require 'fin.php' ?>