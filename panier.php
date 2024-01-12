<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Consultez votre panier sur Abir Optic. Découvrez les articles que vous avez sélectionnés et procédez à l'achat de lunettes de soleil et de vue pour hommes et femmes.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>panier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>

<body>
    <?php 
        include('back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
        $_SESSION['page'] = null;
    ?>
    <script>
    document.getElementById("panier").classList.add('selected-menu-panier');
    </script>

    <section class="heading">
        <h1>Panier d'achat</h1>
        <p> <a href="index.php">accueil</a> >> panier </p>
    </section>

    <section class="shopping-cart">

        <h1 class="title">
            <?php  
                if (empty($_SESSION['panier'])) echo 'Pas de produit dans votre panier';
                else echo 'Vos Produits';
            ?>

        </h1>

        <div class="box-container">

            <?php include('php-composants/panier-list-produits.php'); ?>

        </div>

        <h1 class="title">Prix total panier</h1>

        <div class="cart-total">
            <h3>total : <span><?php echo calculerSommeTotalProduitsDansPanier(); ?> DH</span></h3>
            <a href="php-help/valider-la-commande.php" class="btn">Valider la commande</a>
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