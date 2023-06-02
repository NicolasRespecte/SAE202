<header>
    <nav>
        <ul>
            <li><a href="index.php"><img src="https://img2.freepng.fr/20180714/hxu/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f52aa71.9002514115315676633386.jpg" alt=""></a></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Parkings.php">Parkings</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><?php
            if (!empty($_SESSION['prenom_client'])){
                echo 'Bonjour, <a href="profil.php">'.$_SESSION['prenom_client'].'</a>';
                echo '<a class="deco" href="deconnexion.php">Deconnexion</a>';
            } else { 
                echo '<a href="connexion.php">Connexion</a>/<a href="inscription.php">Inscription</a>';
            }
        ?>  </li>   
        </ul>
     </nav>
</header>