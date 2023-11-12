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
        include('../back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
    ?>

    <section class="heading">
        <h1>Compte</h1>
        <p> <a href="accueil.php">accueil</a> >> s'inscrire </p>
    </section>

    <section class="register-form">

        <form  onsubmit="return validerMotDePasse();" action="php-help/ajouter-client.php" method="post">
            <h3>S'inscrire maintenant</h3>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="nom" placeholder="Nom" pattern="[A-Za-z\s]+" required>
            </div>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="prenom" placeholder="Prénom" pattern="[A-Za-z\s]+" required>
            </div>

            <div class="inputBox">
                <input type="radio" id="femme" name="genre" value="femme" class="radio-button" checked />
                <label for="femme" class="radio-button-label">Femme</label>

                <input type="radio" id="homme" name="genre" value="homme" class="radio-button" />
                <label for="homme" class="radio-button-label">Homme</label>
            </div>

            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" name="telephone" placeholder="Téléphone" pattern="[0-9]{10}"
                    title="Veuillez saisir un numéro de téléphone valide avec exactement 10 chiffres, sans espaces ni caractères spéciaux."
                    required>
            </div>

            <div class="inputBox">
                <span class="fas fa-city"></span>
                <input type="text" name="adresse" placeholder="Adresse" required>
            </div>

            <div class="inputBox">
                <span class="fas fa-city"></span>
                <input type="text" name="ville" placeholder="Ville" required>
            </div>

            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="inputBox">
                <span id="mot_de_passe_icon" class="fas fa-lock"></span>
                <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe"
                    title="Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&) et avoir une longueur d'au moins 8 caractères."
                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>

            </div>

            <div class="inputBox">
                <span id="confirmer_mot_de_passe_icon" class="fas fa-lock"></span>
                <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" placeholder="Confirmez votre mot de passe"
                    title="Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&) et avoir une longueur d'au moins 8 caractères."
                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>

            </div>

            <input type="submit" value="Inscription" class="btn" onclick="cleanValidatorMotDePasse()">
            <a href="login.php" class="btn">Vous avez déjà un compte</a>
        </form>



    </section>

    <?php include('php-composants/footer.php'); ?>

</body>

</html>