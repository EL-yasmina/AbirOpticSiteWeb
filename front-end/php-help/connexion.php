<?php

include('session.php');

$email = $_POST['email'];
$password = $_POST['password'];

$gestionClient = new GestionClient();
$client = $gestionClient->selectAvecEmailEtPassword($email,$password);
if ($client != null) {

    $_SESSION['id'] = $client->id;
    $_SESSION['nom'] = $client->nom;
    $_SESSION['prenom'] = $client->prenom;

    // Redirection vers la page d'accueil
    if (isset($_SESSION['page']) && $_SESSION['page'] === 'panier.php') {     
        header("Location: ../panier.php");
        $_SESSION['panier'] = [];
        $_SESSION['page'] = null;
    }
    else {
        header("Location: ../accueil.php");
    }

} else {
    // Authentification échouée, rediriger vers la page de connexion avec un message d'erreur
    header("Location: login.php?erreur=1");
}
 
?>