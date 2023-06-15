<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<hr> <h1>Gestion des Usagers</h1> <hr>

<?php

$num=$_GET['num'];
$mabd = connexionBD();
$req = 'DELETE FROM Usagers WHERE id_usager='.$num;
//echo $req; 
$resultat = $mabd->query($req);
echo '<h2>Vous venez de supprimer l\'usager numéro '.$num.'</h2>';
header("refresh:2;url=Usagers_gestion.php");
exit;
?>

</body>
</html>
