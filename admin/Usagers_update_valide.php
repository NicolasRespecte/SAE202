<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>	

<h1>Gestion des Usagers</h1>
<h2>Vous venez de modifier un usager</h2>
<?php
$id=$_POST['idusager'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numero=$_POST['numero'];
$model=$_POST['model'];
$email=$_POST['email'];
$statut=$_POST['statut'];
$mdp=$_POST['mdp'];
$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	

    		// dépot du fichier téléchargé dans le dossier /var/www/r214/images/uploads
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "../assets/imgs/Upload/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }
$mdpcrypt=password_hash($mdp,PASSWORD_DEFAULT);
$mabd=connexionBD();
$req = 'UPDATE Usagers SET nom_usager="'.$nom.'",statut="'.$statut.'", prenom_usager="'.$prenom.'", telephone_usager="'.$numero.'", email_usager="'.$email.'", mdp_usager="'.$mdp.'", modele_vehicule="'.$model.'", photo_usager="'.$nouvelleImage.'" WHERE id_usager='.$id ;
//echo $req;
$resultat=$mabd->query($req);
echo '<h2>Votre modification a bien était enregistée ! </h2>';
header("refresh:2;url=Usagers_gestion.php");
?>
</body>
</html>