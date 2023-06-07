<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<main>
<h1>Connexion</h1>


<form action="user/verifFormConnexion.php" method="post" enctype="multipart/form-data">

    <div class="champ">
        <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email" required="" />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="password">Mot de passe</label>
            <input type="password" name="mdp" placeholder="Mot de passe" required="" /><br />
        <span class="ligne"></span>
    </div>
    <p class="ins">Vous n’avez pas encore de compte ? <a href="formInscription.php">Incriver vous !</a></p>
    <input id="env" type="submit" value="Envoyer"> 
</form> 
<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
</main>
<?php require 'fin.php' ?>