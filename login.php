<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Connectez-vous à votre compte sur Abir Optic pour accéder à votre profil, suivre vos commandes de lunettes de vue et soleil homme femme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">   
     <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!-- 
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

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
    document.getElementById("user-menu").classList.add('selected-menu');
    </script>
    <section class="heading">
        <h1>compte</h1>
        <p> <a href="index.php">accueil</a> >> se connecter </p>
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
                <input id='mot_de_passe' type="password" name="password" placeholder="votre mot de passe" id="" required>
            </div>
            <input type="submit" value="me connecter" class="btn"  onclick="cleanValidatorMotDePasseLogin()">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Se souvenir de moi</label>
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <a href="inscription.php" class="btn">Créer un compte</a>
        </form>

    </section>

    <?php include('php-composants/footer.php'); ?>
    <script>
        const searchParams = window.location.search;
        const url = window.location.href;
        if (searchParams.includes('erreur=identifiants_incorrect')) {
            alertify.alert("Alert", "Email ou mot de passe incorrect !")
            .setting({
                'label': 'Ok',
                'closable': false
            });
        }
    </script>
</body>

</html>