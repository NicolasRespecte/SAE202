<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<main>
<h1>Contact</h1>


<form action="????????????" method="post">

    <div class="deuxchamp">
        <div class="champ2">
            <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="Nom" required="" />
        </div>
        <div class="champ2">
            <label for="prenom">Prenom</label>
                <input type="text" name="prenom" placeholder="Prenom" required="" />
        </div>
    </div>
    <div class="champ">
        <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required="" />
        <span class="ligne"></span>
    </div>
    <div class="champ">
        <label for="message">Message</label>
            <textarea type="text" name="message" placeholder="Message" required=""></textarea>
        <span class="ligne"></span>
    </div>
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