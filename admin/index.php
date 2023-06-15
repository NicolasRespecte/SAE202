<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<main>	
<h1>Statistiques</h1> 	

<?php
$mabd = connexionBD();
$req = 'SELECT COUNT(*) AS total_lignes  FROM Usagers';
$resultat = $mabd->query($req);

$value = $resultat->fetch(PDO::FETCH_ASSOC);
$total = $value['total_lignes'];

echo 'Nombre totaux d\'usagers : '.$total.'<br> <br>';

$req = 'SELECT COUNT(*) AS total_lignes  FROM Reservation';
$resultat = $mabd->query($req);

$value = $resultat->fetch(PDO::FETCH_ASSOC);
$total = $value['total_lignes'];

echo 'Nombre de réservation effectuées au total   : '.$total.'<br> <br>'; 

$req = 'SELECT COUNT(*) AS total_lignes  FROM Trajet';
$resultat = $mabd->query($req);

$value = $resultat->fetch(PDO::FETCH_ASSOC);
$total = $value['total_lignes'];

echo 'Trajets totaux réalisés : '.$total.'<br> <br>';    



$req2 = 'SELECT AVG(places_dispo) AS moyenne_places FROM Trajet';
$resultat2 = $mabd->query($req2);

$value2 = $resultat2->fetch(PDO::FETCH_ASSOC);
$moy_places = $value2['moyenne_places'];


echo 'Moyenne de places disponibles par trajets : '.$moy_places.'<br> <br>';


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

echo 'L\'usager ayant le plus reservé de trajets dans l\'application est '.$usager_reserve_prenom.' '.$usager_reserve_nom.' avec '.$occurence_reserve.' trajets reservés au total. <br> <br>';

?>
</main>
<?php require '../fin.php' ?>