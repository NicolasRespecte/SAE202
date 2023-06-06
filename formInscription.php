<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>
<main>
<h1>Inscription</h1>

<form action="user/validFormInscription.php" method="post">
        Vous êtes ? :<select><option>Etudiant</option><option>Professeur</option></select>
        Nom : <input type="text" name="nom" required/>
        Prénom : <input type="text" name="prenom" required/>
        Numéro de téléphone : <input type="text" name="num" required/>
        Modèle véhicule : <input type="text" name="model"/>
        Adresse e-mail : <input type="email" name="email" required/> 
        Mot de passe : <input type="password" name="mdp" required/>
        
        
        <input type="submit" value="Envoyer"> 
    </form> 
</main>
<?php require 'fin.php' ?>