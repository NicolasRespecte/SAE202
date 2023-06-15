<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>	

<h1>Gestion des Parking</h1>
<h2>Vous venez de modifier</h2>
<hr>
<?php
$id = $_POST['idparking'];
$nom=$_POST['nom'];
$emplacement=$_POST['emplacement'];
$iframe=$_POST['iframe'];
//var_dump($_FILES);
            $mabd = connexionBD();
            $req = 'UPDATE Parking SET nom_parking="'.$nom.'", emplacement_parking="'.$emplacement.'", iframe_parking="'.$iframe.'" WHERE id_parking='.$id ;
$resultat = $mabd->query($req);
//echo $req;
echo '<h2>Votre modification a bien était enregistée ! </h2>';
header("refresh:2;url=Parkings_gestion.php");
exit;            
?>
</tbody>
</table>
</body>
</html>