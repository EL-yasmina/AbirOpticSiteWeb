<?php 
    function calculerTotalProduitsDansPanier() {
        $totalProduits = 0;
    
        // Vérifiez si le panier existe dans la session
        if (isset($_SESSION['panier'])) {
            // Parcourez tous les produits dans le panier
            foreach ($_SESSION['panier'] as $produit) {
                // Ajoutez la quantité de chaque produit au total
                $totalProduits += $produit['quantite'];
            }
        }
    
        return $totalProduits;
    }
    function calculerSommeTotalProduitsDansPanier() {
        if (!isset($_SESSION['panier']) || empty($_SESSION['panier'])) 
            return 0;

        $conn = mysqli_connect("localhost","root","","abiroptic");
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        
        $total = 0;

        foreach ($_SESSION['panier'] as $produit) {
            $idProduit = $produit['id'];
            $query = "SELECT * FROM produit WHERE id = $idProduit";
            $result = $conn->query($query);
            if ($result) {
                $row = $result->fetch_assoc();
                $prix_avec_solde = ($row['prix'] - (  ($row['solde'] * $row['prix'] )/100   ));
                $total = $total +  ($produit['quantite'] * $prix_avec_solde);
            }
        }
        $conn->close();
        return sprintf("%.02f", $total);        
    }

?>