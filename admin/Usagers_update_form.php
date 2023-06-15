<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<h1>Gestion des Usagers</h1>
<h2>Modification de l'usager</h2>
<hr>

<?php
$num = $_GET['num'];
$mabd = connexionBD();
$req = 'SELECT * FROM Usagers WHERE id_usager ='.$num;
$resultat = $mabd->query($req);
$ligne = $resultat->fetch(PDO::FETCH_ASSOC);  // dans $album on a les infos de l'album dont l'id est $num


?>

<form action="Usagers_new_valide.php" method="post" enctype="multipart/form-data">

        <div class="troischamp">

            <div class="champgauche">
                <div class="champ2">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" value="<?php echo $ligne['nom_usager'] ?>" required="" />
                </div>
                <div class="champ2">
                    <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" value="<?php echo $ligne['prenom_usager'] ?>" required="" />
                </div>
            </div>

            <div class="champdroite">
                <label for="photo">Photo de profil</label>
                <input type="file" name="photo" id="photoInput" required /><br />
                <img id="photoPreview" class="photo-preview" src="../assets/imgs/Upload/<?php echo $ligne['photo_usager'] ?>" alt="Aperçu de la photo" />
            </div>



        </div>
        <div class="troischamp" style="height: 260px;">

            <div class="champgauche">
                <div class="champ2">
                    <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $ligne['email_usager'] ?>" required="" />
                </div>
                <div class="champ2">
                    <label for="password">Mot de passe</label>
                        <input type="password" name="mdp" value="<?php echo $ligne['mdp_usager'] ?>" required="" />
                </div>
                <div class="champ2">
                    <label for="num">Téléphone</label>
                        <input type="text" name="num" value="<?php echo $ligne['telephone_usager'] ?>" required/>
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
                <input type="text" name="model" value="<?php echo $ligne['modele_vehicule'] ?>"/>
            <span class="ligne"></span>
        </div>

        <input id="env" type="submit" value="Ajouter"> 

    </form> 
<?php
if (!empty($_SESSION['erreur'])) {
    echo $_SESSION['erreur'];
    unset ($_SESSION['erreur']);
    }
    //var_dump($_SESSION);
?>
</tbody>
</table>
</body>
</html>