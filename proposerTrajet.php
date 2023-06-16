<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>
<br>
<br>
<?php
$mabd=connexionBD();
$req = "SELECT * FROM Usagers WHERE id_usager LIKE '%" . $_SESSION['id_usager'] . "%'";
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC); 
?>
<main>
<p>Proposer un trajet ici</p>
<form action="validproposertrajet.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idusager" value="<?php echo $ligne['id_usager'] ?>" >
<div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Point de départ</label>
                    <input type="text" name="pdepart" placeholder="Point de départ" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Point d'arrivée</label>
                    <input type="text" name="parrivee" placeholder="Point de arrivée" required="" />
                <span class="ligne"></span>
            </div>

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
                <label for="depart">Heure de départ</label>
                    <input type="text" name="hdepart" placeholder="Heure de départ" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Heure d'arrivée</label>
                    <input type="text" name="harrivee" placeholder="Heure d'arrivée" required="" />
                <span class="ligne"></span>
            </div>
        <div class="Champsaccuiel">
            <div class="champ">
                <label for="personne">Passagers</label>
                    <input type="number" name="personne" step="1" min="1" max="4" placeholder="Passagers" required="" />
                <span class="ligne"></span>
            </div>
        </div>
        <p class="ins">Merci, vous contribuez au bien vivre des étudient de MMI !</p>
        </div>
        </div>
        </div>
        </div>
        <input id="env" type="submit" value="Ajouter">
</form>
</main>
   <?php
		$mabd = connexionBD();
		$req = "SELECT * FROM  Trajet ";
?>
</body>
</html>