<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>
<?php
    include('php-help/session.php');
    include('php-help/navbar.php');    
?>

<header class="header">

        <a href="accueil.php" class="logo">
            <img src="images/logo.png" alt="abiroptic" class="img-logo" >
        </a>


    <nav class="navbar">
        <ul>
            <li><a href="accueil.php">accueil</a></li>
            <li><a href="produits.php">produits</a></li>
            <li><a href="qui-sommes-nous.php">Qui sommes-nous</a></li>
               
            <li><a href="contact.php">contact</a></li>
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
        <div id="search-btn" class="fas fa-search"></div>
        <a href="panier.php" class="fas fa-shopping-cart"> <?php echo calculerTotalProduitsDansPanier(); ?></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>Compte</h1>
    <p> <a href="accueil.php">accueil</a> >> s'inscrire </p>
</section>

<!-- header section -->

<!-- header section -->

<!-- register form section starts -->

<section class="register-form">

    <form action="">
        <h3>S'inscrire maintenant</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" name="" placeholder="votre Nom Complet " id="" required>
        </div>
        <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" name="" placeholder="votre e-mail" id="" required>
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="" placeholder="Entrez votre mot de passe " id="" required>
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="" placeholder="confirmez votre mot de passe " id="" required>
        </div>
        <input type="submit" value="Inscription" class="btn">
        <a href="login.php" class="btn">Vous avez déjà un compte</a>
    </form>

</section>

<?php include('php-composants/footer.php'); ?>

</body>
</html>