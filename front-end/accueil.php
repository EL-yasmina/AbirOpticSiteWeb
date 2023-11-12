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

    <?php 
        include('../back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
    ?>
    <script>
    document.getElementById("accueil").classList.add('selected-menu');
    </script>

    <section class="accueil">

        <div class="slide active" style="background: url(images/LOGO-OPTIC1.png) no-repeat;">
            <div class="content"
                style="padding: 20px; background: rgba(243, 245, 243, 0.7); color: #206c92; font-size:1.5em; border-radius:7px; border-style:double;">
                <h1>BIENVENUE CHEZ ABIR OPTIC</h1>
                <h2>Votre vision, Notre passion!</h2>
                <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/lunettes-enfants.jpg) no-repeat;">
            <div class="content"
                style="padding: 20px; background: rgba(243, 245, 243, 0.7); color: rgb(35, 121, 201); font-size: 1.5em; border-radius:7px; border-style:double;">
                <h4>CHEZ ABIR OPTIC<br>La qualité rencontre la mode,<br> et la clarté de la vision est notre priorité.</h4>
                <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/OPTIC-WELCOME.jpg) no-repeat; ">
            <div class="content"
                style="padding: 20px; background: rgba(243, 245, 243, 0.7); color: rgb(35, 121, 201); font-size: 1.5em; border-radius:7px;border-style:double;">
                <h4>ABIR OPTIC <br>vous propose un large choix de lunette de vue,<br>et lunettes de soleil tendance au meilleur prix !
                </h4>
                <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
        <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

    </section>
    
    <section class="center-section">
        <h2 class=" title" style="margin-bottom: 0px;"> Nos promotions </h2>
    </section>

    <section class="banner">
        <?php  include('php-composants/accueil-top-3-produits.php'); ?>
    </section>

    <section class="center-section">
        <h2 class=" title" style="margin-bottom: 0px;"> Nos services </h2>
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
  
    <section class="avis">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-2856bc45-8642-47b3-8564-867b7cd10063" data-elfsight-app-lazy></div>

    </section>




    <?php include('php-composants/footer.php'); ?>

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


</body>

</html>