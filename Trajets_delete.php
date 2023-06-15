<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>
<br>
<br>
<?php

$num=$_GET['num'];
$mabd = connexionBD();
$req = 'DELETE FROM Trajet WHERE id_trajet='.$num;
//echo $req; 
$resultat = $mabd->query($req);
echo '<h2>Vous venez de supprimer votre trajet numéro '.$num.'</h2>';
header("refresh:2;url=mestrajets.php");
exit;
?>

</body>
</html>
