<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<hr> <h1>Gestion des Réservations</h1> <hr>

<?php

$num=$_GET['num'];
$mabd = connexionBD();
$req = 'DELETE FROM Reservation WHERE id_reservation='.$num;
//echo $req; 
$resultat = $mabd->query($req);
echo '<h2>Vous venez de supprimer la réservation '.$num.'</h2>';
header("refresh:2;url=Reservation_gestion.php");
exit;
?>

</body>
</html>
