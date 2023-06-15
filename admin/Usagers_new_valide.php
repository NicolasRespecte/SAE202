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
$req='INSERT INTO Usagers(nom_usager,prenom_usager,telephone_usager,email_usager,mdp_usager,modele_vehicule,photo_usager) VALUES("'.$nom.'","'.$prenom.'", "'. $num .'", "'. $email .'","' .$mdpcrypt. '","'.$model.'","' .$nouvelleImage. '")'; 
//echo $req;
// on lance la requête
$resultat=$mabd->query($req);
header("refresh:2;url=Usagers_gestion.php");
exit;


?>