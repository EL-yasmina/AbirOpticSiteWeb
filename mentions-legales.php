<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mentions légales</title>

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
    <h1>Mentions légales</h1>
    <p> <a href="accueil.php">accueil</a> >> Mentions légales </p>
</section>


<section style="font-size: 15px;">
    <h3>Editeur</h3>
    <p >L'éditeur de ce site est <span style="font-size: large;"> ABIR OPTIC </span>, est une société dont l'activité est la vente en détail de produits d'optique-lunetier (opticien),<br> immatruculée au Registre du commerce sous le numéro 77424.<br>Identifiant commun de l'entreprise(numéro siret): 002130713000091  </p>
    <p>Adresse: HAY JADID RUE MOHAMED V N 75 ZEGHANGHANE (M)</p>
    <p>Tél: +212 536351121 </p>
    <p>Email: contact.abiroptic@gmail.com</p>
    <br>
    <h3>Hébergement</h3>
    <p>Lorem ipsum dolor </p>
    <p>Lorem ipsum dolor </p>
    <p>Lorem ipsum dolor</p> 
    <br>
    <h3>Confidentialité et Données Personnelles</h3>
    <p>Abir Optic attache une grande importance à la protection de vos données personnelles. Nous nous engageons à respecter les lois applicables en matière de protection des données et à assurer la confidentialité et la sécurité de vos informations personnelles.</p>
    <h4>Collecte des Données</h4>
    <p>Lorsque vous utilisez notre site web ou que vous effectuez un achat, nous pouvons collecter des informations personnelles telles que votre nom, adresse, numéro de téléphone et adresse e-mail. Ces informations sont collectées dans le but de traiter vos commandes et de vous fournir un service client de qualité.</p>
    <h4>Utilisation des Données</h4>
    <p>Les données personnelles que vous nous fournissez peuvent être utilisées pour les finalités suivantes :
     <ul>
        <li>Traitement des commandes et livraison des produits.</li>
        <li>Communication avec vous concernant votre commande.</li>
        <li>Réponse à vos questions et demandes.</li>
        <li>Amélioration de notre site web et de nos services.</li>
     </ul>
    </p>
    
    <h4>Partage des Données</h4>
    <p>Nous ne vendons ni ne louons vos données personnelles à des tiers. Cependant, dans le cadre de l'exécution de nos services, nous pouvons partager vos informations avec des prestataires de services tiers tels que des transporteurs pour la livraison de vos commandes.</p>
    <h4>Vos droits</h4>
    <p>Vous avez le droit d'accéder, de corriger ou de supprimer vos données personnelles. Pour exercer ces droits ou pour toute question concernant la protection des données, veuillez nous contacter à Contact.Abiroptic@gmail.com.</p>

    
</section>












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

<!-- footer section ends -->

</body>
</html>