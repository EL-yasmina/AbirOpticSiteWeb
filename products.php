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

<!-- header section starts  -->

<header class="header">

    <a href="accueil.php" class="logo"> Abir Optic </a>

    <nav class="navbar">
        <ul>
            <li><a href="accueil.php">accueil</a></li>
            <li><a href="products.php"class="selected-menu" >Produits</a></li>
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
        <div id="search-btn" class="fas fa-search"></div>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>Nos produits</h1>
    <p> <a href="accueil.php">accueil</a> >> produits </p>
</section>

<!-- header section -->

<!-- prodcuts section starts  -->

<section class="products">

    
    <div class="box-container">

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                    
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/24.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh <span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                   
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh <span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                   
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                    
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                    
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                    
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                   
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                   
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="cart.php" class="fas fa-shopping-cart"></a>
                   
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="images/product-9.jpg" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.00 dh<span>250.00 dh</span></div>
            </div>
        </div>

    </div>
    
</section>

<!-- prodcuts section ends -->












<!-- footer section starts  -->

<section class="footer">

    <div class="credit">
        <div>
            <p>&copy; 2023 Abir optic - Tout droit réservés</p>
            <a href="mentions-legales.php">Mentions légales</a><br />
            <a href="politique-de-confidentialite.php">Politique de confidentialité</a><br />
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