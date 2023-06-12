<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>
	
<h1>Gestion des Parkings</h1>
<br>
<a href="Parkings_new_form.php">Ajouter un Parking</a>
<br>
<table border=1>
	<thead>
		<tr><td>Nom du Parking</td><td>Emplacement du Parking</td><td>Image</td><td>Supprimer</td><td>Modifier</td></tr><br>
	</thead>
	<tbody>
    <?php
$mabd = connexionBD();
$req = "SELECT * FROM Parking WHERE id_parking LIKE '%" . $_SESSION['id_parking'] . "%'";
$resultat = $mabd->query($req);
foreach ($resultat as $ligne) {
    echo '<tr>';
    echo '<td>'.$ligne['nom_parking'].'</td>';
    echo '<td>'.$ligne['emplacement_parking'].'</td>';
    echo '<td>'.$ligne['photo_parking'].'</td>';
    echo '<td><a href="Parkings_delete.php?num='.$ligne['id_parking'].'">supprimer</a></td>';
    echo '<td><a href="Parkings_update_form.php?num='.$ligne['id_parking'].'">modifier</a></td>';
    echo '</tr>';
}
?>


</tbody>
</table>
</body>
</html>