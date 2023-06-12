<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require '../header.inc.php'; ?>

<h1>Gestion des Parking</h1>
<h2>Vous venez d'ajouter un parking</h2>
<hr>
<?php
$nom=$_POST['nom'];
$emplacement=$_POST['emplacement'];
//var_dump($_FILES);
$mabd = connexionBD();
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
	            "../../assets/imgs/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }


            $req = "INSERT INTO Parking (nom_parking, emplacement_parking, photo_parking) VALUES ('$nom', '$emplacement', '$nouvelleImage')";
            echo $req;
            $resultat = $mabd->query($req);
            
?>
</tbody>
</table>
</body>
</html>