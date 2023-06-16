<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>    
<body class="ParPar">
    <?php
		$mabd = connexionBD();
		$req = "SELECT * FROM  Parking ";
?>

<main>
<h1>Gestion des Parkings</h1>
<p>Ajouter un parking ici</p>
<form action="Parkings_new_valide.php" method="POST" enctype="multipart/form-data">

    <div class="champ">
        <label for="nom">Nom du Parking</label>
            <input type="text" name="nom" placeholder="Nom du Parking" required="" />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="emplacement">Emplacement du Parking</label>
            <input type="text" name="emplacement" placeholder="Emplacement du Parking" required="" /><br />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="iframe">Iframe</label>
            <input type="text" name="iframe" placeholder="Iframe" required="" /><br />
        <span class="ligne"></span>
    </div>

    <p class="ins">Vous avez envie voir ce que ca donne ? <a href="../Parkings.php">Allez voir !</a></p>

    <input id="env" type="submit" name="ajouter">
    
</form> 

</main>
<?php require '../fin.php' ;?>