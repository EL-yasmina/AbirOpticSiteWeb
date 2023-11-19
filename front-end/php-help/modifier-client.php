<?php
    // inclure les fichiers nécessaires
    include('session.php');
    include('../../back-end/back-end.php');

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
    if (empty(trim($password))) {
        $password = $client->password;
        echo "---->".$client->password;
    }

    $client = new Client($_SESSION['id'] , $nom, $prenom, $sexe, $email, $telephone, $adresse, $ville, $password);
    

    $gestionClient->update($client);

    $_SESSION['id'] = $client->id;
    $_SESSION['nom'] = $client->nom;
    $_SESSION['prenom'] = $client->prenom;

    header("Location: ../mon-compte.php");
       
 

?>
