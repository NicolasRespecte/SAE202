<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>	
<br>
<br>
<?php
$id=$_POST['idtrajet'];
$pdepart=$_POST['pdepart'];
$parrivee=$_POST['parrivee'];
$vdepart=$_POST['depart'];
$varrivee=$_POST['arrive'];
$date=$_POST['datedepart'];
$hdepart=$_POST['hdepart'];
$harrivee=$_POST['harrivee'];
$place=$_POST['personne'];
$mabd=connexionBD();
$req = 'UPDATE Trajet SET point_depart="'.$pdepart.'",point_arrivee="'.$parrivee.'", ville_depart="'.$vdepart.'", ville_arrivee="'.$varrivee.'", date_depart="'.$date.'", heure_depart="'.$hdepart.'", heure_arrivee="'.$harrivee.'", places_dispo="'.$place.'" WHERE id_trajet='.$id ;
//echo $req;
$resultat=$mabd->query($req);
echo '<h2>Votre modification a bien était enregistée ! </h2>';
header("refresh:2;url=mestrajets.php");
?>
</body>
</html>