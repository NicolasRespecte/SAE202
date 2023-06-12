<?php require '../../debut.php'; require_once '../../lib.inc.php';?>
<?php require '../../header.inc.php'; ?>
<?php require '../header-admin.php'; ?>	

<h1>Gestion des Parking</h1>
<h2>Modification du Parking</h2>
<hr>

<?php
$mabd = connexionBD();
$req = "SELECT * FROM Parking WHERE id_parking LIKE '%" . $_SESSION['id_parking'] . "%'";
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>

<form action="Parkings_update_valide.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="idparking" value="<?php echo $ligne['id_parking'] ?>" >
Nom du Parking:<input type="text" name="nom" value="<?php echo $ligne['nom_parking'] ?>" ><br>
Emplacement du Parking:<input type="text" name="emplacement" value="<?php echo $ligne['emplacement_parking'] ?>"><br>
Photo : <input type="file" name="photo"/><br />
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