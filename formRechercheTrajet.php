<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>
<body class="TraBg">
<main>
<div class="container">
<form action="resultatRechercheTrajet.php" method="post" enctype="multipart/form-data">

    <h2>Trouver un trajet</h2>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Ville de départ</label>
                    <input type="text" name="depart" placeholder="Ville de départ" required="" />
                <span class="ligne"></span>
            </div>

            <div class="champ">
                <label for="arrive">Ville d'arrivée</label>
                    <input type="text" name="arrive" placeholder="Ville d'arrivée" required="" />
                <span class="ligne"></span>
            </div>
        </div>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="datedepart">Date de départ</label>
                    <input type="date" name="datedepart" placeholder="Date de départ" required="" />
                <span class="ligne"></span>
            </div>
        </div>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="personne">Passagers</label>
                    <input type="number" name="personne" step="1" min="1" max="4" placeholder="Passagers" required="" />
                <span class="ligne"></span>
            </div>
        </div>

<p class="ins">Vous n'avez pas encore de compte? <a href="formInscription.php">Inscrivez vous !</a></p>
<input id="env" type="submit" value="Chercher">
</form>
</div>
</main>
<?php require 'fin.php' ;?>