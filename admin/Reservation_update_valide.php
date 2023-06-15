<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<h1>Gestion des Réservations</h1>
<?php
$idr = $_POST['idr'];
$idu=$_POST['idu'];
$idt=$_POST['idt'];
//var_dump($_FILES);
            $mabd = connexionBD();
            $req = 'UPDATE Reservation SET id_reservation="'.$idr.'", id_usager="'.$idu.'", id_trajet="'.$idt.'" WHERE id_reservation='.$idr ;
$resultat = $mabd->query($req);
//echo $req;
echo '<h2>Votre modification a bien était enregistée ! </h2>';
header("refresh:2;url=Reservation_gestion.php");
exit;            
?>
</body>
</html>