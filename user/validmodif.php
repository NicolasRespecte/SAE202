<?php require_once '../lib.inc.php'; ?>

<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$num = $_POST['num'];
$model = $_POST['model'];
$id = $_POST['id'];
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
$mabd = connexionBD();
$req = 'UPDATE Usagers SET nom_usager="' . $nom . '", prenom_usager="' . $prenom . '", email_usager="' . $email . '", telephone_usager="' . $num . '", modele_vehicule="' . $model . '", photo_usager="' . $nouvelleImage . '" WHERE id_usager=' . $id;

$mabd->query($req);
// var_dump($_SESSION);
echo '<p>Votre modification a bien était enregistée ! </p>';
header("refresh:3;url=../profil.php");
exit;

?>