<?php
    include('session.php');
    
    if(isset($_SESSION['id'])) {

        $conn = mysqli_connect("localhost","root","","abiroptic");

        $sql = '';
        $idClient = $_SESSION['id'];

        foreach ($_SESSION['panier'] as $produit) {
            $idProduit = $produit['id'];
            $quantite = $produit['quantite'];
            $sql = 'INSERT INTO commande (date, id_produit, id_client, quantite, status) 
                    VALUES (NOW(),'.$idProduit.', '.$idClient.', '.$quantite.', 1)';
            $conn->query($sql);
        }
        $_SESSION['panier'] = [];
        $conn->close();
        header("Location: ../panier.php");
    }
    else {
        header("Location: ../login.php");
    }



    
?>