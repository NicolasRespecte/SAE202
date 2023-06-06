<?php
require_once '../lib.inc.php';
?>

<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$num=$_POST['num'];
$model=$_POST['model'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$mdpcrypt=password_hash($mdp,PASSWORD_DEFAULT);
$mabd=connexionBD();
$req='INSERT INTO Usagers(nom_usager,prenom_usager,telephone_usager,email_usager,mdp_usager,modele_vehicule) VALUES("'.$nom.'","'.$prenom.'", "'. $num .'", "'. $email .'","' .$mdpcrypt. '","'.$model.'")'; 
//echo $req;
// on lance la requête
$resultat=$mabd->query($req);
   header("Location: ../index.php");
exit();


?>