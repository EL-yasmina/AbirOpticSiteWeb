<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Gérez vos informations personnelles en toute sécurité sur Abir Optic." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon compte</title>


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

    <script>
    document.getElementById("user-menu").classList.add('selected-menu');
    </script>
    <section class="heading">
        <h1>Compte</h1>
        <p> <a href="accueil.php">accueil</a> >> mon compte </p>
    </section>
    <?php             
        $gestionClient = new GestionClient();
        $client = $gestionClient->selectAvecId($_SESSION['id']);
    ?>
    <section class="register-form">

        <form onsubmit="return validerMotDePasseMonCompte();" action="php-help/modifier-client.php" method="post">
            <h3>Vos informations personnelles</h3>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="nom" placeholder="Nom" pattern="[A-Za-z\s]+" required
                    value="<?php echo $client->nom; ?>">
            </div>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="prenom" placeholder="Prénom" pattern="[A-Za-z\s]+" required
                    value="<?php echo $client->prenom; ?>">
            </div>

            <div class="inputBox">
                <input type="radio" id="femme" name="genre" value="femme" class="radio-button"
                    <?php echo ($client->sexe === 'femme') ? 'checked' : ''; ?>>
                <label for="femme" class="radio-button-label">Femme</label>

                <input type="radio" id="homme" name="genre" value="homme" class="radio-button"
                    <?php echo ($client->sexe === 'homme') ? 'checked' : ''; ?>>
                <label for="homme" class="radio-button-label">Homme</label>
            </div>

            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" name="telephone" placeholder="Téléphone" pattern="[0-9]{10}"
                    title="Veuillez saisir un numéro de téléphone valide avec exactement 10 chiffres, sans espaces ni caractères spéciaux."
                    required value="<?php echo $client->telephone; ?>">
            </div>

            <div class="inputBox">
                <span class="fas fa-city"></span>
                <input type="text" name="adresse" placeholder="Adresse" required
                    value="<?php echo $client->adresse; ?>">
            </div>

            <div class="inputBox">
                <span class="fas fa-city"></span>
                <input type="text" name="ville" placeholder="Ville" required value="<?php echo $client->ville; ?>">
            </div>

            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="E-mail" required value="<?php echo $client->email;?>" readonly >
            </div>

            <div class="inputBox">
                <span id="confirmer_mot_de_passe_icon" class="fas fa-lock"></span>
                <input type="password" id="new_mot_de_passe" name="new_mot_de_passe"
                    placeholder="Nouveau mot de passe" autocomplete="new-password"
                    title="Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&) et avoir une longueur d'au moins 8 caractères."
                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
            </div>
            <div class="inputBox">
                <span id="confirmer_mot_de_passe_icon" class="fas fa-lock"></span>
                <input type="password" id="confirmer_new_mot_de_passe" autocomplete="new-password" name="confirmer_new_mot_de_passe"
                    placeholder="Confirmez le nouveau mot de passe"
                    title="Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&) et avoir une longueur d'au moins 8 caractères."
                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
            </div>

            <input type="submit" value="Sauvegarder" class="btn" onclick="cleanValidatorMotDePasseMonCompte()">
        </form>




    </section>

    <?php include('php-composants/footer.php'); ?>

</body>

</html>