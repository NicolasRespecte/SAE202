<link rel="stylesheet" href="assets/css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <nav class="top-nav">
    <div class="logo">
      <a href="index.php"><img src="assets/imgs/logo.png" alt=""></a>
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
  </label>
    <ul class="menu">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="Parkings.php">Parkings</a></li>
      <li><a href="user/formRechercheTrajet.php">Trajet</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
    <div class="co">
    <?php
 
 if (isset($_SESSION['prenom_usager'])){
 echo 'Bienvenue <a href="profil.php">'.$_SESSION['prenom_usager'].'</a> / ';
 echo '<a href="deconnexion.php">Déconnexion</a>';
 } else {
     echo '<a href="formConnexion.php">Connexion</a> / ';
     echo '<a href="formInscription.php">Inscription</a>';
 } 

?>
    </div>
</nav>
 