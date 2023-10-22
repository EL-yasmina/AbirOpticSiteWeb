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
?>