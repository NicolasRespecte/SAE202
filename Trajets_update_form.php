<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>
<br>
<main>
<h2>Modification de votre trajet</h2>
<?php
$num = $_GET['num'];
$mabd = connexionBD();
$req = 'SELECT * FROM Trajet WHERE id_trajet ='.$num;
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>

<form action="Trajets_update_valide.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="idtrajet" value="<?php echo $ligne['id_trajet'] ?>" >
<div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Point de départ</label>
                    <input type="text" name="pdepart" value="<?php echo $ligne['point_depart'] ?>" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Point d'arrivée</label>
                    <input type="text" name="parrivee" value="<?php echo $ligne['point_arrivee'] ?>" required="" />
                <span class="ligne"></span>
            </div>

<div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Ville de départ</label>
                    <input type="text" name="depart" value="<?php echo $ligne['ville_depart'] ?>" required="" />
                <span class="ligne"></span>
            </div>

            <div class="champ">
                <label for="arrive">Ville d'arrivée</label>
                    <input type="text" name="arrive" value="<?php echo $ligne['ville_arrivee'] ?>" required="" />
                <span class="ligne"></span>
            </div>
        </div>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="datedepart">Date de départ</label>
                    <input type="date" name="datedepart" value="<?php echo $ligne['date_depart'] ?>" required="" />
                <span class="ligne"></span>
            </div>
        </div>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Heure de départ</label>
                    <input type="text" name="hdepart" value="<?php echo $ligne['heure_depart'] ?>" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Heure d'arrivée</label>
                    <input type="text" name="harrivee" value="<?php echo $ligne['heure_arrivee'] ?>" required="" />
                <span class="ligne"></span>
            </div>
        <div class="Champsaccuiel">
            <div class="champ">
                <label for="personne">Passagers</label>
                    <input type="number" name="personne" step="1" min="1" max="4" value="<?php echo $ligne['places_dispo'] ?>" required="" />
                <span class="ligne"></span>
            </div>
        </div>
        <input id="env" type="submit" value="Modifier">
</form>
</main>
<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
</body>
</html>