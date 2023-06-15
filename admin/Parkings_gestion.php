<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<main>	
<h1>Gestion des Parkings</h1>

<div class="gestion">
<div class="aa">
<p>Liste des Parkings</p><a href="Parkings_new_form.php"><img src="../assets/imgs/pluss.svg" alt="" width="25px"></a>
</div>
<?php
$mabd = connexionBD();
$req = "SELECT * FROM Parking ORDER BY id_parking";
$resultat = $mabd->query($req);
foreach ($resultat as $ligne) {

    echo '<div class="bb">' . $ligne['id_parking'] .
    '<div>' . $ligne['emplacement_parking'] . '</div>' .
    '<div class="vrap">' . $ligne['iframe_parking'] . '</div>' .
    '<div>' . $ligne['nom_parking'] . '</div>' .
    '<div class="boutons">' . '<a href="Parkings_delete.php?num=' . $ligne['id_parking'] . '"><img src="../assets/imgs/multi.svg" alt="" width="20px"></a>' .
    '<a href="Parkings_update_form.php?num=' . $ligne['id_parking'] . '"><img src="../assets/imgs/PENSIL.svg" alt=""width="20px"></a>' . '</div></div>';




}
?>

</div>
</main>
<?php require '../fin.php' ?>  