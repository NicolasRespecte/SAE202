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
            echo '<div class="card">
                        <div>
                            <iframe src="'.$ligne['photo_parking'].'" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div>
                        '.$ligne['nom_parking'].'
                        </div>
                        <div>Localisation exacte :'.$ligne['emplacement_parking'].'</div>
                </div>';
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
            echo '<main>
            <h1>Profil</h1>
            
            <form action="modifProfil.php" method="post" enctype="multipart/form-data">
            
                    <div class="troischamp">
            
                        <div class="champgauche">
                            <div class="champ2">
                                <label for="nom">Nom</label>
                                '.$ligne['nom_usager'].'
                            </div>
                            <div class="champ2">
                                <label for="prenom">Prenom</label>
                                    '.$ligne['prenom_usager'].'
                            </div>
                        </div>
            
                        <div class="champdroite">
                            <label for="photo">Photo de profil</label>
                            <img class="photo-preview" src="assets/imgs/Upload/' . $ligne['photo_usager'] . '" width="150px">
                        </div>
            
            
            
                    </div>
                    <div class="troischamp" style="height: 260px;">
            
                        <div class="champgauche">
                            <div class="champ2">
                                <label for="email">Email</label>
                                '.$ligne['email_usager'].'
                            </div>
                            <div class="champ2">
                                <label for="password">Mot de passe</label>
                                **********
                            </div>
                            <div class="champ2">
                                <label for="num">Téléphone</label>
                                '.$ligne['telephone_usager'].'
                            </div>
                        </div>
            
                        <div class="champdroite">
                            
                        </div>
                    </div>
            
                     <div class="champ">
                        <label for="statut">Statut</label>
                        '.$ligne['statut'].'
                        <span class="ligne"></span>
                    </div>
            
                    <div class="champ">
                        <label for="model">Voiture</label>
                        '.$ligne['modele_vehicule'].'
                        <span class="ligne"></span>
                    </div>
            
                    <input id="env" type="submit" ligne="Modifier"> 
            
                </form> 
            </main>';
        }
    } else {
        echo '<p>Pas de résultat</p>';
    }
}



function afficherTrajet($mabd){
    $req = "SELECT * FROM Trajet INNER JOIN Usagers ON Trajet.id_usager = Usagers.id_usager WHERE ville_depart LIKE '%" . $recherche_nettoye . "%' OR film_duree LIKE '%" . $recherche_nettoye . "%' OR film_recette LIKE '%" . $recherche_nettoye . "%' OR film_annee LIKE '%" . $recherche_nettoye . "%' OR realisateur_prenom LIKE '%" . $recherche_nettoye . "%' OR realisateur_nom LIKE '%" . $recherche_nettoye . "%'";
	$resultat = $mabd->query($req);
	if ($resultat->rowCount() == 0) {
    echo "<p>Aucun résultat trouvé.</p>";
}else{
	foreach ($resultat as $ligne) {
		echo '<div>' ;
		echo '<p>'.$ligne['film_titre'].'</p>';
		echo '<p>Année de sortie: '.$ligne['film_annee'].'</p>';
		echo '<p>Box office: '.$ligne['film_recette'].' millions $</p>';
		echo '<p> Durée: '.$ligne['film_duree'].' minutes</p>';
		echo '<p> Réalisateur: '.$ligne['realisateur_prenom'].' '.$ligne['realisateur_nom'].'</p>';
		echo '<p> <img width="350px" height"auto" src="images/uploads/' . $ligne['film_photo'] . '"> </p>';
		echo '</div><hr>';
  }
	}
}





function deconnexionBD(&$mabd){
    $mabd = null;
}

?>