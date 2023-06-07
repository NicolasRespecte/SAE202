<?php
session_start();
require 'secretxyz123.php';
?>
<?php
function connexionBD()
{
    try {
        $mabd = new PDO('mysql:host=localhost;dbname=SAE202', LUTILISATEUR,LEMOTDEPASSE);
        $mabd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $mabd->exec('SET NAMES utf8');
        return $mabd;
    } catch (PDOException $e) {
        echo '<p>Erreur : '.$e->getMessage().'</p>';
        die();
    }
}

function afficherParking($mabd){
    $req = "SELECT * FROM Parking";
    try {
        $resultat = $mabd->query($req);
        $lignes_resultat = $resultat->rowCount();
        if ($lignes_resultat > 0) {
        while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
            echo ' <div>Nom du Parking :'.$ligne['nom_parking'].'</div>';
            echo ' <div>Localisation :'.$ligne['emplacement_parking'].'</div>';
            echo '<img src="assets/imgs/'.$ligne['photo_parking'].'" alt="photoparking" />';
            "\n<hr>";
        }
     }else {
        echo '<p>Pas de résultat</p>';
     }
    } catch (PDOException $e){
        echo '<p>Erreur : '.$e->getMessage().'</p>';
        die();
    }
}
function deconnexionBD(&$mabd){
    $mabd = null;
}
?>