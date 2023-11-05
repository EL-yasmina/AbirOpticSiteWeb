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
        include('php-help/session.php');
        include('php-help/ajouter-panier.php');
        include('php-composants/header.php'); 
    ?>   
    
    <script>document.getElementById("produits").classList.add('selected-menu');</script>
    
    

    <section class="heading">
        <h1>Nos produits</h1>
        <p> <a href="accueil.php">accueil</a> >> produits </p>
    </section>

    <section class="products">
        <div class="box-container">
            <?php include('php-composants/produits-list.php');?>
        </div>

    </section>

    <!-- prodcuts section ends -->












    
    <?php include('php-composants/footer.php'); ?>

    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script type="text/javascript">
    window.onload = function() {Calendly.initBadgeWidget({ url: 'https://calendly.com/yasminataif99/30min',text: 'Prendre un rendez-vous avec nous',color: '#0069ff',textColor: '#ffffff',branding: false});}</script>
</body>

</html>