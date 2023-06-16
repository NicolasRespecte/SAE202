<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<body class="TraBg">
<main>	
<h1>Gestion des Trajets</h1>

<div class="gestion">
<div class="aa">
<p>Liste des Trajets</p><a href="Trajets_new_form.php"><img src="../assets/imgs/pluss.svg" alt="" width="25px"></a>
</div>
<?php
$mabd = connexionBD();
$req = "SELECT * FROM Trajet ORDER BY id_trajet";
$resultat = $mabd->query($req);
foreach ($resultat as $ligne) {

    echo '<div class="bb">' . $ligne['id_trajet'] .
    '<div>' . $ligne['point_depart'] . '</div>' .
    '<div>' . $ligne['point_arrivee'] . '</div>' .
    '<div>' . $ligne['ville_depart'] . '</div>' .
    '<div>' . $ligne['ville_arrivee'] . '</div>' .
    '<div>' . $ligne['date_depart'] . '</div>' .
    '<div>' . $ligne['heure_depart'] . '</div>' .
    '<div>' . $ligne['heure_arrivee'] . '</div>' .
    '<div>' . $ligne['places_dispo'] . '</div>' .
    '<div class="boutons">' . '<a href="Trajets_delete.php?num=' . $ligne['id_trajet'] . '"><img src="../assets/imgs/multi.svg" alt="" width="20px"></a>' .
    '<a href="Trajets_update_form.php?num=' . $ligne['id_trajet'] . '"><img src="../assets/imgs/PENSIL.svg" alt=""width="20px"></a>' . '</div></div>';




}
?>

</div>
</main>
<?php require '../fin.php' ?>  