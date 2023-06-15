<?php require_once '../lib.inc.php'; ?>

<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$num = $_POST['num'];
$model = $_POST['model'];
$id = $_POST['id'];
$mabd = connexionBD();
$req = 'UPDATE Usagers SET nom_usager="' . $nom . '", prenom_usager="' . $prenom . '", email_usager="' . $email . '", telephone_usager="' . $num . '", modele_vehicule="' . $model . '" WHERE id_usager=' . $id;

$mabd->query($req);
// var_dump($_SESSION);
echo '<p>Votre modification a bien était enregistée ! </p>';
header("refresh:2;url=../profil.php");
exit;

?>