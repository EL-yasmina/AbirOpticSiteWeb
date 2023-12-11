<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Lunettes de vue et de soleil tendance pour hommes et femmes chez Abir Optic. Qualité et style réunis.">

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

        <div class="slide active" style="background: url(images/freepic9.png) no-repeat;">
            <div class="content">

            <h3>Lunettes de vue <br/>et de soleil stylées</h3>
            <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/home-bg-2.png) no-repeat;">
            <div class="content">
                <h3>la clarté de la vision <br/>est notre priorité.</h3>
                <a href="produits.php" class="btn acheter-maintenant">Découvrir nos produits</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/home-bg-3.png) no-repeat; ">
            <div class="content">
                <h3>Lunettes tendance <br/>prix imbattables !
                </h3>
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

            <div class="icons" onclick="afficherDescription()">
                <img src="images/icon-1.png" alt="examen-de-vue" class="img-responsive">
                <h3>Examen de la vue pro</h3>
                <div class="description">
                    <p>Chez Abir Optic, nos examens de vue précis et personnalisés garantissent
                        des corrections optiques adaptées à chaque individu. Grâce à nos technologies avancées,
                        bénéficiez d'une vision claire et confortable pour un quotidien sans compromis.</p>
                </div>


            </div>


            <div class="icons" onclick="afficherDescription()">
                <img src="images/444.png" alt="cash-en-delivery" class="img-responsive">
                <h3>Cash en Dilevery</h3>
                <div class="description">
                    <p>Le service de cash en delivery chez Abir Optic simplifie votre achat.
                        Recevez et payez vos commandes directement à la livraison, vous offrant
                        commodité et tranquillité d'esprit pour vos acquisitions optiques.
                        Notre mode de paiement sécurisé assure une transaction fluide et fiable à chaque commande.</p>
                </div>
            </div>

            <div class="icons" onclick="afficherDescription()">
                <img src="images/icon-5.png" alt="garantie" class="img-responsive">
                <h3>1 Ans de Garantie </h3>
                <div class="description">
                    <p>Chez Abir Optic, nous garantissons la qualité de nos produits avec une garantie d'un an.
                        Votre satisfaction et la durabilité de vos lunettes sont notre priorité,
                        vous offrant tranquillité d'esprit et confiance dans votre investissement optique.</p>
                </div>
            </div>

            <div class="icons" onclick="afficherDescription()">
                <img src="images/icon-4.png" alt="entretien lunettes" class="img-responsive">
                <h3>Entretien et Réparation</h3>
                <div class="description">
                    <p>Abir Optic assure l'entretien et la réparation de vos lunettes avec expertise.
                        Notre service dédié veille à ce que vos montures restent en parfait état,
                        assurant durabilité et confort visuel pour une vision sans compromis.</p>
                </div>
            </div>

            <div class="icons" onclick="afficherDescription()">
                <img src="images/icon-3.png" alt="conseils-mode-optique" class="img-responsive">
                <h3>Conseils de Mode Optique</h3>
                <div class="description">
                    <p>Chez Abir Optic, nos conseils en mode optique vous guident vers un choix de lunettes parfaitement
                        adapté à votre style et vos besoins visuels. Découvrez une gamme diversifiée de montures
                        élégantes
                        et fonctionnelles, alliant tendance et confort pour une vision qui vous ressemble.</p>
                </div>
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
                <q>Un bon service (serviable et disponible), qualité des produits (verres, lentilles...) Est
                    magnifique.</q>
                <p class="author">- Aicha EL Fakhari</p>
            </div>

            <div class="mySlides">
                <q>Excellent service, un vaste choix de montures solaires et optiques, des prix abordables. À fortement
                    recommander !</q>
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


    <section class="slogan">
        <div class="slogan-content">
            <div class="slogan-text">
                <h2 class="slogan-title">Votre vision<img src="images/vision-partagee.png" alt="vision" width="30"
                        hight="30" class="img-responsive"> notre passion<img src="images/aimer.png" alt="passion"
                        width="30" hight="30" class="img-responsive"></h2>
                <p class="slogan-description">Abir Optic, là où votre vision devient notre passion. Nous sommes dévoués
                    à créer une expérience optique inégalée,
                    chaque monture étant le reflet de notre engagement envers votre confort visuel. Parce que votre
                    clarté visuelle est notre moteur,
                    nous nous efforçons de vous offrir la meilleure vision possible, avec passion et détermination.
                    Notre engagement envers l'excellence et l'innovation guide chacun de nos choix,
                    pour vous fournir des solutions optiques à la hauteur de vos attentes.</p>
                <a href="qui-sommes-nous.php" class="btn-slogan">En savoir plus</a>

            </div>

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
            color: '#0367A6',
            textColor: '#ffffff',
            branding: false
        });
    }
    </script>


</body>

</html>