<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Explorez notre collection de lunettes de soleil et de vue pour hommes et femmes chez Abir Optic.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produits</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"><!-- JavaScript -->
    <script src="js/script.js" defer></script>

</head>

<body>

    <?php 
        include('back-end/back-end.php');
        include('php-help/session.php');
        include('php-help/ajouter-panier.php');
        include('php-composants/header.php'); 
    ?>

    <script>
    document.getElementById("produits").classList.add('selected-menu');
    </script>



    <section class="heading">
        <h1>Nos produits</h1>
        <p> <a href="index.php">accueil</a> >> produits </p>
    </section>

    <section class="products">
        <div class="box-container">
            <?php include('php-composants/produits-list.php');?>
        </div>

    </section>

    <?php include('php-composants/footer.php'); ?>



</body>

</html>