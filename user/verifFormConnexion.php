<?php
require_once '../lib.inc.php';
?>
<?php
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$mabd=connexionBD();
$req='SELECT * FROM Usagers WHERE email_usager LIKE "'.$email.'" ' ; 
echo '<p>'.$req.'</p>';
// on lance la requête
$resultat=$mabd->query($req);
// on calcule le nombre de lignes renvoyées
$lignes_resultat=$resultat->rowCount();
if ($lignes_resultat>0) { // y a-t-il des résultats ?
    // oui : pour chaque résultat : afficher
    $ligne=$resultat->fetch(PDO::FETCH_ASSOC);
    if (password_verify($mdp,$ligne['mdp_usager'] )) {
        $_SESSION['prenom_usager'] = $ligne['prenom_usager'];
        $_SESSION['nom_usager'] = $ligne['nom_usager'];
        header('Location: ../index.php');
    } else {
        $_SESSION['erreur'] = '<h1 class="erreur">Mot de passe incorrect.</h1>';
        header('Location: ../formConnexion.php');
    }
} else {
    $_SESSION['erreur'] = '<h1 class="erreur">Désolé, le login saisi n\'existe pas</h1>';
    header('Location: ../formConnexion.php');
}
deconnexionBD($mabd);
?>