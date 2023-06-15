<?php 
require 'debut.php'; 
require_once 'lib.inc.php';
require 'header.inc.php';
?>
<main>
<h1>Trajet disponible</h1>
<?php 
$depart = $_POST['depart'];
$arrive = $_POST['arrive'];
$datedepart = $_POST['datedepart'];
$personne = $_POST['personne'];

$mabd = connexionBD();

$req = 'SELECT * FROM Trajet WHERE ville_depart = "'.$depart.'" OR ville_arrivee = "'.$arrive.'" AND date_depart = "'.$datedepart.'" OR places_dispo = "'.$personne.'"';
$resultat = $mabd->query($req);

if ($resultat->rowCount() == 0) {
    echo "<p>Aucun résultat trouvé.</p>";
} else {
    foreach ($resultat as $ligne) {
        echo '<div class="boite">
        <div class="tra">
            <div class="ville"><p>'.$ligne['ville_depart'].'</p></div>
            <div class="containerrr">
                <div class="point"></div>
                <div class="barre"></div>
                <div class="point2"></div>
            </div>
            <div class="ville"><p>'.$ligne['ville_arrivee'].'</p></div>
        </div>
        <div class="petite">
            <div class="villo"><p>'.$ligne['point_depart'].'</p></div>
            <div class="villo"><p>'.$ligne['point_arrivee'].'</p></div>
        </div>
        <div class="DéAr">
            <div class="Départt">
                <p>Départ le: '.$ligne['date_depart'].'</p>
                <p>A '.$ligne['heure_depart'].'</p>
            </div>
            <div class="Ari">
                <p>Arriver a: '.$ligne['heure_arrivee'].'</p>
                <p>Place disponible: '.$ligne['places_dispo'].'</p>
            </div>
    
        </div>
            <form action="reserverTrajet.php">
                <input id="env" type="submit" value="Réserver">
                <br>    
            </form>
    </div>';

    }
}
?>
</main>
<?php
require 'fin.php'; 
?>
