<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<h1>Gestion des Parking</h1>
<h2>Vous venez d'ajouter un parking</h2>
<hr>
<?php
$nom=$_POST['nom'];
$emplacement=$_POST['emplacement'];
$iframe=$_POST['iframe'];
//var_dump($_FILES);
$mabd = connexionBD();


            $req = "INSERT INTO Parking (nom_parking, emplacement_parking, iframe_parking) VALUES ('$nom', '$emplacement', '$iframe')";
            //echo $req;
            $resultat = $mabd->query($req);
header("refresh:2;url=Parkings_gestion.php");
exit;
?>
</tbody>
</table>
</body>
</html>