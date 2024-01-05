<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Découvrez Abir Optic: notre passion pour des lunettes de qualité, nos valeurs et services pour une expérience optique exceptionnelle.">
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

    <?php 
        include('back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
    ?>
    <script>
    document.getElementById("qui-sommes-nous").classList.add('selected-menu');
    </script>

    <section class="heading">
        <h1>Qui sommes-nous</h1>
        <p> <a href="accueil.php">accueil</a> >> Qui sommes-nous</p>
    </section>
    <section class="qui-sommes-nous" style="background-color:#EBEEF2">
        <div class="row">
            
            <!-- height="550" width="1000" -->
            <div class="content">
                <p><span style=" color: #2F6690;"> ABIR</span> est une opticienne optométriste
                    passionnée qui a apporté son expertise et
                    son engagement à l'optique depuis de nombreuses années. Avec une expérience solide dans l'industrie,
                    elle a
                    créé Abir Optic il y a 6 ans pour offrir des soins oculaires exceptionnels et des solutions optiques
                    de haute
                    qualité.
                </p><br>
                <p><span style=" color: #2F6690;">ABIR OPTIC: </span> Votre Destination Optique de
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
                    <a href="contact.php" class="btn-nousContacter">Nous contacter</a>
            </div>
            <div class="image">
                <img src="images/37.png" alt="Boutique d'optique Abir Optic à Nador" max-height="300px"  >
            </div>
        </div>
    </section>

    <section class="center-section">
        <h2 class=" title" style="margin-bottom: 0px;"> Pourquoi nous ? </h2>
    </section>

    <section class="qui-sommes-nous">
        <div class="quisommeNrow">
            <div class="pourquoi-nous">
                <img src="images/lunettes-enfants.jpg" alt="lunettes de vue de qualité" width="600" height="400">
                </a>
                <div class="desc">
                    <h3>Qualité Supérieure:</h3>
                    <p>Nous ne compromettons jamais sur la qualité de nos produits. Vos yeux méritent le meilleur, c'est
                        pourquoi nous travaillons avec des marques réputées.</p>
                </div>
            </div>

            <div class="pourquoi-nous">
                <img src="images/33.jpg" alt="lunettes de soleil de luxe" width="600" height="400" class="img-responsive">
                </a>
                <div class="desc">
                    <h3>Prix Concurrentiels: </h3>
                    <p>Chez Abir Optic, nous croyons que la qualité ne devrait pas être hors de portée. Profitez de nos
                        tarifs compétitifs sur toutes nos collections.</p>
                </div>
            </div>

            <div class="pourquoi-nous">
                <img src="images/39.jpg" alt="lunettes de soleil homme femme tendances" width="600" height="400">
                </a>
                <div class="desc">
                    <h3>Dernières Tendances:</h3>
                    <p>Restez à la pointe de la mode avec notre sélection de montures et de lentilles. Nos experts vous
                        guideront pour trouver le look parfait.</p>
                </div>
            </div>

            <div class="pourquoi-nous">
                <img src="images/GRAND-LUNETTES.jpg" alt="lunettes de vue avec clip solaire " width="600" height="400">
                </a>
                <div class="desc">
                    <h3>Service Exceptionnel:</h3>
                    <p>Nous engageons à offrir un service exceptionnel, rapide et efficace. Votre confort est notre
                        priorité, Faites confiance à Abir Optic pour une expérience de qualité.</p>
                </div>
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