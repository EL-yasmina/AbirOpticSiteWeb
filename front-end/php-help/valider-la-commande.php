<?php

    include('session.php');
    include('../../back-end/classes-gestion/gestion-commande.php');
    $_SESSION['page'] = 'panier.php';
    
    if(isset($_SESSION['id'])) {
        $idClient = $_SESSION['id'];
        $gestionCommmande = new GestionCommande();
        foreach ($_SESSION['panier'] as $produit) {
            $idProduit = $produit['id'];
            $quantite = $produit['quantite'];
            $gestionCommmande->insert(new Commande(null, $idProduit, $idClient, $quantite, '1'));
        }
        $_SESSION['panier'] = [];
        header("Location: ../panier.php");
    }
    else {
        header("Location: ../login.php");
    }
    
?>