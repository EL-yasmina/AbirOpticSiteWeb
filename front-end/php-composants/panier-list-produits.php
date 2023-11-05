<?php

// Vérifiez si le panier existe dans la session
if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
    // Établissez une connexion à la base de données
    $conn = mysqli_connect("localhost","root","","abiroptic");
    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Créez une liste de produits
    $listeProduits = '';

    // Parcourez les produits dans le panier
    foreach ($_SESSION['panier'] as $produit) {
        $idProduit = $produit['id'];
    
        // Effectuez une requête SQL pour récupérer les informations du produit depuis la base de données
        $query = "SELECT * FROM produit WHERE id = $idProduit";
        $result = $conn->query($query);
    
        // Vérifiez si la requête a réussi
        if ($result) {
            $row = $result->fetch_assoc();
            $imageData = $row['image'];
            $imageBase64 = base64_encode($imageData);
            $listeProduits .= '
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $row['nom'] . '">

                <div class="content">
                    <h3>' . $row['nom'] . '</h3>
                    <form action="">
                        <span>quantity :</span>
                        <input type="number" name="" value="'.$produit['quantite'].'" id="">
                    </form>
                    <div class="price"> ' . sprintf("%.02f", ($row['prix'] - (  ($row['solde'] * $row['prix'] )/100   ))) . ' DH <span>' . $row['prix'] . ' DH</span> </div>
                </div>
            </div>
            ';
        }
    }
    // Affichez la liste de produits
    echo $listeProduits;

    $conn->close();
    }
?>