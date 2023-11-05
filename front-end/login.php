<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter</title>

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
        include('php-composants/header.php'); 
    ?>

    <section class="heading">
        <h1>compte</h1>
        <p> <a href="accueil.php">accueil</a> >> se connecter </p>
    </section>

    <section class="login-form">

        <form action="php-help/connexion.php" method="post">
            <h3>Connexion</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="email" name="email" placeholder="votre e-mail" id="" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-lock"></span>
                <input type="password" name="password" placeholder="votre mot de passe" id="" required>
            </div>
            <input type="submit" value="me connecter" class="btn">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Se souvenir de moi</label>
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <a href="inscription.php" class="btn">Créer un compte</a>
        </form>

    </section>

    <?php include('php-composants/footer.php'); ?>

</body>

</html>