<link rel="stylesheet" href="../assets/css/styles.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <nav class="top-nav">
      <div class="logos">
        <a href="../index.php"><img class="logo" src="../assets/imgs/logosolo.svg" alt=""></a>
        <a href="../index.php"><img class="titrelogo" src="../assets/imgs/textelogo.png" alt="" ></a>
      </div>

    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <li><a href="../index.php">Accueil</a></li>
      <li><a href="../Parkings.php">Parkings</a></li>
      <li><a href="../formRechercheTrajet.php">Trajet</a></li>
      <li><a href="../Contact.php">Contact</a></li>
    </ul>
    <div class="conection">
      <?php

        if (isset($_SESSION['prenom_usager'])){
          echo '<div class="co">
          <p>
            <img class="profil" src="../assets/imgs/Upload/'. $_SESSION['photo_usager'].'" alt="Photo de profil">
            ' . $_SESSION['prenom_usager'] . '
          </p>
          <div class="deroule">
            <a href="../profil.php">Profil</a>
            <a href="../deconnexion.php">Déconnexion</a>
            <a href="mestrajet">Mes trajets</a>
          </div>
        </div>';
              
        } else {
            echo '<div class="pasco"><a href="formConnexion.php">Connexion</a></div>';
        } 
        
      ?>
    </div>
</nav>
<div class="espace">
</div>
<!-- Y6UYJ? -->
 
 