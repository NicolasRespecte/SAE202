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

function afficherTrajet($mabd){
    $req = "SELECT * FROM Trajet";
    try {
        $resultat = $mabd->query($req);
        $lignes_resultat = $resultat->rowCount();
        if ($lignes_resultat > 0) {
        while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
        echo '';
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