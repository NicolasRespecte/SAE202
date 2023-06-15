<?php 
require 'debut.php'; 
require_once 'lib.inc.php';
require 'header.inc.php';

echo '<h1>Trajet disponible</h1>';

$depart = $_POST['depart'];
$arrive = $_POST['arrive'];
$datedepart = $_POST['datedepart'];
$personne = $_POST['personne'];

$mabd = connexionBD();

$req = 'SELECT * FROM Trajet WHERE ville_depart = "'.$depart.'" OR ville_arrivee = "'.$arrive.'" AND date_depart = "'.$datedepart.'" AND places_dispo = "'.$personne.'"';
$resultat = $mabd->query($req);

if ($resultat->rowCount() == 0) {
    echo "<p>Aucun résultat trouvé.</p>";
} else {
    foreach ($resultat as $ligne) {
        echo '<div>';
        echo '<p>Ville de départ: '.$ligne['ville_depart'].'</p>';
        echo '<p>Ville d\'arrivée: '.$ligne['ville_arrivee'].'</p>';
        echo '<p>Point de départ: '.$ligne['point_depart'].'</p>';
        echo '<p>Point d\'arrivée: '.$ligne['point_arrivee'].'</p>';
        echo '<p>Date de départ: '.$ligne['date_depart'].'</p>';
        echo '<p>Heure départ: '.$ligne['heure_depart'].'</p>';
        echo '<p>Heure arrivée: '.$ligne['heure_arrivee'].'</p>';
        echo '<p>Places disponibles: '.$ligne['places_dispo'].'</p>';
        echo '<p>Prix: '.$ligne['prix_passager'].' €</p>';
        echo '<a href="user/reserverTrajet.php">Réserver</a>';
        echo '</div><hr>';
    }
}

//var_dump($_POST);

require 'fin.php'; 
?>
