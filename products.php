<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produits</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>

<body>
<?php
    include('fonctions-php/session.php');
    include('fonctions-php/ajouter-panier.php');
    include('fonctions-php/navbar.php');
?>
    <header class="header">

        <a href="accueil.php" class="logo">
            <img src="images/logo.png" alt="abiroptic" class="img-logo" >
        </a>


        <nav class="navbar">
            <ul>
                <li><a href="accueil.php">accueil</a></li>
                <li><a href="products.php" class="selected-menu">Produits</a></li>
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
                            echo '<li><a href="fonctions-php/deconnexion.php">se deconnecter</a></li>';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <a href="panier.php" class="fas fa-shopping-cart"> <?php echo calculerTotalProduitsDansPanier(); ?></a>
        </div>



    </header>

    <section class="heading">
        <h1>Nos produits</h1>
        <p> <a href="accueil.php">accueil</a> >> produits </p>
    </section>

    <section class="products">
        <div class="box-container">
            <?php include('fonctions-php/list-produits.php');?>
        </div>

    </section>

    <!-- prodcuts section ends -->












    <!-- footer section starts  -->

    <section class="footer">

        <div class="credit">
            <div>
                <p>&copy; 2023 Abir optic - Tout droit réservés</p>
                <a href="mentions-legales.php">Mentions légales</a><br />
                <a href="cgv.php">Conditions Générales de Vente (CGV) </a><br />
            </div>

            <h4>Suivez-nous</h4>
            <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <img src="images/facebook.png" alt="facebook" height="30px" width="30px">
            </a>

            <a href="https://www.instagram.com/abiroptic/"><img src="images/instagram.png" alt="instagram" height="30px" width="30px"></a>

        </div>
    </section>
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script type="text/javascript">
    window.onload = function() {
        Calendly.initBadgeWidget({
            url: 'https://calendly.com/yasminataif99/30min',
            text: 'Prendre un rendez-vous avec nous',
            color: '#0069ff',
            textColor: '#ffffff',
            branding: false
        });
    }
    </script>

    <!-- footer section ends -->

</body>

</html>