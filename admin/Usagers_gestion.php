<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<main>	
<h1>Gestion des Usagers</h1>

<div class="gestion">
<div class="aa">
<p>Liste des Usagers</p><a href="Usagers_new_form.php"><img src="../assets/imgs/pluss.svg" alt="" width="25px"></a>
</div>
<?php
$mabd = connexionBD();
$req = "SELECT * FROM Usagers ORDER BY id_usager";
$resultat = $mabd->query($req);
foreach ($resultat as $ligne) {

    echo '<div class="bb">' . $ligne['id_usager'] .
    '<div>' . $ligne['nom_usager'] . '</div>' .
    '<div>' . $ligne['prenom_usager'] . '</div>' .
    '<div class="vrap">' . $ligne['photo_usager'] . '</div>' .
    '<div>' . $ligne['telephone_usager'] . '</div>' .
    '<div>' . $ligne['email_usager'] . '</div>' .
    '<div>' . $ligne['modele_vehicule'] . '</div>' .
    '<div>' . $ligne['statut'] . '</div>' .
    '<div class="boutons">' . '<a href="Usagers_delete.php?num=' . $ligne['id_usager'] . '"><img src="../assets/imgs/multi.svg" alt="" width="20px"></a>' .
    '<a href="Usagers_update_form.php?num=' . $ligne['id_usager'] . '"><img src="../assets/imgs/PENSIL.svg" alt=""width="20px"></a>' . '</div></div>';




}
?>

</div>
</main>
<?php require '../fin.php' ?>  