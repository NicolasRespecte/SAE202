<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>
<main>
<h1>Parkings</h1>
<div class="galery">
<?php

//var_dump($_SESSION);
            
            $co=connexionBD(); // se connecter à la base de données afficherJeux($co); // afficher les jeux
            afficherParking($co);
            deconnexionBD($co); // se déconnecter de la base de données 
            ?> 
</div>
</main>  
<?php require 'fin.php'; ?>