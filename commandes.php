<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Consultez l'état et l'historique de vos commandes sur Abir Optic. Suivez facilement vos achats de lunettes de soleil et de vue.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
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

    <section class="heading">
        <h1>Commande</h1>
        <p> <a href="index.php">accueil</a> >> commande</p>
    </section>
    <script>
        document.getElementById("commandes").classList.add('selected-menu');
    </script>
    <section class="shopping-cart">

        <h1 class="title">
            <?php  
                if (empty($_SESSION['id'])  || count((new GestionCommande())->selectParClient($_SESSION['id'])) == 0  ) 
                    echo "Vous n'avez pas de commandes";
                else echo 'Vos commandes';
            ?>

        </h1>


        <?php include('php-composants/commandes-list.php'); ?>
        <a href="contact.php" class="btn-nousContacter">Nous contacter</a>

        

    </section>

    <?php include('php-composants/footer.php'); ?>


</body>

</html>