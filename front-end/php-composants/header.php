<?php
    include('php-help/navbar.php');  
?>

<header class="header">

    <a href="accueil.php" class="logo">
        <img src="images/logo.png" alt="abiroptic" class="img-logo" >
    </a>

    <nav class="navbar">
        <ul>
            <li><a id="accueil" href="accueil.php">accueil</a></li>
            <li><a id="produits" href="produits.php">produits</a></li>
            <li><a id="qui-sommes-nous" href="qui-sommes-nous.php">Qui sommes-nous</a></li>
            <li><a id="contact" href="contact.php">contact</a></li>
            <li>
                <a href="#" id="user-menu">
                    <?php
                    // Vérifier si l'utilisateur est authentifié
                    if (isset($_SESSION['nom'])) {
                        // L'utilisateur est connecté, afficher son nom
                        echo $_SESSION['nom'];
                    } else {
                        // L'utilisateur n'est pas connecté, afficher "Compte +"
                        echo 'Compte +';
                    }
                    ?>
                </a>
                <ul>
                    <?php
                    // Afficher les liens de connexion et d'inscription si l'utilisateur n'est pas connecté
                    if (!isset($_SESSION['nom'])) {
                        echo '<li><a href="login.php">se connecter</a></li>';
                        echo '<li><a href="inscription.php">s\'inscrire</a></li>';
                    }
                    else {
                        echo '<li><a href="php-help/deconnexion.php">se deconnecter</a></li>';
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>        
        <a href="panier.php" class="fas fa-shopping-cart"> <?php echo calculerTotalProduitsDansPanier(); ?></a>
    </div>

</header>
