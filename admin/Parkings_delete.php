<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>

<hr> <h1>Gestion des Parkings</h1> <hr>

<?php

$id = $_GET['id_parking'];

$mabd = connexionBD();

$req = 'DELETE FROM Parking WHERE id_parking='.$id;

echo $req;
 
$resultat = $mabd->query($req);

echo '<h2>Vous venez de supprimer le parking numéro '.$id.'</h2>';
?>

</body>
</html>
