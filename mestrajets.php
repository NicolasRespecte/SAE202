<?php
require 'debut.php';
require_once 'lib.inc.php';
require 'header.inc.php';
?>
<main>
<h1>Mes Trajets</h1>
<?php
$mabd = connexionBD();
$req = "SELECT * FROM Reservation
        INNER JOIN Trajet ON Reservation.id_trajet = Trajet.id_trajet
        INNER JOIN Usagers ON Trajet.id_usager = Usagers.id_usager
        WHERE Reservation.id_usager = " . $_SESSION['id_usager'] . "
        ORDER BY Trajet.date_depart ASC";
$resultat = $mabd->query($req)->fetchAll(PDO::FETCH_ASSOC);
echo '<p>Trajets Réservés :</p>';
foreach ($resultat as $ligne) {
    echo '<div class="bb">' . $ligne['id_trajet'] .
        '<div>' . $ligne['point_depart'] . '</div>' .
        '<div>' . $ligne['point_arrivee'] . '</div>' .
        '<div>' . $ligne['ville_depart'] . '</div>' .
        '<div>' . $ligne['ville_arrivee'] . '</div>' .
        '<div>' . $ligne['date_depart'] . '</div>' .
        '<div>' . $ligne['heure_depart'] . '</div>' .
        '<div>' . $ligne['heure_arrivee'] . '</div>' .
        '<div>' . $ligne['places_dispo'] . '</div>' . '</div>';
}
?>

<?php
$mabd = connexionBD();
$req = "SELECT * FROM Trajet WHERE id_usager = '" . $_SESSION['id_usager'] . "'";
$resultat = $mabd->query($req)->fetchAll(PDO::FETCH_ASSOC);
echo '<p>Trajets Proposés :</p>';
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
        '<div class="boutons">' . '<a href="Trajets_delete.php?num=' . $ligne['id_trajet'] . '"><img src="/assets/imgs/multi.svg" alt="" width="20px"></a>' .
    '<a href="Trajets_update_form.php?num=' . $ligne['id_trajet'] . '"><img src="/assets/imgs/PENSIL.svg" alt=""width="20px"></a>' . '</div></div>';
        '</div>';
}
?>

<form action="proposerTrajet.php" method="post" enctype="multipart/form-data">
<input id="env" type="submit" value="Proposer">
</form>

<?php require 'fin.php'; ?>