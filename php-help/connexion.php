<?php

include('session.php');

include('../back-end/back-end.php');

$email = $_POST['email'];
//$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //fonction:'filter_input pour netoyer les valeurs et prévenir les attaques par injection 
$password = $_POST['password'];

$gestionClient = new GestionClient();
$client = $gestionClient->selectAvecEmailEtPassword($email,$password);

if ($client != null  ) {

    $_SESSION['id'] = $client->id;
    $_SESSION['nom'] = $client->nom;
    $_SESSION['prenom'] = $client->prenom;
    
    // Redirection vers la page d'accueil
    if (isset($_SESSION['page']) && $_SESSION['page'] === 'panier.php') { // cas de commande
        header("Location: ../panier.php");
        $_SESSION['page'] = null;
    }else { // cas de connexion normal
        header("Location: ../index.php");
    }
   

} else {
    // connexion échouée, rediriger vers la page de connexion
    header("Location: ../login.php?erreur=identifiants_incorrect");
}
 
?>
