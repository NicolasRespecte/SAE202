<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<?php
$co=connexionBD();
            afficherProfil($co);
            deconnexionBD($co);

?>
<?php require 'fin.php' ?>
