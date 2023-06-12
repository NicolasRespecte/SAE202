<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<main>
<h1>Modifier votre profil</h1>

<?php
$mabd = connexionBD();
$req = "SELECT * FROM Usagers WHERE id_usager LIKE '%" . $_SESSION['id_usager'] . "%'";
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>

<form action="user/validmodif.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $ligne['id_usager'] ?>" >
Nom:<input type="text" name="nom" value="<?php echo $ligne['nom_usager'] ?>" ><br>
Prénom:<input type="text" name="prenom" value="<?php echo $ligne['prenom_usager'] ?>"><br>
Email:<input type="email" name="email" value="<?php echo $ligne['email_usager'] ?>"><br>
Téléphone:<input type="text" name="num" value="<?php echo $ligne['telephone_usager'] ?>"><br>
Modèle Véhicule:<input type="text" name="model" value="<?php echo $ligne['modele_vehicule'] ?>"><br>
<!-- Photo : <input type="file" name="photo"/><br /> -->
    <input id="env" type="submit" value="Envoyer"> 
</form> 
<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
</main>
<?php require 'fin.php' ?>