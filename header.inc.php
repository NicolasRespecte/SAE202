<header>
    <nav>
        <ul>
            <li>
                <a href="index.php">
                    <img src="assets/imgs/logo.png" alt="">
                </a>
            </li>
            <li>
                <div class="navmain">
                    <a href="index.php">Accueil</a>
                    <a href="Parkings.php">Parkings</a>
                    <a href="Contact.php">Recherchez un Trajet</a>
                    <a href="Contact.php">Contact</a>
                </div>
            <li><?php
 
 if (isset($_SESSION['prenom_usager'])){
 echo 'Bienvenue '.$_SESSION['prenom_usager'].' / ';
 echo '<a href="deconnexion.php">Déconnexion</a>';
 } else {
     echo '<a href="formConnexion.php">Connexion</a> / ';
     echo '<a href="formInscription.php">Inscription</a>';
 } 

?></li> 
        </ul>
    </nav>
</header>