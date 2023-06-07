<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<?php
$co=connexionBD();
            afficherProfil($co);
            deconnexionBD($co);
            echo '<a href="modifProfil.php">Modifiez votre profil ici</a>';

?>
<?php require 'fin.php' ?>
