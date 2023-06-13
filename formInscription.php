<?php require 'debut.php'; require_once 'lib.inc.php';?>
<?php require 'header.inc.php'; ?>
<main>
<h1>Inscription</h1>

<form action="user/validFormInscription.php" method="post" enctype="multipart/form-data">

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

        <input id="env" type="submit" value="S'inscrire"> 

    </form> 
</main>
<script>
    // Sélectionnez l'élément input file et l'élément img de l'aperçu
    const photoInput = document.getElementById('photoInput');
    const photoPreview = document.getElementById('photoPreview');

    // Ajoutez un écouteur d'événement "change" à l'élément input file
    photoInput.addEventListener('change', function() {
        // Vérifiez si des fichiers ont été sélectionnés
        if (photoInput.files && photoInput.files[0]) {
            // Créez un objet FileReader
            const reader = new FileReader();

            // Définissez une fonction de rappel lorsque la lecture du fichier est terminée
            reader.onload = function(e) {
                // Mettez à jour l'attribut src de l'élément img avec les données de l'image sélectionnée
                photoPreview.setAttribute('src', e.target.result);
            }

            // Lisez le contenu du fichier en tant que données URL
            reader.readAsDataURL(photoInput.files[0]);
        }
    });
</script>

<?php require 'fin.php'; ?>