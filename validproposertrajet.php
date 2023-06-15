<?php
require 'debut.php';
require_once 'lib.inc.php';
require 'header.inc.php';
?>

<h2>Vous venez de proposer un trajet</h2>

<?php
$id = $_POST['idusager'];
$pdepart = $_POST['pdepart'];
$parrivee = $_POST['parrivee'];
$vdepart = $_POST['depart'];
$varrivee = $_POST['arrive'];
$date = $_POST['datedepart'];
$hdepart = $_POST['hdepart'];
$harrivee = $_POST['harrivee'];
$place = $_POST['personne'];
$mabd = connexionBD();

$req = "INSERT INTO Trajet (point_depart, point_arrivee, ville_depart, ville_arrivee, date_depart, heure_depart, heure_arrivee, places_dispo, id_usager) VALUES ('$pdepart', '$parrivee', '$vdepart', '$varrivee', '$date', '$hdepart', '$harrivee', '$place', '$id')";

$resultat = $mabd->query($req);

header("refresh:2;url=mestrajets.php");
exit;
?>
