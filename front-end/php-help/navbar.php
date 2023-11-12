<?php 
    function calculerTotalProduitsDansPanier() {
        $totalProduits = 0;
        if (isset($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $produit) {
                $totalProduits += $produit['quantite'];
            }
        }    
        return $totalProduits;
    }

    function calculerSommeTotalProduitsDansPanier() {
        if (!isset($_SESSION['panier']) || empty($_SESSION['panier'])) 
            return 0;

        $gestionProduit = new GestionProduit();
        $total = 0;
        foreach ($_SESSION['panier'] as $produitInfo) {
            $idProduit = $produitInfo['id'];            
            $produit = $gestionProduit->selectAvecId($idProduit);
            if ($produit) {
                $prix_avec_solde = ($produit->prix - (  ($produit->solde * $produit->prix)/100   ));
                $total = $total +  ($produitInfo['quantite'] * $prix_avec_solde);
            }
        }
        return sprintf("%.02f", $total);        
    }

?>