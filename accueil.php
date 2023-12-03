<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lunettes de vue et de soleil tendance pour hommes et femmes chez Abir Optic. Qualité et style réunis.">

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
        include('back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
    ?>
    <script>
    document.getElementById("accueil").classList.add('selected-menu');
    </script>

    <section class="accueil">

        <div class="slide active" style="background: url(images/lunettes-enfants.jpg) no-repeat;">
            <div class="content"
                style="padding: 20px; background:  linear-gradient(to right, #8ecae6, #fff); color: #023047; font-size:1.5em; border-radius:8px;">
                <h1>Chez Abir Optic,</h1>
                <h2>Lunettes de vue et de soleil stylées</h2>
                
                <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/LOGO-OPTIC1.png) no-repeat;">
            <div class="content"
                style="padding: 20px; background:  linear-gradient(to right, #8ecae6, #fff); color: #023047; font-size: 1.5em; border-radius:8px;  ">
                <h2>CHEZ ABIR OPTIC,<br>La qualité rencontre la mode,<br> et la clarté de la vision est notre priorité.</h2>
                <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/OPTIC-WELCOME.jpg) no-repeat; ">
            <div class="content"
                style="padding: 20px; background: linear-gradient(to right, #8ecae6, #fff); color: #023047; font-size: 1.5em; border-radius:8px;">
                <h2>ABIR OPTIC, <br>vous propose un large choix de lunette de vue,<br>et lunettes de soleil tendance au meilleur prix !
                </h2>
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
  
    <!-- <section class="avis">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-2856bc45-8642-47b3-8564-867b7cd10063" data-elfsight-app-lazy></div>

    </section> -->

    
    
    
    
    <section class="center-section">
        <h2 class=" title" style="margin-bottom: 0px;"> Votre témoignages, notre fierté. </h2>
    </section>
    
    <section class="slide-section">
    <div class="slideshow-container">

<div class="mySlides">
  <q>Un bon service (serviable et disponible), qualité des produits (verres, lentilles...) Est magnifique.</q>
  <p class="author">- Aicha EL Fakhari</p>
</div>

<div class="mySlides">
  <q>Excellent service, un vaste choix de montures solaires et optiques, des prix abordables. À fortement recommander !</q>
  <p class="author">- Abdellah Fakhri </p>
</div>

<div class="mySlides">
  <q>Service parfait, à l'écoute, des lunettes de qualité... rien à dire.</q>
  <p class="author">- Kawthar HAFSI</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

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