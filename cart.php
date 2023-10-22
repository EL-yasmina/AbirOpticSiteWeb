<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>

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
    include('fonctions-php/navbar.php');
    
?>

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
       
        <a href="cart.php" class="fas fa-shopping-cart"> <?php echo calculerTotalProduitsDansPanier(); ?></a>
    </div>

    

</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>Panier d'achat</h1>
    <p> <a href="accueil.php">accueil</a> >> panier </p>
</section>

<!-- header section -->

<!-- cart section starts  -->

<section class="shopping-cart">

    <h1 class="title"> vos produits </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>premium glasses</h3>
                <form action="">
                    <span>quantity :</span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price"> $20.00 <span>$25.00</span> </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>premium glasses</h3>
                <form action="">
                    <span>quantity :</span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price"> $20.00 <span>$25.00</span> </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>premium glasses</h3>
                <form action="">
                    <span>quantity :</span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price"> $20.00 <span>$25.00</span> </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>premium glasses</h3>
                <form action="">
                    <span>quantity :</span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price"> $20.00 <span>$25.00</span> </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/cart-item-5.png" alt="">
            <div class="content">
                <h3>premium glasses</h3>
                <form action="">
                    <span>quantity :</span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price"> $20.00 <span>$25.00</span> </div>
            </div>
        </div>

    </div>

    <h1 class="title">Panier de commande</h1>

    <div class="cart-total">
        <h3>subtotal : <span>$100.00</span></h3>
        <h3>total : <span>$100.00</span></h3>
        <a href="#" class="btn">passer au paiement</a>
    </div>

</section>

<!-- cart section end -->











<!-- footer section starts  -->

<section class="footer">

    <div class="credit">
        <div>
            <p>&copy; 2023 Abir optic - Tout droit réservés</p>
            <a href="mentions-legales.php">Mentions légales</a><br />
            <a href="cgv.php">Conditions Générales de Vente (CGV) </a><br />
        </div>

        <h3>Suivez-nous</h3>
        <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook </a>

        <a href="https://www.instagram.com/abiroptic/"> <i class="fab fa-instagram"></i> instagram </a>

    </div>
</section>
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script
    type="text/javascript">window.onload = function () { Calendly.initBadgeWidget({ url: 'https://calendly.com/yasminataif99/30min', text: 'Prendre un rendez-vous avec nous', color: '#0069ff', textColor: '#ffffff', branding: false }); }</script>

<!-- footer section ends -->

</body>
</html>