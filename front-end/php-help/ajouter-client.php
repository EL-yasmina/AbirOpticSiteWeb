<?php
    // inclure les fichiers nécessaires
    include('session.php');

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['genre']; 
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];

    $nouveauClient = new Client(0, $nom, $prenom, $sexe, $email, $telephone, $adresse, $ville, $password);
    $gestionClient = new GestionClient();

    $clientExistant = $gestionClient->emailExist($email);

    if ($clientExistant) {
        // L'email existe déjà, rediriger vers la page inscription.php avec un message d'erreur
        header("Location: ../inscription.php?erreur=email_existe");
        exit();
    }
    
    $gestionClient->insert($nouveauClient);

    $client = $gestionClient->selectAvecEmailEtPassword($email,$password);    

    $_SESSION['id'] = $client->id;
    $_SESSION['nom'] = $client->nom;
    $_SESSION['prenom'] = $client->prenom;

    if (isset($_SESSION['page']) && $_SESSION['page'] === 'panier.php') {     
        header("Location: ../panier.php");
        $_SESSION['panier'] = [];
        $_SESSION['page'] = null;
    }
    else {
        header("Location: ../accueil.php");
    }   
 

?>
