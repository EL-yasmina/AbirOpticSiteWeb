<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    
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
                <li><a href="accueil.php" class="selected-menu">accueil</a></li>
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

    <!-- home section starts      -->

    <section class="accueil">

        <div class="slide active" style="background: url(images/OPTIC-WELCOME.jpg) no-repeat;">
            <div class="content"
                style="padding: 30px; background: rgba(243, 245, 243, 0.7); color: #206c92; font-size: large;">
                <h1>BIENVENUE CHEZ ABIR OPTIC</h1>
                <h2>Votre vision, Notre passion!</h2>
                <a href="products.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/lunettes-enfants.jpg) no-repeat;">
            <div class="content"
                style="padding: 30px; background: rgba(243, 245, 243, 0.7); color: rgb(35, 121, 201); font-size: large; ">
                <h1>CHEZ ABIR OPTIC</h1>
                <h2>La qualité rencontre la mode,<br> et la clarté de la vision est notre priorité.</h2>
                <a href="products.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/TASSE-LUNETTE.jpg) no-repeat;">
            <div class="content"
                style="padding: 30px; background: rgba(243, 245, 243, 0.7); color: rgb(35, 121, 201); font-size: large;">
                <h1>ABIR OPTIC</h1>
                <h2>vous propose un large choix de lunette de vue,<br>et lunettes de soleil tendance au meilleur prix !
                </h2>
                <a href="products.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
        <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

    </section>

    <!-- home section ends     -->

    <!-- banner section starts  -->
    <section class="center-section">
        <h1 class=" title" style="margin-bottom: 0px;"> Nos promotions </h1>
    </section>
    <section class="banner">
        <div class="box">
            <div class="solde">Solde 50%</div>
            <img src="images/lunettes3.jpg" alt="">
            <div class="content">
                <a href="products.php" class="btn acheter-maintenant margin-top-80">Acheter maintenant</a>
            </div>
        </div>

        <div class="box">
            <div class="solde">Solde 50%</div>
            <img src="images/lunettes10.jpg" alt="">
            <div class="content">
                <a href="products.php" class="btn acheter-maintenant margin-top-80">Acheter maintenant</a>
            </div>
        </div>

        <div class="box">
            <div class="solde">Solde 50%</div>
            <img src="images/lunettes6.jpg" alt="">
            <div class="content">
                <a href="products.php" class="btn acheter-maintenant margin-top-80 ">Acheter maintenant</a>
            </div>
        </div>

    </section>
    <section class="center-section">
        <h1 class=" title" style="margin-bottom: 0px;"> Nos services </h1>
    </section>
    <section class="qui-sommes-nous">
        <div class="icons-container">

            <div class="icons">
                <img src="images/icon-1.png" alt="">
                <h3>Examen de la vue professionnelle</h3>
            </div>


            <div class="icons">
                <img src="images/icon-2.png" alt="">
                <h3>Lunettes & Lentilles de qualité</h3>
            </div>

            <div class="icons">
                <img src="images/icon-5.png" alt="">
                <h3>1 Ans de Garantie montures et verres</h3>
            </div>

            <div class="icons">
                <img src="images/icon-4.png" alt="">
                <h3>Entretien et Réparation</h3>
            </div>

            <div class="icons">
                <img src="images/icon-3.png" alt="">
                <h3>Conseils de Mode Optique</h3>
            </div>





        </div>
    </section>



    <section class="footer">

        <div class="credit">
            <div>
                <p>&copy; 2023 Abir optic - Tout droit réservés</p>
                <a href="mentions-legales.php">Mentions légales</a><br />
                <a href="cgv.php">Politique de confidentialité</a><br />
            </div>

            <h3>Suivez-nous</h3>
            <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook
            </a>

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