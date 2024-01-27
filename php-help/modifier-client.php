<?php
    // inclure les fichiers nécessaires
    include('session.php');
    include('../back-end/back-end.php');

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['genre']; 
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $password = $_POST['new_mot_de_passe'];
   

    echo $_SESSION['id'];
    $gestionClient = new GestionClient();
    echo "----".$_POST['new_mot_de_passe'];
    echo "----".$_POST['confirmer_new_mot_de_passe'];
    $client = $gestionClient->selectAvecId($_SESSION['id']);
    
    // Vérification et hachage du nouveau mot de passe s'il est défini et confirmé
    if (!empty(trim($password)) && $password === $_POST['confirmer_new_mot_de_passe']) {
        $hashedPassword = $password;
    } elseif (empty(trim($password))) {
        $hashedPassword = $client->password; // Conserve le mot de passe actuel s'il est vide
    } else {
        // Gérer les erreurs de confirmation du mot de passe ici (par exemple, redirection avec un message d'erreur)
        header("Location: ../mon-compte.php?erreur=mot_de_passe_non_confirme");
        exit();
    }

    $client = new Client($_SESSION['id'] , $nom, $prenom, $sexe, $email, $telephone, $adresse, $ville, $hashedPassword);
    

    $gestionClient->update($client);

    $_SESSION['id'] = $client->id;
    $_SESSION['nom'] = $client->nom;
    $_SESSION['prenom'] = $client->prenom;

    header("Location: ../mon-compte.php");
    exit(); 
 

?>
