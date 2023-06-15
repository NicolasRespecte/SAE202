<?php
require 'debut.php';
require_once 'lib.inc.php';
require 'header.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['trajet_id'])) {
        $trajetId = $_POST['trajet_id'];
        $idUsager = $_SESSION['id_usager'];

        $mabd = connexionBD();
        $req = 'INSERT INTO Reservation (id_trajet, id_usager) VALUES (:trajet_id, :id_usager)';
        $stmt = $mabd->prepare($req);
        $stmt->bindParam(':trajet_id', $trajetId);
        $stmt->bindParam(':id_usager', $idUsager);

        if ($stmt->execute()) {
            echo "<h1>Réservation réussie</h1>";
            echo "<p>Votre trajet a été réservé avec succès.</p>";
        } else {
            echo "<h1>Erreur de réservation</h1>";
            echo "<p>Une erreur s'est produite lors de la réservation du trajet.</p>";
        }
    } else {
        echo "<h1>Erreur de réservation</h1>";
        echo "<p>Une erreur s'est produite lors de la réservation du trajet.</p>";
    }
}
header("refresh:2;url=mestrajets.php");
exit;

require 'fin.php';
?>
