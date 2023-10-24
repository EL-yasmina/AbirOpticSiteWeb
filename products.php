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
            <a href="cart.php" class="fas fa-shopping-cart"> <?php echo calculerTotalProduitsDansPanier(); ?></a>
        </div>



    </header>

    <section class="heading">
        <h1>Nos produits</h1>
        <p> <a href="accueil.php">accueil</a> >> produits </p>
    </section>

    <section class="products">
        <div class="box-container">
            <?php
                $conn = mysqli_connect("localhost","root","","abiroptic");

                // Vérification de la connexion
                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                // Requête SQL pour sélectionner tous les produits
                $sql = "SELECT * FROM produit";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imageData = $row['image'];
                        $imageBase64 = base64_encode($imageData);

                        $html =  
                        '<div class="box">
                            <div class="image">
                                <div class="icons">
                                    <a href="?ajouterAuPanier=' .$row['id']. '" class="fas fa-shopping-cart"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $row['nom'] . '">
                            </div>
                            <div class="content">
                                <h3>' . $row['nom'] . '</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>';
                        
                        if ($row['solde'] > 0) {
                            $html .= '<div class="price">' . $row['solde'] . ' dh <span>' . $row['prix'] . ' dh</span></div>';
                        } else {
                            $html .= '<div class="price">' . $row['prix'] . ' dh </div>';
                        }
                        
                        $html .= '</div> 
                        </div>';


                        echo $html;

                        

                    }
                } else {
                    echo "Aucun produit trouvé dans la base de données.";
                }

                // Fermer la connexion à la base de données
                $conn->close();
            ?>

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

            <h3>Suivez-nous</h3>
            <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook
            </a>

            <a href="https://www.instagram.com/abiroptic/"> <i class="fab fa-instagram"></i> instagram </a>

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