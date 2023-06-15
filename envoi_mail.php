<?php
require_once 'lib.inc.php';
?>

<?php
if (count($_POST)==0) {
	header('location: Contact.php');
}

//Securite
$affichage_retour="";
$erreurs=0;

if (!empty($_POST['prenom'])) {
	$prenom=$_POST['prenom'];
} else {
	$affichage_retour .='Le champ PRENOM est obligatoire<br>';
	$erreurs++;
}

if (!empty($_POST['nom'])) {
	$nom=$_POST['nom'];
} else {
	$affichage_retour .='Le champ NOM est obligatoire<br>';
	$erreurs++;
}

if (!empty($_POST['email'])) {
		if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
		$email=$_POST['email'];
	  } else { 
		$affichage_retour .='Adresse mail incorrecte<br>';
		$erreurs++;
	  }   
  } else {
	$affichage_retour .='Le champ EMAIL est obligatoire<br>';
    $erreurs++;
  }

  if (!empty($_POST['message'])) {
	$message=$_POST['message'];
} else {
	$affichage_retour .='Le champ MESSAGE est obligatoire<br>';
    $erreurs++;
}  
$prenom=ucfirst(mb_strtolower ($prenom));
$nom=ucfirst(mb_strtolower ($nom));

if ($erreurs == 0){

//mail de contact
$subject='SAE202 : demande de '.$prenom.' '.$nom;
$headers['From']=$email;
$headers['Reply-to']=$email;
$headers['X-Mailer']='PHP/'.phpversion();
$headers['MIME-Version'] = '1.0';
$headers['content-type'] = 'text/html; charset=utf-8';

$email_dest="mmi22e12@mmi-troyes.fr";

if (mail($email_dest,$subject,$message,$headers)) {
	$erreurs=0;
	} else {
	$erreurs++;
}

//mail de confirmation
$to=$email;
$subject='SAE202 : demande de '.$prenom.' '.$nom;
$message ="Bonjour $prenom $nom,\n\n j'ai bien pris en compte votre demande. Je reviens vers vous dans les plus bref délais.";
$headers['From']='mmi22e12@mmi-troyes.fr';
$headers['Reply-to']='no-reply@mmi-troyes.fr';
$headers['X-Mailer']='PHP/'.phpversion();

if (mail($to,$subject,$message,$headers)) {
	$erreurs=0;
	} else {
	$erreurs++;
	}

	$affichage_retour=$demande;
    
  	if ($erreurs != 0) {
    $affichage_retour='Echec de l\'envoi du message';
    }
}

$_SESSION['information']=$affichage_retour;
  header('location: Contact.php');

?>
