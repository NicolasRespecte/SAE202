<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>

<h1>Gestion des Parkings</h1>
<p>Ajouter un parking ici</p>
<hr>
<form action="Parkings_new_valide.php" method="POST" enctype="multipart/form-data">
    Nom du Parking:<input type="text" name="nom">
    Emplacement du Parking:<input type="text" name="emplacement">
    Photo : <input type="file" name="photo" required />
    
    <?php
		$mabd = connexionBD();
		$req = "SELECT * FROM  Parking ";
?>
</select>
<br>
    <input type="submit" name="ajouter">
</form>

</tbody>
</table>
</body>
</html>