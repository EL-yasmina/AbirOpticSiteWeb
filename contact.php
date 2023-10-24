<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <!--    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" />
-->
    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.0/dist/email.min.js">
    </script>

</head>

<body>
<?php
    include('fonctions-php/session.php');
    include('fonctions-php/navbar.php');
    
?>

    <header class="header">

        <a href="accueil.php" class="logo">
            <img src="images/logo.png" alt="abiroptic" height="45px" width="75px" >
        </a>


        <nav class="navbar">
            <ul>
                <li><a href="accueil.php">accueil</a></li>
                <li><a href="products.php">produits</a></li>
                <li><a href="qui-sommes-nous.php">Qui sommes-nous</a></li>

                <li><a href="contact.php" class="selected-menu">contact</a></li>
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
        <h1>nous contacter</h1>
        <p> <a href="accueil.php">accueil</a> >> contact </p>
    </section>

    <!-- header section -->

    <!-- contact section starts  -->

    <section class="contact">


        <div class="row">

            <form id="contact-form">
                <input id="nom" type="text" placeholder="Votre nom complet" class="box">
                <input id="tel" type="text" placeholder="Votre numero de telephone" class="box">
                <input id="email" type="email" placeholder="votre email" class="box">
                <textarea id="message" name="" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="btn">Envoyer</button>
            </form>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.864154544723!2d-2.995980670560647!3d35.15306930116489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77a9346cb45e6d%3A0x46c8fb4799bac4eb!2sAbir%20Optic!5e0!3m2!1sfr!2sfr!4v1695753681162!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <section class="banner">
        <!--https://zurb.com/playground/foundation-icon-fonts-3-->
        <div class="">
            <div class="panel-heading">

                <div class="">
                    <i class="fi-map"></i> Bd Mohamed V N 75 SEGANGANE
                </div>
                <div class="">
                    <i class="fi-telephone"></i> +212 536351121
                </div>
                <div class="">
                    <i class="fi-mail"></i> contact.abiroptic@gmail.com
                </div>
            </div>

        </div>
        <div class="">
            <div class="panel-heading">

                <div>
                    <strong>
                        Horaire d'overture:
                    </strong>
                </div>
                <div>
                    Lundi - Vendredi: 09:00-13:00 / 15:00-19:00
                </div>
                <div>
                    Samedi: 09:00-14:00
                </div>

            </div>

        </div>
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
            <a href="https://www.facebook.com/abiroptic.page/?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook
            </a>

            <a href="https://www.instagram.com/abiroptic/"> <i class="fab fa-instagram"></i> instagram </a>

        </div>
    </section>
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script
        type="text/javascript">window.onload = function () { Calendly.initBadgeWidget({ url: 'https://calendly.com/yasminataif99/30min', text: 'Prendre un rendez-vous avec nous', color: '#0069ff', textColor: '#ffffff', branding: false }); }</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.0/dist/email.min.js">
    </script>
    <script type="text/javascript">
        function sendMessage() {
            let from_this_email = document.getElementById("email").value;
            let message = document.getElementById("message").value;
            let tel = document.getElementById("tel").value;
            let nom = document.getElementById("nom").value;

            emailjs.send("service_83185bj", "template_xc5kvg5", {
                from_name: from_this_email,
                to_name: nom,
                message: message,
                reply_to: tel,
            }).then(function (res) {
                console.log('res...', res);
                alert("res :" + res)
            }, function (error) {
                console.log('FAILED...', error);
                alert("error :" + error)
            });
        }

    </script>

    <script>
        (function () {
            emailjs.init("R6G3VN3HDr3ig-NUC");
        })();
        document.getElementById("contact-form").addEventListener("submit", function (event) {
            event.preventDefault();
            var form = this;
            var formData = new FormData(form);

            let from_this_email = document.getElementById("email").value;
            let message = document.getElementById("message").value;
            let tel = document.getElementById("tel").value;
            let nom = document.getElementById("nom").value;

            emailjs.send("service_83185bj", "template_xc5kvg5", {
                from_name: from_this_email,
                to_name: nom,
                message: message,
                reply_to: tel,
            }).then(function (res) {
                alert('Votre message a été envoyé', res);
                form.reset();
            }, function (error) {
                alert('Il y a eu une erreur lors de l\'envoi. Merci de réessayer ultérieurement.' + error);
                form.reset();
            });
        });
    </script>
    <!-- footer section ends -->

</body>

</html>