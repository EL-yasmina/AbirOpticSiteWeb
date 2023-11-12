<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>

<body>
    <?php 
        include('../back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
        $_SESSION['page'] = null;
    ?>

    <section class="heading">
        <h1>Panier d'achat</h1>
        <p> <a href="accueil.php">accueil</a> >> commandes </p>
    </section>
    <script>
        document.getElementById("panier").classList.add('selected-menu-panier');
    </script>
    <section class="shopping-cart">

        <h1 class="title">
            <?php  
                if (empty($_SESSION['panier'])) echo "Vous n'avez pas de commandes";
                else echo 'Vos commandes';
            ?>

        </h1>


        <?php include('php-composants/commandes-list.php'); ?>

        

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