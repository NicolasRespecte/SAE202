<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<hr> <h1>Gestion des Trajets</h1> <hr>

<?php

$num=$_GET['num'];
$mabd = connexionBD();
$req = 'DELETE FROM Trajet WHERE id_trajet='.$num;
//echo $req; 
$resultat = $mabd->query($req);
echo '<h2>Vous venez de supprimer le trajet numéro '.$num.'</h2>';
header("refresh:2;url=Trajets_gestion.php");
exit;
?>

</body>
</html>
