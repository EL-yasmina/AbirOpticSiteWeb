<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>

<body>
    <?php 
        include('php-help/session.php');
        include('php-composants/header.php'); 
    ?>

    <section class="heading">
        <h1>Compte</h1>
        <p> <a href="accueil.php">accueil</a> >> s'inscrire </p>
    </section>

    <section class="register-form">

        <form action="">
            <h3>S'inscrire maintenant</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="" placeholder="votre Nom Complet " id="" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="" placeholder="votre e-mail" id="" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-lock"></span>
                <input type="password" name="" placeholder="Entrez votre mot de passe " id="" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-lock"></span>
                <input type="password" name="" placeholder="confirmez votre mot de passe " id="" required>
            </div>
            <input type="submit" value="Inscription" class="btn">
            <a href="login.php" class="btn">Vous avez déjà un compte</a>
        </form>

    </section>

    <?php include('php-composants/footer.php'); ?>

</body>

</html>