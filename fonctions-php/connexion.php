<?php
// Connexion à la base de données
$host = "localhost"; // Adresse du serveur MySQL
$user = "votre_utilisateur"; // Nom d'utilisateur MySQL
$pass = "votre_mot_de_passe"; // Mot de passe MySQL
$db = "votre_base_de_donnees"; // Nom de la base de données MySQL

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
    // Utilisateur authentifié, récupération des données
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];

    // Démarrer la session (si elle n'est pas déjà démarrée)
    session_start();

    // Enregistrez les informations de l'utilisateur dans la session
    $_SESSION['id'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    // Redirection vers la page d'accueil
    header("Location: ../accueil.php");
} else {
    // Authentification échouée, rediriger vers la page de connexion avec un message d'erreur
    header("Location: login.php?erreur=1");
}

// Fermer la connexion à la base de données
$conn->close();
?>
