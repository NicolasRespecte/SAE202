<?php
    if ( (empty($_POST['recherche'])) ) {
        header('Location: forme_recherche.php');
    }
    $recherche = $_POST['recherche'];
    $recherche_nettoye =  filter_var( $recherche , FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

<?php require '../debut.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>

<h1>Trajet disponible</h1>
<?php

//var_dump($_SESSION);
            
            $co=connexionBD(); // se connecter à la base de données afficherJeux($co); // afficher les jeux
            afficherTrajet($co);
            deconnexionBD($co); // se déconnecter de la base de données 
            ?> 
    
<?php require '../fin.php'; ?>