<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<body class="TraBg">
<main>
<h1>Statistiques</h1> 
<div class="boiStats">
<?php
$mabd = connexionBD();
$req = 'SELECT COUNT(*) AS total_lignes  FROM Usagers';
$resultat = $mabd->query($req);

$value = $resultat->fetch(PDO::FETCH_ASSOC);
$total = $value['total_lignes'];

echo '<div class="toigauche"><div class="TUsa">Nombre totaux d\'usagers<br><span>'.$total.'</span></div>';

$req = 'SELECT COUNT(*) AS total_lignes  FROM Trajet';
$resultat = $mabd->query($req);

$value = $resultat->fetch(PDO::FETCH_ASSOC);
$total = $value['total_lignes'];

echo '<div class="TUsa">Trajets totaux réalisés <br><span>'.$total.'</span></div></div>	';   

$req = 'SELECT COUNT(*) AS total_lignes  FROM Reservation';
$resultat = $mabd->query($req);

$value = $resultat->fetch(PDO::FETCH_ASSOC);
$total = $value['total_lignes'];

echo '<div class="toidroite"><div class="long">Nombre de réservation effectuées <br><span>'.$total.'</span>'; 
 



$req2 = 'SELECT AVG(places_dispo) AS moyenne_places FROM Trajet';
$resultat2 = $mabd->query($req2);

$value2 = $resultat2->fetch(PDO::FETCH_ASSOC);
$moy_places = $value2['moyenne_places'];


echo 'Moyenne de places disponibles par trajets <br><span>'.$moy_places.'</span></div></div></div>';


$req4 = 'SELECT Usagers.nom_usager, Usagers.prenom_usager, COUNT(*) AS occurrences
FROM Reservation
INNER JOIN Usagers ON Reservation.id_usager = Usagers.id_usager
GROUP BY Usagers.nom_usager
ORDER BY occurrences DESC
LIMIT 1;';

$resultat4 = $mabd->query($req4);


$value4 = $resultat4->fetch(PDO::FETCH_ASSOC);
$occurence_reserve = $value4['occurrences'];
$usager_reserve_nom = $value4['nom_usager'];
$usager_reserve_prenom = $value4['prenom_usager'];

echo '<div class="champion">L\'usager ayant le plus reservé de trajets dans l\'application est <span>'.$usager_reserve_prenom.' '.$usager_reserve_nom.'</span></div>';

?>
</main>
<?php require '../fin.php' ?>