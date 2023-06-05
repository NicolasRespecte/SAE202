<header>
    <nav>
        <ul>
            <li><a href="index.php"><img src="https://img2.freepng.fr/20180714/hxu/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f52aa71.9002514115315676633386.jpg" alt=""></a></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Parkings.php">Parkings</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li>
               </li> 
            </ul>
                </nav>
                <?php
 
                    if (isset($_SESSION['prenom_usager'])){
                    echo 'Bienvenue '.$_SESSION['prenom_usager'].' / ';
                    echo '<a href="deconnexion.php">Déconnexion</a>';
                    } else {
                        echo '<a href="formConnexion.php">Connexion</a> / ';
                        echo '<a href="formInscription.php">Inscription</a>';
                    } 
        
     ?>
</header>