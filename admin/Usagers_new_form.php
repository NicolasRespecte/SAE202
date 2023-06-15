<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>
<main>
<h1>Gestion des Usagers</h1>
<p>Ajouter un usager ici</p>

<form action="Usagers_new_valide.php" method="post" enctype="multipart/form-data">

        <div class="troischamp">

            <div class="champgauche">
                <div class="champ2">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" placeholder="Nom" required="" />
                </div>
                <div class="champ2">
                    <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" placeholder="Prenom" required="" />
                </div>
            </div>

            <div class="champdroite">
                <label for="photo">Photo de profil</label>
                <input type="file" name="photo" id="photoInput" required /><br />
                <img id="photoPreview" class="photo-preview" src="#" alt="Aperçu de la photo" />
            </div>



        </div>
        <div class="troischamp" style="height: 260px;">

            <div class="champgauche">
                <div class="champ2">
                    <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" required="" />
                </div>
                <div class="champ2">
                    <label for="password">Mot de passe</label>
                        <input type="password" name="mdp" placeholder="Mot de passe" required="" />
                </div>
                <div class="champ2">
                    <label for="num">Téléphone</label>
                        <input type="text" name="num" placeholder="Téléphone" required/>
                </div>
            </div>

            <div class="champdroite">
                
            </div>
        </div>

         <div class="champ">
            <label for="statut">Statut</label>
            <select name="statut"><option>Etudiant</option><option>Professeur</option></select>
            <span class="ligne"></span>
        </div>

        <div class="champ">
            <label for="model">Voiture</label>
                <input type="text" name="model" placeholder="Voiture"/>
            <span class="ligne"></span>
        </div>

        <input id="env" type="submit" value="Ajouter"> 

    </form> 
    
    <?php
		$mabd = connexionBD();
		$req = "SELECT * FROM  Usagers ";
?>

</main>
<?php require '../fin.php' ;?>