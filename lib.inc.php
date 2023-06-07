<?php
session_start();
require 'secretxyz123.php';
?>
<?php
function connexionBD()
{
    try {
        $mabd = new PDO('mysql:host=localhost;dbname=SAE202', LUTILISATEUR,LEMOTDEPASSE);
        $mabd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $mabd->exec('SET NAMES utf8');
        return $mabd;
    } catch (PDOException $e) {
        echo '<p>Erreur : '.$e->getMessage().'</p>';
        die();
    }
}

function afficherParking($mabd){
    $req = "SELECT * FROM Parking";
    try {
        $resultat = $mabd->query($req);
        $lignes_resultat = $resultat->rowCount();
        if ($lignes_resultat > 0) {
        while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
            echo ' <div>Nom du Parking :'.$ligne['nom_parking'].'</div>';
            echo ' <div>Localisation :'.$ligne['emplacement_parking'].'</div>';
            echo '<img src="assets/imgs/'.$ligne['photo_parking'].'" alt="photoparking" />';
            echo "\n<hr>";
        }
     }else {
        echo '<p>Pas de résultat</p>';
     }
    } catch (PDOException $e){
        echo '<p>Erreur : '.$e->getMessage().'</p>';
        die();
    }
}


function afficherProfil($mabd) {
    $req = "SELECT * FROM Usagers WHERE id_usager LIKE '%" . $_SESSION['id_usager'] . "%'";
    $resultat = $mabd->query($req);
    $lignes_resultat = $resultat->rowCount();
    
    if ($lignes_resultat > 0) {
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo '<p>Photo de Profil : <img src="assets/imgs/Upload/' . $ligne['photo_usager'] . '" width="150px"> </p>';
            echo '<div>Nom : '.$ligne['nom_usager'].'</div>';
            echo '<div>Prénom : '.$ligne['prenom_usager'].'</div>';
            echo '<div>Email : '.$ligne['email_usager'].'</div>';
            echo '<div>Téléphone : '.$ligne['telephone_usager'].'</div>';
            echo '<div>Mot de passe : **********</div>';
            echo "<hr>\n";
        }
    } else {
        echo '<p>Pas de résultat</p>';
    }
}

function deconnexionBD(&$mabd){
    $mabd = null;
}

?>