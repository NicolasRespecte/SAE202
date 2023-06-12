<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>

<hr> <h1>Gestion des Parkings</h1> <hr>

<?php

$num=$_GET['num'];
$mabd = connexionBD();
$req = 'DELETE FROM Parking WHERE id_parking='.$num;
//echo $req; 
$resultat = $mabd->query($req);
echo '<h2>Vous venez de supprimer le parking numéro '.$num.'</h2>';
header("refresh:2;url=Parkings_gestion.php");
exit;
?>

</body>
</html>
