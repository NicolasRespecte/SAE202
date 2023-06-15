<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<?php
$num = $_GET['num'];
$mabd = connexionBD();
$req = 'SELECT * FROM Reservation WHERE id_reservation ='.$num;
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);
?>
<main>
<h1>Gestion des Réservations</h1>
<p>Modifier la réservation ici</p>
<form action="Reservation_update_valide.php" method="post" enctype="multipart/form-data">
    <div class="champ">
        <label for="nom">N° de la réservation</label>
            <input type="text" name="idr" value="<?php echo $ligne['id_reservation'] ?>" required="" />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="emplacement">N° de l'usager</label>
            <input type="text" name="idu" value="<?php echo $ligne['id_usager'] ?>" required="" /><br />
        <span class="ligne"></span>
    </div>

    <div class="champ">
        <label for="iframe">N° du Trajet</label>
            <input type="text" name="idt" value="<?php echo $ligne['id_trajet'] ?>" required="" /><br />
        <span class="ligne"></span>
    </div>

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