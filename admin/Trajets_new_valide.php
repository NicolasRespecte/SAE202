<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<h1>Gestion des Trajets</h1>
<h2>Vous venez d'ajouter un trajet</h2>
<?php
$pdepart=$_POST['pdepart'];
$parrivee=$_POST['parrivee'];
$vdepart=$_POST['depart'];
$varrivee=$_POST['arrive'];
$date=$_POST['datedepart'];
$hdepart=$_POST['hdepart'];
$harrivee=$_POST['harrivee'];
$place=$_POST['personne'];
$mabd = connexionBD();


            $req = "INSERT INTO Trajet (point_depart, point_arrivee, ville_depart, ville_arrivee, date_depart, heure_depart, heure_arrivee, places_dispo) VALUES ('$pdepart', '$parrivee', '$vdepart', '$varrivee', '$date', '$hdepart', '$harrivee', '$place')";
            echo $req;
            $resultat = $mabd->query($req);
header("refresh:2;url=Trajets_gestion.php");
exit;
?>
</body>
</html>