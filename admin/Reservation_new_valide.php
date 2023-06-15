<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<h1>Gestion des Réservations</h1>
<h2>Vous venez d'ajouter une réservation</h2>
<?php
$idr=$_POST['idr'];
$idu=$_POST['idu'];
$idt=$_POST['idt'];
//var_dump($_FILES);
$mabd = connexionBD();


            $req = "INSERT INTO Reservation (id_reservation, id_usager, id_trajet) VALUES ('$idr', '$idu', '$idt')";
            //echo $req;
            $resultat = $mabd->query($req);
header("refresh:2;url=Reservation_gestion.php");
exit;
?>
</body>
</html>