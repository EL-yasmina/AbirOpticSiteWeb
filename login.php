<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="accueil.php" class="logo"> Abir Optic </a>

    <nav class="navbar">
        <ul>
            <li><a href="accueil.php">accueil</a></li>
            <li><a href="products.php">produits</a></li>
            <li><a href="qui-sommes-nous.php">Qui sommes-nous</a></li>
                
            <li><a href="contact.php">contact</a></li>
            <li>
                    <a href="#" id="user-menu">
                        <?php
                        // Démarrer la session (si elle n'est pas déjà démarrée)
                        session_start();

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
                            echo '<li><a href="register.php">s\'inscrire</a></li>';
                        }
                        else {
                            echo '<li><a href="fonctions-php/deconnexion.php">se deconnecter</a></li>';
                        }
                        ?>
                    </ul>
                </li>
        </ul>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>

    
</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>compte</h1>
    <p> <a href="accueil.php">accueil</a> >> se connecter </p>
</section>

<!-- header section -->

<!-- login form section starts -->

<section class="login-form">

    <form action="fonctions-php/connexion.php" method="post">
        <h3>Connexion</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="email" name="email" placeholder="votre e-mail" id="" required>
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="password" placeholder="votre mot de passe" id="" required>
        </div>
        <input type="submit" value="me connecter" class="btn">
        <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">Se souvenir de moi</label>
            <a href="#">Mot de passe oublié ?</a>
        </div>
        <a href="register.php" class="btn">Créer un compte</a>
    </form>

</section>

<!-- login form section ends -->











<!-- footer section starts  -->

<section class="footer">

    <div class="credit">
        <div>
            <p>&copy; 2023 Abir optic - Tout droit réservés</p>
            <a href="mentions-legales.php">Mentions légales</a><br />
            <a href="cgv.php">Politique de confidentialité</a><br />
        </div>

        <h3>Suivez-nous</h3>
        <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook </a>

        <a href="https://www.instagram.com/abiroptic/"> <i class="fab fa-instagram"></i> instagram </a>

    </div>
</section>

<!-- footer section ends -->

</body>
</html>