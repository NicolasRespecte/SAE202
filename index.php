<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php' ?>

<div class="Accueil">
    <div class="Atexte">
        <h1>Ride & Co</h1>
        <h2>Des voyages partagés, des liens créés !</h2>
        <p>Ride&Co n'est pas seulement une application de covoiturage ordinaire, mais elle est exclusivement réservée aux étudiants et aux professeurs de la filière MMI. Pourquoi cibler spécifiquement cette filière ? Tout simplement pour favoriser la création de liens entre les étudiants de différents niveaux et assurer la sécurité de tous.</p>
        <div>
            <a href="formConnexion.php"><input id="env" type="submit" value="Connexion"></a>
            <a href="formInscription.php"><input id="env" type="submit" value="Inscription"></a>
        </div>
    </div>
    <div class="Aforme">

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
                    <input type="number" name="personne" step="1" min="1" max="3" placeholder="Passagers" required="" />
                <span class="ligne"></span>
            </div>
        </div>

<p class="ins">Vous n'avez pas encore de compte? <a href="formInscription.php">Inscrivez vous !</a></p>
<input id="env" type="submit" value="Chercher">
</form>
    </div>
</div>

<?php require 'fin.php' ?>