<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>

<h1>Gestion des Parking</h1>
<h2>Modification du Parking</h2>
<hr>

<?php
$num = $_GET['num'];
$mabd = connexionBD();
$req = 'SELECT * FROM Parking WHERE id_parking ='.$num;
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>

<form action="Parkings_update_valide.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="idparking" value="<?php echo $ligne['id_parking'] ?>" >
Nom du Parking:<input type="text" name="nom" value="<?php echo $ligne['nom_parking'] ?>" ><br>
Emplacement du Parking:<input type="text" name="emplacement" value="<?php echo $ligne['emplacement_parking'] ?>"><br>
Iframe : <input type="text" name="iframe"/><br />
    <input id="env" type="submit" value="Envoyer"> 
</form> 
<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
</tbody>
</table>
</body>
</html>