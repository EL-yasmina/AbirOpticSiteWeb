<?php

include('session.php');
    
$conn = mysqli_connect("localhost","root","","abiroptic");

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Requête pour vérifier les informations de connexion
$sql = "SELECT id, nom, prenom FROM Client WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $id = $row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];

    $_SESSION['id'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    // Redirection vers la page d'accueil
    if (isset($_SESSION['page']) && $_SESSION['page'] === 'panier.php') {     
        header("Location: ../panier.php");
        $_SESSION['panier'] = [];
    }
    else {
        header("Location: ../accueil.php");
    }
} else {
    // Authentification échouée, rediriger vers la page de connexion avec un message d'erreur
    header("Location: login.php?erreur=1");
}

// Fermer la connexion à la base de données
$conn->close();
?>
