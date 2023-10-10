<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui sommes-nous</title>

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
                <li><a href="qui-sommes-nous.php" class="selected-menu">Qui sommes-nous</a></li>

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
        <h1>Qui sommes-nous</h1>
        <p> <a href="accueil.php">accueil</a> >> Qui sommes-nous</p>
    </section>

    <!-- header section -->

    <!-- about section starts  -->

    <section class="qui-sommes-nous">
        <div class="row">
            <div class="image">
                <img src="images/47.jpg" alt="" height="550" width="1000">
            </div>

            <div class="content">
                <p><span style="font-size:large; color: #2F6690;"> ABIR</span> est une opticienne optométriste
                    passionnée qui a apporté son expertise et
                    son engagement à l'optique depuis de nombreuses années. Avec une expérience solide dans l'industrie,
                    elle a
                    créé Abir Optic il y a 6 ans pour offrir des soins oculaires exceptionnels et des solutions optiques
                    de haute
                    qualité.
                </p><br>
                <p><span style="font-size:large; color: #2F6690;">ABIR OPTIC: </span> Votre Destination Optique de
                    Confiance.<br>

                    Situé au cœur de Zegangane, nous sommes fiers de servir notre communauté avec une vaste gamme de
                    produits optiques de qualité supérieure.
                    Nous offrons une large sélection de montures élégantes, de lentilles de contact et de verres de
                    haute qualité pour répondre à vos besoins uniques.
                    Abir Optic, propose aussi des examens de la vue approfondis et personnalisés pour garantir la
                    meilleure correction visuelle
                    possible.
                </p>
                <p>L'achat en ligne de vos lentilles de contact et de vos lunettes chez Abir Optic vous offre un choix
                    illimité parmi une variété de produits de qualité.</p>
            </div>
        </div>
    </section>

    <section class="center-section">
        <h1 class=" title" style="margin-bottom: 0px;"> Pourquoi nous ? </h1>
    </section>

    <section class="qui-sommes-nous">
        <div class="row">
            <div class="gallery">
                <img src="images/lunettes-enfants.jpg" alt="enfant-lun" width="600" height="400">
                </a>
                <div class="desc">
                    <h1>Qualité Supérieure:</h1>
                    <p>Nous ne compromettons jamais sur la qualité de nos produits. Vos yeux méritent le meilleur, c'est
                        pourquoi nous travaillons avec des marques réputées.</p>
                </div>
            </div>

            <div class="gallery">
                <img src="images/33.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">
                    <h1>Prix Concurrentiels: </h1>
                    <p>Chez Abir Optic, nous croyons que la qualité ne devrait pas être hors de portée. Profitez de nos
                        tarifs compétitifs sur toutes nos collections.</p>
                </div>
            </div>

            <div class="gallery">
                <img src="images/39.jpg" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">
                    <h1>Dernières Tendances:</h1>
                    <p>Restez à la pointe de la mode avec notre sélection de montures et de lentilles. Nos experts vous
                        guideront pour trouver le look parfait.</p>
                </div>
            </div>

            <div class="gallery">
                <img src="images/GRAND-LUNETTES.jpg" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">
                    <h1>Service Exceptionnel:</h1>
                    <p>Nous engageons à offrir un service exceptionnel, rapide et efficace. Votre confort est notre
                        priorité, Faites confiance à Abir Optic pour une expérience de qualité.</p>
                </div>
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