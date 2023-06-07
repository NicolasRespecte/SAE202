<?php require_once 'lib.inc.php'; ?>
<?php


$co=connexionBD();
            afficherProfil($co);
            deconnexionBD($co);
            echo '<a href="user/modifProfil.php">Modifiez votre profil ici</a>';
?>