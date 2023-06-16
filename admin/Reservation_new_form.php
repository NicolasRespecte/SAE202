<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>    
    <?php
		$mabd = connexionBD();
		$req = "SELECT * FROM  Reservation ";
?>
<body class="TraBg">
<main>
<h1>Gestion des Réservations</h1>
<p>Ajouter une réservation ici</p>
<form action="Reservation_new_valide.php" method="POST" enctype="multipart/form-data">

    <div class="champ">
        <label for="nom">N° de la réservation</label>
            <input type="text" name="idr" placeholder="N° de la réservation" required="" />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="emplacement">N° de l'usager</label>
            <input type="text" name="idu" placeholder="N° de l'usager" required="" /><br />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="iframe">N° du trajet</label>
            <input type="text" name="idt" placeholder="N° du trajet" required="" /><br />
        <span class="ligne"></span>
    </div>

    <p class="ins">Merci, vous contribuez au bien vivre des étudient de MMI !</p>

    <input id="env" type="submit" name="ajouter">
    
</form> 

</main>
<?php require '../fin.php' ;?>