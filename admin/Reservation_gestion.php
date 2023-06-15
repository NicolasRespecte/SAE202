<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<main>	
<h1>Gestion des Réservations</h1>

<div class="gestion">
<div class="aa">
<p>Liste des Parkings</p><a href="Reservation_new_form.php"><img src="../assets/imgs/pluss.svg" alt="" width="25px"></a>
</div>
<?php
$mabd = connexionBD();
$req = "SELECT * FROM Reservation ORDER BY id_reservation";
$resultat = $mabd->query($req);
foreach ($resultat as $ligne) {

    echo '<div class="bb">' . $ligne['id_reservation'] .
    '<div>' . $ligne['id_usager'] . '</div>' .
    '<div class="vrap">' . $ligne['id_trajet'] . '</div>' .
    '<div class="boutons">' . '<a href="Reservation_delete.php?num=' . $ligne['id_reservation'] . '"><img src="../assets/imgs/multi.svg" alt="" width="20px"></a>' .
    '<a href="Reservation_update_form.php?num=' . $ligne['id_reservation'] . '"><img src="../assets/imgs/PENSIL.svg" alt=""width="20px"></a>' . '</div></div>';




}
?>

</div>
</main>
<?php require '../fin.php' ?>  