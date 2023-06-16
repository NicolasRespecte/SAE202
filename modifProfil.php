<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>

<main>
<h1>Modifier votre profil</h1>

<?php
$mabd = connexionBD();
$req = "SELECT * FROM Usagers WHERE id_usager LIKE '%" . $_SESSION['id_usager'] . "%'";
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>
</form> 

<main>
            <h1>Profil</h1>
            
            <form action="user/validmodif.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $ligne['id_usager'] ?>" >
                    <div class="troischamp">
            
                        <div class="champgauche">
                            <div class="champ2">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" value="<?php echo $ligne['nom_usager'] ?>" >
                            </div>
                            <div class="champ2">
                                <label for="prenom">Prenom</label>
                                <input type="text" name="prenom" value="<?php echo $ligne['prenom_usager'] ?>">
                            </div>
                        </div>
            
                        <div class="champdroite">
                            <label for="photo">Photo de profil</label>
                            <img class="photo-preview" src="assets/imgs/Upload/<?php echo $ligne['photo_usager']; ?>" width="150px">
                        </div>

            
            
            
                    </div>
                    <div class="troischamp" style="height: 260px;">
            
                        <div class="champgauche">
                            <div class="champ2">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo $ligne['email_usager'] ?>">
                            </div>
                            <div class="champ2">
                                <label for="password">Mot de passe</label>
                                **********
                            </div>
                            <div class="champ2">
                                <label for="num">Téléphone</label>
                                <input type="text" name="num" value="<?php echo $ligne['telephone_usager'] ?>">
                            </div>
                        </div>
            
                        <div class="champdroite">
                            
                        </div>
                    </div>
            
                     <div class="champ">
                        <label for="statut">Statut</label>
                        <select value="<?php echo $ligne['statut'] ?>" name="statut"><option>Etudiant</option><option>Professeur</option></select>
                        <span class="ligne"></span>
                    </div>
            
                    <div class="champ">
                        <label for="model">Voiture</label>
                        <input type="text" name="model" value="<?php echo $ligne['modele_vehicule'] ?>">
                        <span class="ligne"></span>
                    </div>
            
                    <input id="env" type="submit" value="Valider"> 
                    </form> 
            </main>


<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
</main>
<?php require 'fin.php'; ?>