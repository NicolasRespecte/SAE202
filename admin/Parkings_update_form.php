<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<body class="ParPar">
<?php
$num = $_GET['num'];
$mabd = connexionBD();
$req = 'SELECT * FROM Parking WHERE id_parking ='.$num;
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>




<main>
<h1>Gestion des Parkings</h1>
<p>Modifier un parking ici</p>
<form action="Parkings_update_valide.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="idparking" value="<?php echo $ligne['id_parking'] ?>" >

    <div class="champ">
        <label for="nom">Nom du Parking</label>
            <input type="text" name="nom" value="<?php echo $ligne['nom_parking'] ?>" required="" />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="emplacement">Emplacement du Parking</label>
            <input type="text" name="emplacement" value="<?php echo $ligne['emplacement_parking'] ?>" required="" /><br />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="iframe">Iframe</label>
            <input type="text" name="iframe" value="<?php echo $ligne['iframe_parking'] ?>" required="" /><br />
        <span class="ligne"></span>
    </div>

    <p class="ins">Vous avez envie voir ce que ca donne ? <a href="../Parkings.php">Allez voir !</a></p>

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
<?php require '../fin.php' ;?>