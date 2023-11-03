<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

        <a href="accueil.php" class="logo">
            <img src="images/logo.png" alt="abiroptic" class="img-logo" >
        </a>


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
        <div id="menu-btn" class="fas fa-bars"></div>
       
        <a href="panier.php" class="fas fa-shopping-cart"> <?php echo calculerTotalProduitsDansPanier(); ?></a>
    </div>

    

</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>Conditions Générales de Vente </h1>
    <p> <a href="accueil.php">accueil</a> >> Conditions Générales de Vente (CGV)  </p>
</section>


<section style="font-size: 15px;">
<h2>CGV - Abir Optic</h2>
<br>
<p>Bienvenue sur le site web d'Abir Optic. Nous vous invitons à lire attentivement les présentes Conditions Générales de Vente avant de passer une commande sur notre site. En effectuant un achat chez Abir Optic, vous acceptez automatiquement ces CGV.</p> 
<br>
<h4>Informations de Contact</h4>
<p>Adresse : Bd Mohamed V N 75  Zegangane, Ville Nador, Maroc<br>
Téléphone : +212 536 351 121<br>
Email : Contact.Abiroptic@gmail.com
</p>
<br>
<h4>Commandes et Produits</h4>
<p>En passant une commande sur notre site, vous déclarez avoir lu, compris et accepté les CGV.<br>
Toutes les commandes sont soumises à disponibilité.<br>
Nous nous réservons le droit de refuser une commande sans fournir de justification.</p>
<br>
<h4>Prix</h4>
<p>Les prix des produits sont indiqués en dirhams marocains (MAD) et incluent la TVA applicable.<br>
Les frais de livraison, le cas échéant, sont précisés lors de la commande.</p>
<br>
<h4>livraison</h4>
<p>Les délais de livraison sont estimatifs et peuvent varier en fonction de la disponibilité des produits et de la destination.<br>
Abir Optic n'est pas responsable des retards de livraison causés par des circonstances indépendantes de notre volonté.</p>
<br>
<h4>Méthodes de Paiement</h4>
<h5>Paiement en Espèces à la Livraison (Cash on Delivery - COD)
Méthode de Paiement</h5>
<p>Pour les clients qui choisissent le paiement en espèces à la livraison (COD), le montant total de la commande doit être réglé en espèces au moment de la réception des produits.
Exactitude du Montant</p>
<p>Les clients doivent s'assurer d'avoir le montant exact en espèces pour régler leur commande, car nos livreurs ne peuvent pas fournir de monnaie.
</p>
<br>
<h4>Confirmation de la Commande</h4>
<p>La commande ne sera confirmée qu'après vérification de la disponibilité des produits et confirmation par notre équipe.
Annulation de la Commande COD
</p>
<br>
<h4>Communication</h4>
<p>En passant une commande, vous consentez à recevoir des communications de notre part, y compris des informations sur votre commande et des offres promotionnelles.
</p>
<br>
<h4>Modification des CGV</h4>
<p>Abir Optic se réserve le droit de modifier les présentes Conditions Générales de Vente à tout moment. Les modifications seront effectives dès leur publication sur notre site web.</p>
<br>
<h4>Contact</h4>
<p>Pour toute question concernant nos CGV ou nos produits, veuillez nous contacter à l'adresse email Contact.Abiroptic@gmail.com ou par téléphone au +212 536 351 121.</p>
<br>
<p>Nous vous remercions de votre confiance en Abir Optic.</p>

    
</section>












<!-- footer section starts  -->

<section class="footer">

    <div class="credit">
        <div>
            <p>&copy; 2023 Abir optic - Tout droit réservés</p>
            <a href="mentions-legales.php">Mentions légales</a><br />
            <a href="cgv.php">Conditions Générales de Vente (CGV) </a><br />
        </div>

        <h4>Suivez-nous</h4>
        <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <img src="images/facebook.png" alt="facebook" height="30px" width="30px"></a>

        <a href="https://www.instagram.com/abiroptic/"> <img src="images/instagram.png" alt="instagram" height="30px" width="30px"></a>

    </div>
</section>

<!-- footer section ends -->

</body>
</html>