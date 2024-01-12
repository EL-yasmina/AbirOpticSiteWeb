<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Consultez nos Conditions Générales de Vente pour comprendre nos politiques et règlements en matière d'achat, de livraison et de retour.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>

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
        document.getElementById("panier").classList.add('selected-menu-panier');
    </script>

    <section class="heading">
        <h1>Panier d'achat</h1>
        <p> <a href="index.php">accueil</a> >> panier </p>
    </section>

    <section class="merci" style="font-size: 15px; margin-bottom:10px; text-align:center;">
        <h2>Merci pour votre commande</h2>
        <br>
        <p>Nous traiterons votre commande rapidement<br> et vous contacterons sous peu pour confirmer les détails.<br> Merci pour votre patience et votre confiance ! </p>
        <br>
        <img src="images/verifier.png" alt="vision" width="90" hight="90">
    </section>


    <?php include('php-composants/footer.php'); ?>

</body>

</html>